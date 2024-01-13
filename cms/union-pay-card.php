<?php include('includes/header.php'); ?>
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
    <div class="app-wrapper">

        <div class="app-content p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-4  justify-content-between card">
                    <hr style="height:5px;border-width:0;color:gray;background-color:blue;margin-top:0px;">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">All UnionPay Cards</h1>
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
                                                    <!-- <th class="cell"><input type="checkbox" id="select-all-checkbox"></th> -->

                                                    <th class="cell">#</th>
                                                    <th class="cell">Email</th>
                                                    <th class="cell">Status</th>
                                                    <th class="cell">Created AT</th>
                                                    <th class="cell">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                                $limit = 10; // Set the number of records to display per page
                                                
                                                $getAllfaqs = getAllunion($currentPage, $limit);
                                                if ($getAllfaqs->num_rows > 0) {
                                                    foreach ($getAllfaqs as $thisFaq) { ?>
                                                        <tr class="text-center">
                                                            <!-- <td class="cell"><input type="checkbox" class="checkbox"
                                                            data-id="<?php echo $thisFaq['id']; ?>"></td> -->

                                                            <td class="cell">
                                                                <?php echo $thisFaq['id']; ?>
                                                            </td>
                                                            <td class="cell"><span class="truncate">
                                                                    <?php
                                                                    $user_id = $thisFaq['user_id'];
                                                                    $getwebemail = getaccountwebid($user_id);
                                                                    $webid;
                                                                    if ($getwebemail->num_rows > 0) {
                                                                        $row = $getwebemail->fetch_assoc();
                                                                        echo "dh".$webid;
                                                                        echo $row['email'];
                                                                        $webid=$row['$website_accounts_id'];
                                                                       
                                                                    } else {
                                                                        // Handle the case where no rows are returned
                                                                        echo "No email found for user ID: $user_id";
                                                                    }
                                                                    
                                                                     ?>

                                                                </span></td>
                                                            <td class="cell">
                                                                <?php
                                                                $statusValue = $thisFaq['status'];
                                                                $statusLabel = '';
                                                                $statusColor = ''; // Initialize a variable for text color
                                                        
                                                                switch ($statusValue) {
                                                                    case '0':
                                                                        $statusLabel = 'Pending';
                                                                        $statusColor = 'red';
                                                                        break;
                                                                    case '1':
                                                                        $statusLabel = 'Produced';
                                                                        $statusColor = 'green';
                                                                        break;
                                                                }

                                                                echo '<span style="color: ' . $statusColor . ';">' . $statusLabel . '</span>';
                                                                ?>
                                                            </td>

                                                            
                                                            <td class="cell"><span class="truncate">
                                                                    <?php echo $thisFaq['created_at']; ?>
                                                                </span></td>
                                                            

                                                            
                                                            <td class="cell">

                                                                <?php if ($thisFaq['status'] == '0') { ?>
                                                                    <button type="button" class="btn action docaction"
                                                                        style="background-color: green !important; color: white;"
                                                                        data-id="<?php echo $thisFaq['id']; ?>"
                                                                        data-webid="<?php echo $thisFaq['website_accounts_id'] ?>">Approve</button>
                                                                        <?php } ?>
                                                                    <button type="button" class="btn  delete-single"
                                                                        style="background-color:red"
                                                                        data-id="<?php echo $thisFaq['id']; ?>"
                                                                        data-webid="<?php echo $webid ?>">Delete</button>
                                                               

                                                            </td>
                                                        </tr>
                                                    <?php }
                                                } ?>



                                            </tbody>
                                        </table>
                                    </div><!--//table-responsive-->

                                </div><!--//app-card-body-->
                            </div><!--//app-card-->
                            <nav class="app-pagination">
                                <ul class="pagination justify-content-end">
                                    <?php
                                    $totalRecords = getTotalDocumentCount();
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

                    </div><!--//tab-content-->
                </div>
            </div>

            <footer class="app-footer">
                <div class="container text-center py-3">


                </div>
            </footer>
            <script>
        $(document).on('click', '.docaction', function () {

            var documentId = $(this).data('id');
            var webid=$(this).data('webid');
            console.log("documentId===========", documentId);
            alert("Are you sure to Approved this document");
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                type: 'post',
                data: { type: 'updateunionpay', id: documentId,webid: webid },
                dataType: 'json',
                success: function (res) {
                    console.log("updatedocument", res);
                    if (res.error) {
                        console.error('Error from server:', res.error);
                    } else if (res.success) {
                        console.log('Update successful');

                        window.location.reload();
                    }
                }


            });
        });


    </script>

    <script>
        $(document).ready(function () {
            //     // When any checkbox is clicked
            //     $('.checkbox').on('change', function () {
            //         updateDeleteAllButton();
            //     });

            //     // When the header checkbox is clicked
            //     $('#select-all-checkbox').on('change', function () {
            //         var isChecked = $(this).prop('checked');
            //         $('.checkbox').prop('checked', isChecked);
            //         updateDeleteAllButton();
            //     });

            // When the "Delete All" button is clicked
            // $('.delete-all').on('click', function () {
            //     // Check if any checkboxes are selected
            //     var anyCheckboxChecked = $('.checkbox:checked').length > 0;

            //     if (anyCheckboxChecked) {
            //         // Show confirmation alert
            //         if (confirm('Are you sure you want to delete all selected records?')) {
            //             // Proceed with AJAX call to delete records
            //             var selectedIds = $('.checkbox:checked').map(function () {
            //                 return $(this).data('id');
            //             }).get();
            //             deleteRecords(selectedIds);
            //         }
            //     } else {
            //         // Show alert that no records are selected
            //         alert('Please select records to delete.');
            //     }
            // });

            // When a single delete button is clicked
            $('.delete-single').on('click', function () {
                var recordId = $(this).data('id');
                var webid = $(this).data('webid');
                console.log("Record ID:", recordId);
                console.log("Web ID:", webid);

                if (confirm('Are you sure you want to delete this record?')) {
                    // Proceed with AJAX call to delete the single record
                    deleteRecords(recordId,webid);
                }
            });


            // function updateDeleteAllButton() {
            //     var anyCheckboxChecked = $('.checkbox:checked').length > 0;
            //     $('.delete-all').toggle(anyCheckboxChecked);
            // }

            function deleteRecords(ids,webid) {
                // Implement the logic to delete records with the specified IDs using AJAX
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'deleteunionpay', ids: ids, webid: webid },
                    dataType: 'json',
                    success: function (res) {
                        console.log("deleteRecords", res);
                        if (res.error) {
                            console.error('Error from server:', res.error);
                            alert('Error deleting records. Please try again.');
                        } else if (res.success) {
                            console.log('Deletion successful');

                            alert('Records deleted successfully.');

                            window.location.href = "union-pay-card.php";
                        }
                    }
                });
            }
        });

    </script>
        </div>

</body>


</html>
<?php include('includes/footer.php'); ?>