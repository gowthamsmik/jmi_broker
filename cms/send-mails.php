<div>

</div>
<?php include('includes/header.php');
error_reporting(3);
session_start();
$mailmsg = "";
if (isset($_SESSION['mailmsg'])) {
    $mailmsg = $_SESSION['mailmsg'];
    unset($_SESSION['mailmsg']);

}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        form {
            max-width: 400px;
            /* Set the maximum width of the form */
            margin: auto;
            /* Center the form horizontally */
        }

        label {
            display: block;
            /* Display labels as block elements */
            margin-bottom: 5px;
            /* Add some space below labels */
        }

        input[type="text"] {
            width: 100%;
            height: 40px;
            /* Make text input boxes 100% width */
            padding: 8px;
            /* Add padding to the text input boxes */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            margin-bottom: 10px;
            /* Add some space below input boxes */
        }

        select {
            width: 100%;
            /* Make select boxes 100% width */
            padding: 8px;
            /* Add padding to the select boxes */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            margin-bottom: 10px;
            /* Add some space below select boxes */
        }

        h6 {
            margin-bottom: 3px;
        }

        p {
            margin-bottom: 0;
            margin-top: 0;
        }

        label {
            color: #000000;
            /* Set the color to a darker shade, e.g., #333 (dark gray) */
            display: block;
            margin-bottom: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            /* Add padding to the buttons */
            box-sizing: border-box;
            /* Include padding and border in the total width */
            cursor: pointer;
            /* Change cursor to pointer on hover */
        }

        input[type="submit"] {
            background-color: blue;
            /* Set background color for the "Add" button */
            color: white;
            /* Set text color for the "Add" button */
        }

        input[type="reset"] {
            background-color: grey;
            /* Set background color for the "Clear" button */
            color: white;
            /* Set text color for the "Clear" button */
        }
    </style>
    <title>Your Form</title>
    <script src="https://jmibroker.net/cms/assets/js/tinymce/tinymce.min.js"></script>
    <script src="https://jmibroker.net/cms/assets/js/tinymce/themes/modern/theme.min.js"></script>

    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: 'preview textcolor image link media code wordcount emoticons', // Add any additional plugins you need
            toolbar: 'undo redo | formatselect | bold italic underline strikethrough | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media | code',
            menubar: 'file edit view insert format tools table help',
        });
    </script>
</head>

<body>

    <div class="app-wrapper">

        <div>
            <?php echo $mailmsg != "" ? '<script type="text/javascript">toastr.success("mail sent successfully")</script>' : "" ?>
        </div>

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Mailer Center</h1>
                    </div>
                    <h6>Mail List</h6>
                    <hr style="height:2px;border-width:0;color:gray;background-color:#0ffcf8">
                    <p> New Mail</p>
                    <form class="send-mails" action="sendMail.php" method="post">
                        <!-- Add this inside your form tag -->
                        <input type="hidden" id="selectedMailsInput" name="selectedMails" value="">

                        <div class="col-sm-3">
                            <label>Select Mails</label>
                            <select class="form-control" name="sendto">
                                <option value="1">All Mails(
                                    <?php $vatrs = getAllMailListCount();
                                    echo $vatrs;
                                    ?>)
                                </option>
                                <option value="2">Select Mail</option>
                            </select>
                        </div>
                        <div class="col-sm-3">
                            <label>Every(Seconds)</label>
                            <input type="number" class="form-control" name="sendevery" value="3"
                                placeholder="Send Every (seconds)" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Send To</label>
                            <input type="number" class="form-control" name="sendtoevery" value="10"
                                placeholder="Send To xx Every" required />
                        </div>
                        <div class="col-sm-3">
                            <label>Mail Type</label>
                            <select class="form-control" name="mailsubject">
                                <option value="JMI Brokers Offers">Offer</option>
                                <option value="JMI Brokers Daily Technical Analysis">Technical Analysis</option>
                                <option value="JMI Brokers Daily Fundamental Analysis">Fundamental Analysis</option>
                                <option value="JMI Brokers Events">event</option>
                                <option value="JMI Brokers News">news</option>
                            </select>
                        </div>
                        <br />
                        <label>Mail Details</label>
                        <textarea name="maildetails" class="tinymce"></textarea><br />

                        <!-- Add this inside your submit button -->
                        <input type="submit" style="max-width:250px;margin:0 auto;" class="form-control btn-success"
                            name="send" value="Send" onclick="sendSelectedMails()">


                    </form>

                    <hr style="height:2px;border-width:0;color:gray;background-color:#0ffcf8">

                </div>
                <div class="tab-content" id="orders-table-tab-content">
                    <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                        aria-labelledby="orders-all-tab">
                        <div class="app-card app-card-orders-table shadow-sm mb-5">
                            <div class="app-card-body">
                                <div class="table-responsive">
                                    <table class="table app-table-hover mb-0 text-left">
                                        <thead>
                                            <tr class="text-center">
                                                <th class="cell">
                                                    <input type="checkbox" id="selectAllCheckbox"
                                                        onclick="toggleSelectAll()">
                                                </th>

                                                <th class="cell">#</th>
                                                <th class="cell">Mail</th>
                                                <th class="cell">Title</th>
                                                <th class="cell">Name</th>
                                                <th class="cell">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $perPage = 5;
                                            $index = 0;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $getAllMailListAccount = getAllMailListAccounts($page, $perPage);
                                            if ($getAllMailListAccount->num_rows > 0) {
                                                foreach ($getAllMailListAccount as $mailListAccount) {
                                                    $index++;
                                                    ?>
                                                    <tr class="text-center">
                                                        <td class="cell">
                                                            <input type="checkbox" name="selectedRows[]"
                                                                value="<?php echo $mailListAccount['mail']; ?>" />
                                                        </td>
                                                        <td class="cell">
                                                            <?php echo $index; ?>
                                                        </td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['mail']; ?>
                                                            </span></td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['title']; ?>
                                                            </span></td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['name']; ?>
                                                            </span></td>
                                                        <td class="cell">
                                                            <button type="button" class="btn btn-success"
                                                                onclick="sendmail(this);">Send Mail</button>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-end">
                                <?php
                                $totalRecords = getTotalMailListAccounts();
                                $totalPages = ceil($totalRecords / $perPage);

                                for ($i = 1; $i <= $totalPages; $i++) {
                                    echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                }
                                ?>
                            </ul>
                        </nav>

                    </div><!--//tab-pane-->

                </div><!--//tab-content-->
            </div>
        </div>
        <footer class="app-footer">
            <div class="container text-center py-3">
            </div>
        </footer>
    </div>
    <script>

    </script>
    <script>
        function toggleSelectAll() {
            var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
            var selectAllCheckbox = document.getElementById('selectAllCheckbox');

            checkboxes.forEach(function (checkbox) {
                checkbox.checked = selectAllCheckbox.checked;
            });

            // Enable or disable the "Delete All" button based on the number of selected checkboxes
            deleteAllButton.disabled = !checkboxesChecked();
        }

        function checkboxesChecked() {
            var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
            var checkedCount = 0;

            checkboxes.forEach(function (checkbox) {
                if (checkbox.checked) {
                    checkedCount++;
                }
            });

            return checkedCount > 1;
        }

        // Call toggleSelectAll on page load to set the initial state of the button
        window.onload = function () {
            toggleSelectAll();
        };

        function sendSelectedMails() {
            var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]:checked');
            var selectedMails = [];

            checkboxes.forEach(function (checkbox) {
                selectedMails.push(checkbox.value);
            });

            // Add the selectedMails array to a hidden input field before submitting the form
            document.getElementById('selectedMailsInput').value = JSON.stringify(selectedMails);
        }
    </script>
</body>


</html>
<?php include('includes/footer.php'); ?>