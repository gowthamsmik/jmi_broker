<?php if (!isset($_SESSION['sessionuser']))
    session_start();
include("includes/functions.php");
// Check if there's a success message



?>
<!DOCTYPE html>
<html>

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
    <style>
        .body {
            background-color: #F0F0F0;
        }

        .border-bottom-80 {
            border-bottom: 1px solid #DEE2E6;
            /* or your preferred border color */
            height: 80%;
        }

        .card {
            border-radius: 10px;
        }

        .account_circle {
            height: 30px;
            width: 30px;
        }

        .grid-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
            gap: 20px;
        }

        .grid-item {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
        }

        .row-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .row-item {
            margin: 10px;
        }

        .bg {
            background-color: white;
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                /* Set to a single column for smaller screens */
            }
        }

        /* Existing styles... (your existing styles remain unchanged) */

        /* .responsive-table {
            overflow-x: auto;
          
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
           
            margin: 20px auto;
            vertical-align: middle;
            border: 1px solid #DEE2E6;
        } */

        .responsive-table th {
            text-align: center;
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #DEE2E6;
        }

        .responsive-table td {
            text-align: center;
            padding: 12px;
            text-align: left;
            border: 1px solid #DEE2E6;
            vertical-align: middle;
        }

        .responsive-table th {
            text-align: center;
            border-right: 1px solid #DEE2E6;
        }

        .bold-cell {
            font-weight: bold;
            /* color:#000000; */
        }

        .bgs {
            background-color: #d4cbcb;
        }

        .bg-odd {
            background-color: #f7f2f1;
        }

        .responsive-table td .image-cell-container {
            display: flex;
            align-items: center;
        }

        .responsive-table td img.align-middle {
            margin-right: 5px;
            /* Adjust the margin as needed for spacing between image and text */
        }


        .form-control {
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
            width: 100%;
        }

        .btn {
            padding: 10px;
            border-radius: 4px;
            cursor: pointer;
        }

        .btn-success {
            background-color: #5cb85c;
            color: #fff;
            border: 1px solid #4cae4c;
        }

        .btn-default {
            background-color: #ccc;
            color: #333;
            border: 1px solid #ccc;
        }

       

        
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <title>JMI | Control Panel</title>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">
                <div>
                    <div class="d-flex">
                        <h2 class="fs-4">
                            <?php echo $lang['forex_account'] ?>
                        </h2>
                        <div class="d-flex ms-auto"><img
                                src='<?php echo $siteurl . "assets/images/svg/account_circle.svg" ?>'
                                class="account_circle" alt="">
                            <p class="mt-1 ms-2">
                                <?php echo $lang['welcome'] ?>,
                                <?php echo $_SESSION['sessionusername']; ?>
                            </p>
                        </div>
                    </div>
                    <!-- start  details -->
                    <div class="" id="account-details" style="display: block">
                        <h2 class="mt-5 fs-4">
                            <?php echo $lang['account_review_message'] ?>
                        </h2>
                        <div>
                            <h2 class="mt-3 fs-4">
                                <?php echo $lang['live_accounts1'] ?>
                            </h2>
                            <form>
                                <div class="row mt-3">
                                    <div class="col-4">
                                        <select class="form-select p-2" id="accountTypeSelect" aria-label="Select account">
                                            <?php $acctname = "";
                                            /*foreach($accounts as $account) { 
                                                if($account['account_type'] == 1)
                                                {
                                                    $acctname = "Individual Account";
                                                }
                                                else
                                                {
                                                    $acctname = "IB Account";
                                                } ?>
                                            <option value="<?php echo $account['account_id'] ?>" ><?php echo $acctname ?> </option>
                                            <?php }*/?>
                                            <option value="none"><?php echo $lang["select"] ?></option>
                                            <option value="1">Individual Account</option>
                                            <option value="2">IB Account </option>
                                            <!-- Add more options as needed -->
                                        </select>
                                    </div>
                                    <!-- <div class="input-group col bg">
                                        <input type="text" class="form-control "
                                            placeholder="<?php echo $lang['search1'] ?>" aria-label="Search"
                                            aria-describedby="search-icon">
                                        <button class="btn " type="button" id="search-icon">
                                            <i class="fa fa-search" style="font-size:24px"></i>
                                        </button>
                                    </div> -->

                                    <div class="input-group col bg">
            <input type="text" class="form-control" name="searchInput" id="searchInput" placeholder="<?php echo $lang['search1'] ?>" aria-label="Search" aria-describedby="search-icon">
            <button class="btn" type="button" id="search-icon">
                <i class="fa fa-search" style="font-size:24px"></i>
            </button>
        </div>
                                </div>
                            </form>
                        </div>
                       
                        <div>
                            <br>
                            <div id="loader"></div>
                            <div class="table-container">
                           
                                <table id="accounts-table" class="responsive-table">

                                    <thead class="border">
                                        <tr>
                                            <th>
                                                 <?php echo $lang['S.No'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['account'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['server'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['type'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['currency'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['group'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['passwords'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['investor'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['name'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['leverage'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['balance'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['equity'] ?>
                                            </th>
                                            <th>
                                                <?php echo $lang['action'] ?>
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <!-- Data will be dynamically loaded here via AJAX -->
                                    </tbody>
                                </table>
                               
                                
                            </div>
                            <br>
                            <div id="pagination-container" class="pagination float-end">
                                <!-- page numbers -->
                                </div>
                           
                           


                        </div>
                    </div>
                    <!-- end details -->



                    <!-- start change password -->
                    <div class="change-password" id="change-password" style="display:none">

                        <div id="update"
                            style="max-width: 400px; margin: 20px auto; padding: 20px; border: 1px solid #ccc; border-radius: 5px; background-color: #fff;">
                            <h4 style="text-align: center;">Change Password</h4>
                            <br>
                            <form action="includes/change_fx_account_password.php/" method="POST" id="changepassword"
                                onsubmit="return validatechangePasswordForm()">
                                <input type="hidden" name="account_id" id="account_id" value="">
                                <div style="margin-bottom: 15px;">
                                    <label style="display: block; margin-bottom: 5px;">Old Real Password</label>
                                    <input type="text" class="form-control border" style="width: 100%;"
                                        placeholder="Old Real Password" value="" id="old_password" name="old_password"
                                        minlength="4" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label style="display: block; margin-bottom: 5px;">New Real Password</label>
                                    <input type="text" class="form-control border" style="width: 100%;"
                                        placeholder="New Real Password" value="" id="password" name="password"
                                        minlength="4" required>
                                </div>

                                <div style="margin-bottom: 15px;">
                                    <label style="display: block; margin-bottom: 5px;">New Investor Password</label>
                                    <input type="text" class="form-control border" style="width: 100%;"
                                        placeholder="New Investor Password" value="" id="investor_password"
                                        name="investor_password" minlength="4" required>
                                </div>

                                <button type="submit" class="btn btn-success" style="width: 100%;">Update
                                    Password</button>
                            </form>

                            <button type="button" class="btn btn-default" onclick="closeForm()"
                                style="width: 100%; margin-top: 10px;">Close</button>
                        </div>



                    </div>
                    <!-- end change password -->

                </div>

            </div>
        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php");

    // if (isset($_SESSION['account_deleted_message'])) {
    //     echo '<script>alert("' . $_SESSION['account_deleted_message'] . '");</script>';
    //     unset($_SESSION['account_deleted_message']);
    
    // }
    
    if (isset($_SESSION['live_account_meesage'])) {
        echo '<script>alert("' . $_SESSION['live_account_meesage'] . '");</script>';
        unset($_SESSION['live_account_meesage']);

    }

    ?>
</body>
<script>

    function confirmDelete() {
        var confirmation = confirm("Are you sure you want to delete this account?");
        if (confirmation) {
            document.getElementById("deleteForm").submit();
        }
    }

    function closeForm() {
        $('div#change-password').hide();
        $('div#edit-account').hide();
        $('div#account-details').show();
    }

    function changePassword(id) {

        $('div#change-password').show();
        $('div#edit-account').hide();
        $('div#account-details').hide();
        document.getElementById('account_id').value = id;

    }


    function validatechangePasswordForm() {

        var oldPassword = document.getElementById('old_password').value;
        var newPassword = document.getElementById('password').value;
        var investorPassword = document.getElementById('investor_password').value;

        if (oldPassword === '' || newPassword === '' || investorPassword === '') {
            alert('All fields are required');
            return false;
        }



        return true;
    }

    function editAccount(id) {


        window.location.href = "live-account-edit.php?id=" + id;

    }



    $(document).ready(function () {


        // Load initial data on page load
        loadAccounts(1);
      
        $('#search-icon').on('click', function () {
         
            loadAccounts(1);
        });

        $('#searchInput').on('input', function () {
            var search= $('input[name="searchInput"]').val();
            search=search.trim();
            if(search.length==0)
                loadAccounts(1);
        });

        $('#accountTypeSelect').on('change', function() {
         
            loadAccounts(1);
    });
    });
    function loadAccounts(page) {
        i=1;
        var search= $('input[name="searchInput"]').val();
        var accountType=$('#accountTypeSelect').val();
        search=search.trim();
        if(search=='')
        search=1;
        $('#accounts-table tbody').empty();
        $('#pagination-container').empty();
        showLoader();
        $.ajax({
            url: 'includes/live-accounts.php?page=' + page + '&search=' + search + '&accountType=' +accountType,
            method: 'GET',
            dataType: 'json',
            success: function (data) {
                
                // Update the table with new data
               
                $.each(data.accounts, function (index, account) {
                    //   const serialNumber = (page - 1) * data.accounts.length + index + 1;
                    const serialNumber = (page - 1) * 5 + index + 1;


                      let actionHtml = '';
                            if (account.status === 0) {
                                actionHtml = `
                                    <div class="action-buttons-container">
                                        <div class="action-button w-100 py-1">
                                            <form id="deleteForm" action="includes/delete-fx-accounts.php?id=${account.id}" method="post">
                                                <button class="btn btn-warning btn-block" type="button" onclick="confirmDelete()">Delete Account</button>
                                            </form>
                                        </div>
                                        <div class="action-button w-100 py-1">
                                            <button class="btn btn-warning btn-block" onclick="changePassword(${account.id})">Change Password</button>
                                        </div>
                                        <div class="action-button w-100 py-1">
                                            <button class="btn btn-warning btn-block" onclick="editAccount(${account.id})">Edit Account</button>
                                        </div>
                                    </div>`;
                            } else if (account.status === 5) {
                                actionHtml = `
                                    <div class="action-button w-100 py-1">
                                        <button class="btn btn-success" style="width: 145px;">Delete Pending</button>
                                    </div>`;
                            }


                    $('#accounts-table tbody').append('<tr>' +  '<td>' + serialNumber + '</td>' +
                        '<td class="bold-cell">' + account.account_id + '</td>' +
                        '<td class="bold-cell">JMI-Server</td>' +
                        `<td class="text-success"> ${account.account_type==1?"Individual Account":"IB Account"}</td>` +
                        '<td class="image-cell-container"><img src="../assets/images/image 2.png" alt="404" class="align-middle"> USD</td>' +
                        `<td class="text-primary">${ account.account_group==1?"Fixed Spread Account":account.account_group==3?"Variable Spread Account":
                            account.account_group==4?"Bonus Account":account.account_group==5?"Scalping Account":account.account_group} </td>` +
                        '<td><span class="bgs p-2 rounded"><i class="fa fa-eye" style="font-size:15px"></i>' + account.password + '</span></td>' +
                        '<td><span class="bgs p-2 rounded">' + account.investor_password + '</span></td>' +
                        '<td class="bold-cell">'+account.names+'</td>' +
                        '<td class="bold-cell">' + account.leverage + '</td>' +
                        '<td>'+account.balances+'</td>' +
                        '<td>'+account.equities+'</td>' +
                        `<td>${actionHtml}</td>` +
                        '</tr>');
                });

                
                // Update pagination links
                
                if(data.accounts.length>0){
                    updatePagination(data.totalPages, page,'none','loadAccounts');
                 
                }
                else{
                    $('#pagination-container').empty();
                }
                hideLoader();
            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        });
    }

    

//     function updatePagination(totalPages, currentPage) {
//     $('#pagination-container').empty();

//     if (currentPage > 1) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadAccounts(' + (currentPage - 1) + ')"><<</button>');
//     }

//     $('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

//     for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadAccounts(' + i + ')">' + i + '</button>');
//     }

//     if (currentPage + 2 < totalPages - 1) {
//         // Display ellipsis or any other indicator for more pages
//         $('#pagination-container').append('<button class="opt-num-btn" disabled>&hellip;</button>');
//     }

//     if (totalPages >=i) {
//         $('#pagination-container').append('<button class="opt-num-btn" onclick="loadAccounts(' + (currentPage + 1) + ')">>></button>');
//     }
//     // else{
//     //     $('#pagination-container').append('<button class="opt-num-btn" disabled>>></button>');
//     // }



// }


function performSearch() {
         
         var searchTerm = $('#searchInput').val().toLowerCase();
       
        
         var selectedAccountType = $('#accountTypeSelect').val();
         var accountTypevalue= '';
         if(selectedAccountType)
         {
             accountTypevalue=selectedAccountType==1?"Individual Account":"IB Account";
             
         }
         // Loop through each row in the table and show/hide based on the search term
         $('tbody tr').each(function () {
             var accountType = $(this).find('.text-success').text().toLowerCase();
             var accountName = $(this).find('.bold-cell , .text-success, .image-cell-container').text().toLowerCase();
            
             if (searchTerm) {
                 if(accountName.includes(searchTerm))
                 {
                     if(selectedAccountType){

                         if(accountType.includes(accountTypevalue.toLowerCase())){
                             $(this).show();
                         }
                         else
                         {
                             $(this).hide();
                         }
                     }
                     else
                     {
                         $(this).show();
                     }
                 }
                 else
                 {
                     $(this).hide();
                 }
                
             } 

             
             else if(selectedAccountType){
                 if(accountType.includes(accountTypevalue.toLowerCase()))
                 {
                     $(this).show();
                 }
                 else{
                     $(this).hide();
                 }
                 
             }
             else{
                 $(this).show();
             }

             
         });
     }


</script>

</html>