<?php
if (isset($_SESSION['sessionkey'])) {
    global $currentuserid;
    $currentuserid = $_SESSION['sessionadmin'];
    echo "email", $currentuserid;
    $sessionuser = getuserinfo();
    echo "sessionuser--" . $sessionuser;
    $email = $sessionuser["email"];
}
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

                                <!-- <select class="form-select w-auto" >
                                          <option selected value="option-1">All</option>
                                          <option value="option-2">This week</option>
                                          <option value="option-3">This month</option>
                                          <option value="option-4">Last 3 months</option>

                                    </select> -->
                            </div>
                            <div class="col-auto">

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
                                        <?php $getAllfaqs = getAlldocuments();
                                        if ($getAllfaqs->num_rows > 0) {
                                            foreach ($getAllfaqs as $thisFaq) { ?>
                                                <tr class="text-center">
                                                    <!-- <td class="cell"><input type="checkbox" class="checkbox"
                                                            data-id="<?php echo $thisFaq['id']; ?>"></td> -->

                                                    <td class="cell">
                                                        <?php echo $thisFaq['id']; ?>
                                                    </td>
                                                    <td class="cell"><span class="truncate">
                                                            <?php echo $email; ?>
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
                                                                >Approved</button>
                                                            <button type="button" class="btn  delete-single"
                                                                style="background-color:red"
                                                                data-id="<?php echo $thisFaq['id']; ?>">Delete</button>
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
                        <!-- <ul class="pagination justify-content-center">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul> -->
                    </nav><!--//app-pagination-->

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
            console.log("documentId===========", documentId);
            alert("Are you sure to Approved this document");
            $.ajax({
                url: 'includes/softwareinclude/ajax.php',
                type: 'post',
                data: { type: 'updatedocument', id: documentId },
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
                // Show confirmation alert
                if (confirm('Are you sure you want to delete this record?')) {
                    // Proceed with AJAX call to delete the single record
                    deleteRecords(recordId);
                }
            });

            // function updateDeleteAllButton() {
            //     var anyCheckboxChecked = $('.checkbox:checked').length > 0;
            //     $('.delete-all').toggle(anyCheckboxChecked);
            // }

            function deleteRecords(ids) {
                // Implement the logic to delete records with the specified IDs using AJAX
                $.ajax({
                    url: 'includes/softwareinclude/ajax.php',
                    type: 'post',
                    data: { type: 'deleteupdateRecords', ids: ids },
                    dataType: 'json',
                    success: function (res) {
                        console.log("deleteRecords", res);
                        if (res.error) {
                            console.error('Error from server:', res.error);
                            alert('Error deleting records. Please try again.');
                        } else if (res.success) {
                            console.log('Deletion successful');

                            alert('Records deleted successfully.');

                            window.location.href="documents.php";
                        }
                    }
                });
            }
        });

    </script>

    <!-- ... (remaining HTML code) ... -->




</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>