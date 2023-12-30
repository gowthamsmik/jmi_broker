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

        .bgcolor {
            background-color: #00A65A;
            color: white;
        }
    </style>
</head>

<body>
    <?php include('includes/header.php');
    ?>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4 align-items-center card">
                    <hr
                        style="height:5px;border-width:0;color:gray;background-color:blue;margin-top:0px;margin-bottom:2px;">
                    <div class="">
                        <h4 class=" mb-0 mt-0">All Copy Trade</h4>
                    </div>
                    <!-- <div class="">
                        <p class=" mb-3 mt-0">Users Copy Trade</p>
                    </div> -->
                    <div id="success-message" class="border p-3 rounded container"
                        style="display: none;background-color:#00A65A;color:white">
                    </div>
                    <div id="error-message" class="border p-3 rounded container"
                        style="display: none;background-color:red;color:white">
                    </div>
                    <!-- <div class="">
                        <button type="button" class="btn btn-success mb-3" id="deleteAllButton" onclick="deleteadmin()"
                            style="display: none;">Delete All</button>
                    </div> -->
                    <div class="tab-content" id="orders-table-tab-content">
                        <div class="tab-pane fade show active" id="orders-all" role="tabpanel"
                            aria-labelledby="orders-all-tab">
                            <div class="app-card app-card-orders-table shadow-sm mb-5">
                                <div class="app-card-body">
                                    <div class="table-responsive">
                                        <table class="table app-table-hover mb-0 text-left">
                                            <thead>
                                                <tr class="text-center">
                                                    <!-- <th class="cell">
                                                        <input type="checkbox" id="selectAllCheckbox"
                                                            onclick="toggleSelectAll()">
                                                    </th> -->

                                                    <th class="cell">ID</th>
                                                    <th class="cell">Email</th>
                                                    <th class="cell">Copy From</th>
                                                    <th class="cell">Copy To</th>
                                                    <th class="cell">Percentage</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Date</th>
                                                    <th class="cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $perPage = 10;
                                                $index = 0;
                                                $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                                $getAllCopyTradeListAccount = getAllcopytrade($page, $perPage);
                                                $getUsersData = getAllUserinfo();
                                                if ($getAllCopyTradeListAccount !== false) {
                                                    //while ($copytradeListAccount = $getAllCopyTradeListAccount->fetch_assoc()) {
                                                    foreach ($getAllCopyTradeListAccount as $copytradeListAccount) {
                                                        $index++;
                                                        $websiteAccountId = $copytradeListAccount['website_accounts_id'];

                                                        $userEmail = '';

                                                        if (isset($getUsersData['email'])) {
                                                            $userEmail = $getUsersData['email'];
                                                        }
                                                        ?>
                                                        <tr class="text-center">
                                                            <!-- <td class="cell">
                                                                <input type="checkbox" name="selectedRows[]"
                                                                    value="?php echo $copytradeListAccount['id']; ?>" />
                                                            </td> -->
                                                            <td class="cell">
                                                                <?php echo $copytradeListAccount['id']; ?>
                                                            </td>
                                                            <td class="cell"><span class="truncate">
                                                                    <?php echo $userEmail; ?>
                                                                </span></td>
                                                            <td class="cell"><span class="truncate">
                                                                    <?php echo $copytradeListAccount['copy_from']; ?>
                                                                </span></td>
                                                            <td class="cell"><span class="truncate">
                                                                    <?php echo $copytradeListAccount['copy_to']; ?>
                                                                </span></td>
                                                            <td class="cell"><span class="truncate">
                                                                    <?php echo $copytradeListAccount['percentage']; ?>
                                                                </span></td>
                                                            <!-- <td class="cell"><span class="truncate">
                                                                    ?php echo $mailListAccount['status']; ?>
                                                                </span></td> -->
                                                                
                                                            <td class="cell">
                                                                <?php
                                                                $statusValue = $copytradeListAccount['status'];
                                                                $statusLabel = '';

                                                                switch ($statusValue) {
                                                                    case '0':
                                                                        $statusLabel = 'pending';
                                                                        break;
                                                                    case '1':
                                                                        $statusLabel = 'Copying';
                                                                        break;
                                                                    case '8':
                                                                        $statusLabel = 'cancelling';
                                                                        break;
                                                                    default:
                                                                        $statusLabel = 'cancelled';
                                                                        break;
                                                                }

                                                                echo $statusLabel;
                                                                ?>
                                                            </td>
                                                            <td class="cell"><span class="truncate">
                                                            <?php echo $copytradeListAccount['created_at']; ?>
                                                                </span></td>
                                                            <td class="cell">
                                                                <?php if ($copytradeListAccount['status'] == '0') { ?>
                                                                    <button type="button" class="btn action cpyaction"
                                                                        style="background-color: green !important; color: white;"
                                                                        data-id="<?php echo $copytradeListAccount['id']; ?>">Approved</button>
                                                                <?php }  if($copytradeListAccount['status'] != '9'){

                                                                ?>
                                                                <button type="button" class="btn deletesinglecopytrade"
                                                                    style="background-color:red"
                                                                    data-id="<?php echo $copytradeListAccount['id']; ?>">Delete</button>
                                                                    <?php }?>
                                                            </td>

                                                        </tr>
                                                        <?php
                                                    }
                                                }
                                                ?>
                                            </tbody>

                                        </table>
                                    </div><!--//table-responsive-->

                                </div><!--//app-card-body-->
                            </div>
                            <div class="modal fade " id="editadminPopup" tabindex="-1" role="dialog"
                                aria-labelledby="editModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="editModalLabel">Edit Fundamental Analysis</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>

                                        <div class="modal-body">
                                            <form class="update-admins">
                                                <label for="type">ID</label>
                                                <input type="text" id="adminid" name="id" placeholder="Enter Name">

                                                <label for="type">Name</label>
                                                <input type="text" id="adminname" name="name" placeholder="Enter Name">

                                                <label for="type">Email</label>
                                                <input type="text" id="adminemail" name="email"
                                                    placeholder="Enter Email">
                                                <label for="type">Password</label>
                                                <input type="text" id="adminpassword" name="password"
                                                    placeholder="Enter Password">
                                                <label for="type">Admin roll</label>
                                                <select id="adminroll" name="roll">
                                                    <option value="1">Super Admin</option>
                                                    <option value="2">Edit</option>
                                                </select>
                                                <div class="my-3">
                                                    <button type="submit" value="Add"
                                                        class="btn bgcolor">Update</button>
                                                    <button type="reset" value="Clear"
                                                        class="btn btn-secondary">Clear</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <nav class="app-pagination">
                            <ul class="pagination justify-content-end">
                                <?php
                                $totalRecords = getTotalcopytrade();
                                $limit = 10; // Set the number of records to display per page
                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;

                                // Calculate the total number of pages
                                $totalPages = ceil($totalRecords / $limit);

                                // Determine the starting and ending page numbers to display
                                $startPage = max($currentPage - 3, 1);
                                $endPage = min($startPage + 5, $totalPages);

                                // Display pagination links
                                echo '<ul class="pagination justify-content-end">';

                                // First button
                                echo '<li class="page-item ' . ($currentPage == 1 ? 'disabled' : '') . '"><a class="page-link" href="?page=1" aria-label="First"><span aria-hidden="true">&laquo;&laquo;</span></a></li>';

                                // Previous button
                                $prevPage = ($currentPage > 1) ? $currentPage - 1 : 1;
                                echo '<li class="page-item ' . ($currentPage == 1 ? 'disabled' : '') . '"><a class="page-link" href="?page=' . $prevPage . '" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';

                                // Page numbers
                                for ($i = $startPage; $i <= $endPage; $i++) {
                                    echo '<li class="page-item ' . ($currentPage == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
                                }

                                // Next button
                                $nextPage = ($currentPage < $totalPages) ? $currentPage + 1 : $totalPages;
                                echo '<li class="page-item ' . ($currentPage == $totalPages ? 'disabled' : '') . '"><a class="page-link" href="?page=' . $nextPage . '" aria-label="Next"><span aria-hidden="true">&raquo;</span></a></li>';

                                // Last button
                                echo '<li class="page-item ' . ($currentPage == $totalPages ? 'disabled' : '') . '"><a class="page-link" href="?page=' . $totalPages . '" aria-label="Last"><span aria-hidden="true">&raquo;&raquo;</span></a></li>';

                                echo '</ul>';
                                ?>
                            </ul>
                        </nav>

                        </div><!--//tab-pane-->

                    </div>
                    <!-- <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" onclick="getAllTechnicalAnalysis()">Delete Selected</button>
                    </div> -->
                </div>
                <!-- <form class="technical" id="fundamentalForm">
                    <div class="row">
                        <div class="col">
                            <select id="technicalperpage" name="technicalperpage" onchange="submitForm()">
                                <option value="3">show 3 per page</option>
                                <option value="2">show 2 per page</option>
                                <option value="1">show 1 per page</option>
                            </select>
                        </div>
                    </div>
                </form> -->

            </div>
        </div>

        <footer class="app-footer">
            <div class="container text-center py-3">


            </div>
        </footer>
        <script>
            function deleteadmin() {
                var selectedRows = document.querySelectorAll('input[name="selectedRows[]"]:checked');
                var currentPage = <?php echo $page; ?>;
                var perPage = <?php echo $perPage; ?>;

                if (selectedRows.length === 0) {
                    alert('Please select at least one row to delete.');
                    return;
                }

                if (confirm('Are you sure you want to delete the selected records?')) {
                    var ids = Array.from(selectedRows).map(function (row) {
                        return row.value;
                    });

                    // Send an AJAX request to delete the selected records on the current page
                    $.ajax({
                        url: 'includes/softwareinclude/ajax.php',
                        type: 'post',
                        data: { type: 'delete-admin', ids: ids, page: currentPage },
                        success: function (res) {
                            console.log("cddsdddddddddddddddddddd", res);
                            
                        },
                        error: function (err) {
                            console.error(err);
                            alert('Error deleting Website Accounts');
                        }
                    });
                }
            }

            function toggleSelectAll() {
                var checkboxes = document.querySelectorAll('input[name="selectedRows[]"]');
                var selectAllCheckbox = document.getElementById('selectAllCheckbox');
                var deleteAllButton = document.getElementById('deleteAllButton');

                checkboxes.forEach(function (checkbox) {
                    checkbox.checked = selectAllCheckbox.checked;
                });

                // Enable or disable the "Delete All" button based on the number of selected checkboxes
                deleteAllButton.disabled = !checkboxesChecked();
                deleteAllButton.style = checkboxesChecked() ? 'active' : 'disabled';
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
            function submitForm() {
                var form = document.getElementById('technicalForm');
                form.submit();
            }
            function viewOffersAnalysis(id, view) {
                $.ajax({
                    type: 'POST',
                    url: 'includes/softwareinclude/ajax.php',
                    data: { offerType: view, type: 'session-store-offers' },
                    success: function (response) {
                        window.location.href = 'view-offers-analysis.php?id=' + id;
                    },
                    error: function (error) {
                        console.error('Error setting session variable:', error);
                    }
                });
            }


        </script>
        <script>
            $(document).on('click', '.cpyaction', function () {

                var cpytradeId = $(this).data('id');
                console.log("documentId===========", cpytradeId);
                alert("Did you reviewed this copy trade and want to approve it");
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'approvetrade', id: cpytradeId },
                    dataType: 'json',
                    success: function (res) {
                        console.log("approvetrade", res);
                        if (res.error) {
                            alert("Failed to approve copy-trade:",res.error)
                            console.error('Error from server:', res.error);
                            window.location.href="copy-trade.php";
                        } else if (res.success) {
                            alert("Approved Copy Trade Successfully.")
                            console.log('Update successful');
                            window.location.href="copy-trade.php";
                        }
                    }


                });
            });
        </script>
       <script>
            $(document).on('click', '.deletesinglecopytrade', function () {

                var deletecpytradeId = $(this).data('id');
                console.log("documentId===========", deletecpytradeId);
                alert("Are you sure you want to delete this copy trade, You can't undo this?");
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'deletetrade', id: deletecpytradeId },
                    dataType: 'json',
                    success: function (res) {
                        console.log("deletetrade", res);
                        if (res.error) {
                            console.error('Error from server:', res.error);
                        } else if (res.success) {
                            console.log('Update successful');

                            location.reload();
                        }
                    }


                });
            });
        </script>
    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>