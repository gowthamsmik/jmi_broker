<?php session_start() ;
error_reporting(3);
$success = false;
if(isset($_SESSION['cpysuccess'])){
    $success = $_SESSION['cpysuccess'];
    unset($_SESSION['cpysuccess']);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<?php include("../includes/softwareinclude/config.php") ?>
<?php include("../includes/compatibility.php"); ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <title>JMI | Copy Trade</title>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <?php include("includes/copy-trade.php") ?>
    <div class="main-header" id="myDiv">
    <?php
    if ($success) {
        echo "<center>Copy trade sent for approval</center>";
        echo '<script>
                setTimeout(function() {
                    var myDiv = document.getElementById("myDiv");
                    myDiv.style.display = "none";
                }, 2000); 
              </script>';
    }
    ?>
</div>

    
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div class="d-flex">
                    <h2 class="fs-4"><?php echo $lang['copy_trade']?></h2>
                    <div class="d-flex ms-auto"><img src="../assets/images/svg/account_circle.svg" class="account_circle" alt="">
                        <p class="mt-1 ms-2"><?php echo $lang['welcome1'] ?>, <?php echo isset($_SESSION['sessionusername']) ? $_SESSION['sessionusername'] :"" ?></p>
                    </div>
                </div>
                <div class="bg-white mt-4 p-5 rounded-3">
                <form id="copyTradeForm" method="post" action='<?php echo $siteurl."cpanel/includes/post-copy-trade.php" ?>'>
                    <div class="row border-0">
                        <div class="col-lg-6 col-md-6 col-sm-12 border-0 mt-4">
                            <label for=""><?php echo $lang['copyFrom']?></label>
                            <select class="form-select mt-2" id="sel1" name="copy_from" onchange="copyFrom(this.value)" required>
                            <option value="" disabled selected >-<?php echo $lang['select']?>-</option>
                                                <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '. $acctname ?> </option>
                                                <?php } ?>
                                                <option id="otheraccount" value="other"><?php echo $lang['other']?></option>
                                                
                            </select>
                            <input type="number" class="form-control border" name="other_account" id="other_account" placeholder="Account Number" style="display:none" />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 border-0 mt-4">
                            <label for=""><?php echo $lang['copyTo']?></label>
                            <select class="form-select mt-2" id="sel1" name="copy_to" required>
                            <option value="" disabled selected >- Select -</option>
                            <?php 
                                                $acctname = "";
                                                foreach($accounts as $account) { 
                                                    if($account['account_type'] == 1)
                                                    {
                                                        $acctname = "Individual Account";
                                                    }
                                                    else
                                                    {
                                                        $acctname = "IB Account";
                                                    } ?>
                                                <option value="<?php echo $account['account_id'] ?>" ><?php echo $account['account_id'].' | '.$acctname ?> </option>
                                                <?php } ?>
                            </select>
                        </div>
                    <!-- </div>
                    <div class="row border-0 mt-4"> -->
                        <div class="col-lg-6 col-md-6 col-sm-12 border-0 mt-4">
                            <label for=""><?php echo $lang['copyPercentage']?>:</label>
                            <input type="number" class="form-control border rounded-3 mt-2" placeholder="0.00" name="percentage" required>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12 border-0 mt-4">
                            <label for=""><?php echo $lang['accountPassword1']?>:</label>
                            <input type="password" class="form-control border rounded-3 mt-2" placeholder="<?php echo $lang['MT4 Password']?>"
                                name="password" required>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="check1" name="option1" value="something"
                                checked required>
                            <label class="form-check-label mt-1" for="check1"><?php echo $lang['iAgreeTerms1']?></label>
                        </div>
                    </div>
                
                <input type="button" class="btn custom-button text-light w-50 mt-4" value="<?php echo $lang['submit']?>" onclick="validateAndSubmit()" /> 
                </form>
                </div>
                <div class="table-container">
                    <h4 class="fs-4 mt-3"> <?php echo $lang['linked_copy_trade']?></h4>
                    <table class="class='gap-3 bg-white table mt-3'" id="copy-trade-table">
                    <thead class="border">
                        <tr>
                                <td>#</td>
                                <td><?php echo $lang['copy_from']?></td>
                                <td><?php echo $lang['copy_to']?></td>
                                <td><?php echo $lang['copy_percentage']?></td>
                                <td><?php echo $lang['status']?></td>
                                <td><?php echo $lang['action']?></td>
                            </tr>
                        </thead>
                        <tbody id="copy-trade-body">
   

 </tbody>
                        </table>
                        </div>

                        <div id="pagination-container" class="pagination float-end">
                    <!-- page numbers -->
            </div>
                    
        

            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); 
    if (isset($_SESSION['copy_trade_meesage'])) {
        echo '<script>alert("' . $_SESSION['copy_trade_meesage'] . '");</script>';
        unset($_SESSION['copy_trade_meesage']);

    }?>
</body>
<script>

function confirmDelete() {
var result = confirm("Are you sure you want to cancel this copy trade, You can't undo this?");

if (result) {
        return true;
    } else {
        return false;
    }
}

$(document).ready(function(){
  
    loadCopyTrades(1);
});

function loadCopyTrades(page){
    i=1;
    $('#copy-trade-table tbody').empty();
    $('#pagination-container').empty();
    $.ajax({
        url:'includes/copy-trade.php?page='+page,
        method: "GET",
        dataType:'json',
        success:function(data){
         
          
            $.each(data.copy_trades,function(index,copy_trade){
               
                // const serialNumber = (page - 1) * data.copy_trades.length + index + 1;
                const serialNumber = (page - 1) * 10 + index + 1;

                let actionHtml='';
                let statusHtml='';
                let statusStage='';
               
                
            if(copy_trade.status!==8 && copy_trade.status!==9){
                actionHtml=`<form action="includes/delete-copy-trade.php?id= ${copy_trade.id}" method="post" onsubmit="return confirmDelete()">
                   
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>`;
            }
           
            if (copy_trade.status == 0) {
                statusStage= 'Pending';
            } else if (copy_trade.status == 1) {
                statusStage= 'Copying';
            } else if (copy_trade.status== 8) {
                statusStage= 'Canceling';
            } else if (copy_trade.status == 9) {
                statusStage= 'Cancelled';
            }
           
            statusHtml=`<td class="${copy_trade.status == 0?'text-danger':copy_trade.status == 1?'text-success':'' }">
                ${statusStage}
             </td>`;
          

                $('#copy-trade-table tbody').append('<tr>'+ '<td>' + serialNumber + '</td>' +
                '<td>' +copy_trade.copy_from+'</td>'+
                '<td>'+ copy_trade.copy_to+'</td>'+
                '<td>'+ copy_trade.percentage+'</td>'+
                `${statusHtml}`+
                `<td>${actionHtml} </td>`+ '</tr>'


                )
              

            });

            if(data.copy_trades.length>0)
                updatePagination(data.totalPages, page,'none','loadCopyTrades');
           
          
            

        },
        error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
    })

}


// function updatePagination(totalPages, currentPage) {
//     $('#pagination-container').empty();

//     if (currentPage > 1) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadCopyTrades(' + (currentPage - 1) + ')"><<</button>');
//     }

//     $('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

//     for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadCopyTrades(' + i + ')">' + i + '</button>');
//     }

//     if (currentPage + 2 < totalPages - 1) {
//         // Display ellipsis or any other indicator for more pages
//         $('#pagination-container').append('<button class="opt-num-btn" disabled>&hellip;</button>');
//     }

//     if (totalPages >= i) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadCopyTrades(' + (currentPage + 1) + ')">>></button>');
//     }
// }
</script>
<script>
function validateAndSubmit() {

var percentage = $('input[name="percentage"]').val();
var copyFrom = $('select[name="copy_from"]').val();
var copyTo = $('select[name="copy_to"]').val();
var agreeTerms = $('input[name="option1"]').prop("checked"); 
var password=$('input[name="password"]').val();
var accountNumber=$('input[name="other_account"]').val();

// Validate transfer_from and transfer_to
if (copyFrom === copyTo) {
    alert("copyFrom and copyTo cannot be the same.");
    return;
}
if(copyFrom=="other")
{
    if(!accountNumber){
        alert("Account Number is Required.");
        return;
    }
}

// Validate other fields
if (!percentage || isNaN(percentage) || percentage <= 0) {
    alert("Please enter a valid Percentage");
    return;
}

if (!agreeTerms) {
    alert("Please agree to the terms before submitting.");
    return;
}
if(!password)
{
    alert("Password is Required.");
    return;
}

// If all validations pass, submit the form
document.getElementById('copyTradeForm').submit();
}


function copyFrom(val){
    if(val=="other"){
       
        $('input#other_account').show();
    }
    else{
       
        $('input#other_account').hide();
    }
}
</script>
<script>

</script>
</html>