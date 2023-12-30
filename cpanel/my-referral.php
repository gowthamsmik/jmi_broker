<?php if (!isset($_SESSION['sessionuser']))
    session_start();
include("includes/functions.php");
$userId = $_SESSION["sessionuserid"];
$myReferrals = getMyReferrals($userId);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("../includes/softwareinclude/config.php") ?>
    <?php include("../includes/compatibility.php"); ?>
    <title>JMI | Control Panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/layout.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    <link rel="stylesheet" href="../assets/css/host-style.css">
    <link rel="shortcut icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <link rel="icon" href="../assets/images/favicon.ico" type="image/x-icon">
    <title>Jmi Broker </title>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        .white-box {
            background-color: #FFFFFF;
            padding: 20px;
            /* Adjust padding as needed */
            border-radius: 8px;
            /* Optional: Add border radius for rounded corners */
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            /* Optional: Add box shadow for depth */
            height: 250px;
            /* Adjust the height as needed */
        }

        .account_circle {
            height: 30px;
            width: 30px;
        }

        .custom-button {
            background-color: #0342AB;
        }

        #modal-wrapper {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        #modal-content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            z-index: auto !important;
            margin: auto;
        }

        #open-modal-btn {
            cursor: pointer;
            padding: 10px 20px;
            background: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
        }
        #live-account-table {
    max-height: 180px; /* Set your desired fixed height */
    overflow-y: auto;  /* Add vertical scroll if needed */
    overflow-x: auto;
}

#modal-content .modal-body {
    max-height: 210px; /* Set your desired maximum height */
    overflow-x: auto;  /* Add vertical scroll if needed */
}
    </style>
</head>

<body>
    <?php include("../includes/header.php"); ?>
    <div class='layout'>
        <?php include("sidebar.php"); ?>
        <div class="content">
            <div class="route-content" id="link1">

                <div class="d-flex">
                    <h2 class="fs-4">
                        <?php echo $lang['control_panel_my_referrals'] ?>
                    </h2>
                    <div class="d-flex ms-auto"><img
                            src='<?php echo $siteurl . "assets/images/svg/account_circle.svg" ?>' class="account_circle"
                            alt="">
                        <p class="mt-1 ms-2">
                            <?php echo $lang['welcome'] ?>,
                            <?php echo $_SESSION['sessionusername']; ?>
                        </p>
                    </div>
                </div>

                <?php if (count($myReferrals) <=0): ?>
                    <div class="white-box mt-3">
                        <h3>You Don't Have Any Referalls Yet</h3>

                        <div class="input-group mb-3 mt-4">
                            <input type="text" class="form-control border" id="MyRef" readonly
                                placeholder="<?php echo $siteurl; ?>index.php?myref=<?php echo $_SESSION['sessionuserid'] + 10000; ?>">
                            <button class="btn btn-success custom-button" onclick="CopyText()" type="submit">Copy
                                Link</button>
                        </div>
                    </div>

                <?php endif; ?>

                <?php if (count($myReferrals) > 0): ?>
                    <div class="table-container">
                        <!-- <h4 class="fs-4 mt-3"> <?php echo $lang['linked_copy_trade'] ?></h4> -->
                        <table class="class='gap-3 bg-white table mt-3'" id="referral-account-table">
                            <thead class="border">
                                <tr>
                                    <td>#</td>
                                    <td>Full Name</td>
                                    <td>Email</td>
                                    <td>Country</td>
                                    <td>Mobile</td>
                                    <td>Live Accounts</td>
                                </tr>
                            </thead>
                            <tbody>


                            </tbody>
                        </table>
                        </div>

                        <div id="pagination-container" class="pagination float-end">
                            <!-- page numbers -->
                        </div>
                   
                <?php endif; ?>
                <div id="modal-wrapper" onclick="closeModal()">
                    <div id="modal-content">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>

                                </div>
                                <div class="modal-body">

                                    <table class="table table-bordered" id="live-account-table">
                                        <thead>
                                            <tr>
                                                <td>#</td>

                                                <td>Account</td>
                                                <td>Server</td>
                                                <td>Type</td>
                                                <td>Group</td>
                                                <td>Currency</td>
                                                <td>Leverage</td>
                                                <td>Investor</td>

                                            </tr>
                                        </thead>
                                        <tbody>





                                        </tbody>
                                    </table>


                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" onclick="closeModal()"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>










        </div>
    </div>
    <?php include("../includes/footer.php"); ?>
    <?php include("../includes/scripts.php"); ?>
</body>

<script type="text/javascript">
    loadReferralAccounts(1);
    function CopyText() {
        $('input#MyRef').val('<?php echo $siteurl; ?>index.php?myref=<?php echo $_SESSION['sessionuserid'] + 10000; ?>');
        var copyText = document.getElementById("MyRef");
        copyText.select();
        document.execCommand("Copy");
    }


    function loadReferralAccounts(page) {
        i = 1;
       
        $('#referral-account-table tbody').empty();
        $('#pagination-container').empty();
        $.ajax({
            url: 'includes/my-referral.php?page=' + page,
            method: "GET",
            dataType: 'json',
            success: function (data) {


                $.each(data.referralAccounts, function (index, referralAccounts) {

                  
                    const serialNumber = (page - 1) * 10 + index + 1;
                    var accountsShow = '';
                    if (referralAccounts.totalAccounts > 0) {
                        accountsShow = '<span class="btn btn-success" onclick="openModal(' + referralAccounts.website_accounts_id + ')">' + referralAccounts.totalAccounts + ' Show</span>';

                    }


                    $('#referral-account-table tbody').append('<tr>' + '<td>' + serialNumber + '</td>' +
                        '<td>' + referralAccounts.fullname + '</td>' +
                        '<td>' + referralAccounts.email + '</td>' +
                        '<td>' + referralAccounts.country + '</td>' +
                        '<td>' + referralAccounts.country_code + "" + referralAccounts.mobile + '</td>' +


                        '<td>' + accountsShow + '</td></tr>'



                    )


                });

                if (data.referralAccounts.length > 0)
                    updatePagination(data.totalPages, page,'none','loadReferralAccounts');




            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', error);
            }
        })

    }


    function openModal(id) {
        loadLiveAccounts(id);
        document.getElementById("modal-wrapper").style.display = "flex";
    }
    function closeModal() {
        document.getElementById("modal-wrapper").style.display = "none";
    }


    function loadLiveAccounts(id) {
        i = 1;
        $('#live-account-table tbody').empty();
        $.ajax({
            url: 'includes/my-referral.php?id=' + id,
            method: "GET",
            dataType: 'json',
            success: function (data) {
             
               
                $.each(data.liveAccounts, function (index, liveAccounts) {




                    var accountType = liveAccounts.account_type != 0 ? "Individual Account" : "IB Account";
                    var accountGroup = ''
                    if (liveAccounts.account_group == 3) {accountGroup="Variable Spread Account" }

                    else if (liveAccounts.account_group == 5) {accountGroup= "Scalping Account" }

                    else if (liveAccounts.account_group == 1) {accountGroup="Fixed Spread Account" }
                    else if (liveAccounts.account_group == 4) {accountGroup="Bonus Account" }




                    $('#live-account-table tbody').append('<tr>' + '<td>' + index + '</td>' +
                        '<td>' + liveAccounts.account_id + '</td>' +
                        '<td>JMI-Server </td>' +
                        '<td>' + accountType + '</td>' +
                        '<td>' + accountGroup+ '</td>' +
                        '<td> USD </td>' +
                       
                        '<td>1:' + liveAccounts.leverage +'</td>' +


                        '<td>' + liveAccounts.investor_password + '</td></tr>'



                    )


                });
            


            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        })

    }
</script>

</html>