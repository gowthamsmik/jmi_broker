<?php
// if (isset($_SESSION['sessionkeyadmin'])) {
//     global $currentuserid;
//     $currentuserid = $_SESSION['sessionadmin'];
//     echo "email", $currentuserid;
//     $sessionuser = getuserinfo($currentuserid);
//     echo "sessionuser--" .$_SESSION['sessionadmin'];
//     $email = $sessionuser["email"];
// }
include('includes/header.php');
?>

<div class="app-wrapper">

    <div class="app-content pt-3 p-md-3 p-lg-4">
        <div class="container-xl">

            <div class="row g-3 mb-4 align-items-center justify-content-between">
                <div class="col-auto">
                    <h1 class="app-page-title mb-0">Documents</h1>
                </div>
                <div class="col-auto">
                    <!-- <a class="" href="add-faq.php">Add Documents</h1> -->
                </div>
                <div class="col-auto">
                    <div class="page-utilities">
                        <div class="row g-2 justify-content-start justify-content-md-end align-items-center">
                            <div class="col-auto">
                                <!-- <form class="table-search-form row gx-1 align-items-center">
                                        <div class="col-auto">
                                            <input type="text" id="search-orders" name="searchorders" class="form-control search-orders" placeholder="Search">
                                        </div>
                                        <div class="col-auto">
                                            <button type="submit" class="btn app-btn-secondary">Search</button>
                                        </div>
                                    </form> -->

                            </div><!--//col-->
                            <div class="col-auto">



                            </div>
                            <div class="col">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="app-search-form" id="searchForm">
                                            <form class="app-search-form" method="GET">
                                                <div class="input-group">
                                                    <input type="text" placeholder=" search..." name="Search"
                                        class="form-control search-input" id="searchInput">
                                                    <button type="submit" class="btn search-btn btn-primary"
                                                        value="Search"><i
                                                            class="fa-solid fa-magnifying-glass"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <form>
                                            <button type="submit" class="btn btn-secondary"><i
                                                    class="fa-solid fa-times"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>


                        </div><!--//row-->
                    </div><!--//table-utilities-->
                </div><!--//col-auto-->
            </div><!--//row-->


            <!-- <nav id="orders-table-tab" class="orders-table-tab app-nav-tabs nav shadow-sm flex-column flex-sm-row mb-4">
                    <a class="flex-sm-fill text-sm-center nav-link active" id="orders-all-tab" data-bs-toggle="tab" href="#orders-all" role="tab" aria-controls="orders-all" aria-selected="true">All</a>
                    <a class="flex-sm-fill text-sm-center nav-link"  id="orders-paid-tab" data-bs-toggle="tab" href="#orders-paid" role="tab" aria-controls="orders-paid" aria-selected="false">Paid</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-pending-tab" data-bs-toggle="tab" href="#orders-pending" role="tab" aria-controls="orders-pending" aria-selected="false">Pending</a>
                    <a class="flex-sm-fill text-sm-center nav-link" id="orders-cancelled-tab" data-bs-toggle="tab" href="#orders-cancelled" role="tab" aria-controls="orders-cancelled" aria-selected="false">Cancelled</a>
                </nav> -->
            <button type="button" class="btn action delete-all" style="display: none;">Delete All</button>


            <div class="tab-content" id="orders-table-tab-content">
                <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
                    <div class="app-card app-card-orders-table shadow-sm mb-5">
                        <div class="app-card-body">
                            <div class="table-responsive">
                                <table class="table app-table-hover mb-0 text-left">
                                    <thead>
                                        <tr class="text-center">
                                            <!-- <th class="cell"><input type="checkbox" id="select-all-checkbox"></th> -->

                                            <th class="cell">ID</th>
                                            <th class="cell">Email</th>
                                            <th class="cell">File Type</th>
                                            <th class="cell">File</th>
                                            <th class="cell">Description</th>
                                            <th class="cell">Status</th>
                                            <th class="cell">CreatedAt</th>
                                            <th class="cell">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $currentPage = isset($_GET['page']) ? $_GET['page'] : 1;
                                        $limit = 10; // Set the number of records to display per page
                                        $searchValue = isset($_GET['Search']) ? $_GET['Search'] : '';
                                        $getAllfaqs = getAlldocuments($currentPage, $limit, $searchValue);
                                        if ($getAllfaqs->num_rows > 0) {
                                            foreach ($getAllfaqs as $thisFaq) {
                                                ?>
                                                <tr class="text-center">
                                                    <!-- <td class="cell"><input type="checkbox" class="checkbox"
                                                            data-id="<?php echo $thisFaq['id']; ?>"></td> -->

                                                    <td class="cell">
                                                        <?php echo $thisFaq['id']; ?>
                                                    </td>
                                                    <td class="cell"><span class="truncate">
                                                            <?php echo $thisFaq['account_email']; ?>
                                                        </span></td>
                                                    <td class="cell">
                                                        <?php
                                                        $statusValue = $thisFaq['type'];
                                                        $statusLabel = '';

                                                        switch ($statusValue) {
                                                            case '1':
                                                                $statusLabel = 'National Identity Card';
                                                                break;
                                                            case '2':
                                                                $statusLabel = 'Passport';
                                                                break;
                                                            case '3':
                                                                $statusLabel = 'Driver License';
                                                                break;
                                                            case '4':
                                                                $statusLabel = 'Bank account statement';
                                                                break;
                                                            case '5':
                                                                $statusLabel = 'Credit Card Statement';
                                                                break;
                                                            case '6':
                                                                $statusLabel = 'Phone Bill';
                                                                break;
                                                            case '7':
                                                                $statusLabel = 'Electricity bill';
                                                                break;
                                                            case '8':
                                                                $statusLabel = 'Credit Card Scan';
                                                                break;
                                                            case '9':
                                                                $statusLabel = 'Customer Account Agreement';
                                                                break;
                                                        }

                                                        echo $statusLabel;
                                                        ?>
                                                    </td>
                                                    <td class="cell">
                                                        <a href="<?php echo $thisFaq['document']; ?>" target="_blank">view</a>
                                                    </td>
                                                    <td class="cell"><span class="truncate">
                                                            <?php echo $thisFaq['description']; ?>
                                                        </span></td>
                                                    <td class="cell"
                                                        style="background-color: <?php echo ($thisFaq['status'] == '1') ? 'green' : (($thisFaq['status'] == '2') ? 'yellow' : ''); ?>;color:<?php echo ($thisFaq['status'] == '1') ? 'white' : (($thisFaq['status'] == '2') ? '' : ''); ?>">
                                                        <?php
                                                        $statusLabel = '';

                                                        switch ($thisFaq['status']) {
                                                            case '1':
                                                                $statusLabel = 'Approved';
                                                                break;
                                                            case '2':
                                                                $statusLabel = 'Reviewing';
                                                                break;
                                                        }

                                                        echo $statusLabel;
                                                        ?>
                                                    </td>

                                                    <td class="cell"><span class="truncate">
                                                            <?php echo $thisFaq['created_at']; ?>
                                                        </span></td>
                                                    <td class="cell">

                                                        <?php if ($thisFaq['status'] == '2') { ?>
                                                            <button type="button" class="btn action docaction"
                                                                style="background-color: green !important; color: white;"
                                                                data-id="<?php echo $thisFaq['id']; ?>"
                                                                data-webid="<?php echo $thisFaq['website_accounts_id'] ?>">Approved</button>
                                                            <button type="button" class="btn  delete-single"
                                                                style="background-color:red" data-id="<?php echo $thisFaq['id']; ?>"
                                                                data-webid="<?php echo $thisFaq['website_accounts_id'] ?>">Delete</button>
                                                        <?php } ?>

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
                            $totalRecords = getTotalDocumentCount($searchValue);
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



        </div><!--//container-fluid-->
    </div><!--//app-content-->

    <footer class="app-footer">
        <div class="container text-center py-3">
            <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


        </div>
    </footer>

    <script>
        $(document).on('click', '.docaction', function () {

            var documentId = $(this).data('id');
            var webid = $(this).data('webid');
            console.log("documentId===========", documentId);
            alert("Are you sure to Approved this document");
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                type: 'post',
                data: { type: 'updatedocument', id: documentId, webid: webid },
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
                    deleteRecords(recordId, webid);
                }
            });


            // function updateDeleteAllButton() {
            //     var anyCheckboxChecked = $('.checkbox:checked').length > 0;
            //     $('.delete-all').toggle(anyCheckboxChecked);
            // }

            function deleteRecords(ids, webid) {
                // Implement the logic to delete records with the specified IDs using AJAX
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'deleteupdateRecords', ids: ids, webid: webid },
                    dataType: 'json',
                    success: function (res) {
                        console.log("deleteRecords", res);
                        if (res.error) {
                            console.error('Error from server:', res.error);
                            alert('Error deleting records. Please try again.');
                        } else if (res.success) {
                            console.log('Deletion successful');

                            alert('Records deleted successfully.');

                            window.location.href = "documents.php";
                        }
                    }
                });
            }
        });
        document.addEventListener('DOMContentLoaded', function () {
            document.getElementById('searchInput').addEventListener('input', function () {
                if (this.value.length >= 3) {
                    var form = document.getElementById('searchForm');
                    var submitButton = form.querySelector('.search-btn');
                    if (submitButton) {
                        submitButton.click();
                    }
                }
            });
        });


        $(document).ready(function () {
            checkResponseData();
        });

        function checkResponseData() {
            var tableBody = document.querySelector('.table.app-table-hover tbody');

            if (tableBody && tableBody.rows.length === 0) {
                var emptyMessage = '<div class="col-auto p-5 shadow"><h3 class="text-center">Data is empty</h3></div>';
                $('.table.app-table-hover').replaceWith(emptyMessage);
            }
        }
        
    </script>

    <!-- ... (remaining HTML code) ... -->




</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>