<?php include('includes/header.php');
global $hostname; ?>
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
    <title>Your Form</title>
    <script src="https://<?php echo $hostname; ?>/cms/assets/js/tinymce/tinymce.min.js"></script>
    <script src="https://<?php echo $hostname; ?>/cms/assets/js/tinymce/themes/modern/theme.min.js"></script>
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

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class="container-xl">

                <div class="row g-3 mb-1 align-items-center justify-content-between card">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Offers Analysis</h1>
                    </div>
                    <h6>All Offers</h6>
                    <div id="success-message" class="border p-3 rounded"
                        style="display: none;background-color:#00A65A;color:white">
                    </div>
                    <hr style="height:2px;border-width:0;color:gray;background-color:blue">

                    <p> New Offers</p>
                    <form class="add-offers">
                        <label for="type">Offers Type</label>
                        <select id="offertype" name="offertype">
                            <option value="1">Offer</option>
                            <option value="2">Events</option>
                        </select>
                        <label for="type">Offers Image</label>
                        <div class=" p-2 my-3" style="border:1px solid gray">
                            <input type="file" name="offerfileToUpload" id="offerfileToUpload">
                        </div>



                        <label for="title">English Title</label>
                        <input type="text" id="offertitle" name="offertitle" placeholder="Enter name">

                        <label for="details">English Details</label>
                        <textarea name="offerdetails" class="tinymce"></textarea><br />

                        <label for="offerstatus">Publish</label>
                        <select id="offerstatus" name="offerstatus">
                            <option value="1">Publish Now</option>
                            <option value="0">Publish Later</option>
                        </select>

                        <label for="arabic_title">Arabic Title</label>
                        <input type="text" id="offerarabic_title" name="offerarabic_title" placeholder="Enter name"
                            dir="rtl">


                        <label for="arabic_details">Arabic Details</label>
                        <textarea name="offerarabic_details" class="tinymce" dir="rtl"></textarea><br />



                        <label for="title">Russian Title</label>
                        <input type="text" id="russiantitle" name="russiantitle" placeholder="Enter name">
                        <label for="details">Russian Details</label>
                        <textarea name="russiandetails" class="tinymce"></textarea><br />

                        <button type="submit" value="Add" class="btn bgcolor my-2">Add</button>
                        <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                    </form>
                    <!-- <div class="d-flex justify-content-between">
                        <button type="button" class="btn btn-success" onclick="getAllTechnicalAnalysis()">Delete Selected</button>
                    </div> -->
                </div>
                <!-- <form class="technical" id="technicalForm">
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
                <div class="row g-3 mb-4 align-items-center justify-content-between">
                    <div class="col-auto">
                        <button type="button" class="btn bgcolor my-3" id="deleteAllButton"
                            onclick="deleteoffersanalysis()" style="display: none;">Delete All</button>
                    </div>
                    <div class="col-auto">


                    </div>
                    <div class="col-auto">
					<div class="row">
						<div class="col-md-8">
							<div class="app-search-form" id="searchForm">
								<form class="app-search-form" method="GET">
									<div class="input-group">
										<input type="text" placeholder="Search ..." name="Search"
											class="form-control search-input" id="searchInput">
										<button type="submit" class="btn search-btn btn-primary" value="Search"><i
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
                                                <th class="cell">Title</th>
                                                <th class="cell">Status</th>
                                                <th class="cell">Type</th>

                                                <th class="cell">createdAt</th>
                                                <th class="cell">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $perPage = isset($_GET['technicalperpage']) ? $_GET['technicalperpage'] : 3;

                                            $index = 0;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            // echo "perpage".$perPage;
                                            // echo "page".$page;
                                            $searchValue = isset($_GET['Search']) ? $_GET['Search'] : '';
                                            $getAllMailListAccount = getAlloffers($page, $perPage, $searchValue);
                                            if ($getAllMailListAccount->num_rows > 0) {
                                                foreach ($getAllMailListAccount as $mailListAccount) {
                                                    $index++;
                                                    ?>
                                                    <tr class="text-center">
                                                        <td class="cell">
                                                            <input type="checkbox" name="selectedRows[]"
                                                                value="<?php echo $mailListAccount['id']; ?>" />
                                                        </td>
                                                        <td class="cell">
                                                            <?php echo $index; ?>
                                                        </td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['title']; ?>
                                                            </span></td>
                                                        <td class="cell status-cell"
                                                            data-status="<?php echo $mailListAccount['offerstatus']; ?>" style="color: #fff; padding: 0px; border-radius: 5px;
                                                                <?php
                                                                $statusValue = $mailListAccount['offerstatus'];
                                                                $statusLabel = '';

                                                                switch ($statusValue) {
                                                                    case '0':
                                                                        $statusLabel = 'UnPublished';
                                                                        break;
                                                                    case '1':
                                                                        $statusLabel = 'Published';
                                                                        break;
                                                                    default:
                                                                        $statusLabel = 'UnknownStatus';
                                                                        break;
                                                                }
                                                                echo "color: " . ($statusValue == '1' ? 'green' : 'red') . ";"; // Set background color based on status
                                                                ?>">
                                                            <?php echo $statusLabel; ?>
                                                        </td>

                                                        <td class="cell status-cell"
                                                            data-status="<?php echo $mailListAccount['offertype']; ?>" style="color: #fff; padding: 0px; border-radius: 5px;
                                                                <?php
                                                                $statusValue = $mailListAccount['offertype'];
                                                                $statusLabel = '';

                                                                switch ($statusValue) {
                                                                    case '1':
                                                                        $statusLabel = 'Offers';
                                                                        break;
                                                                    case '2':
                                                                        $statusLabel = 'Event';
                                                                        break;
                                                                    default:
                                                                        $statusLabel = 'nothing';
                                                                        break;
                                                                }
                                                                echo "color: " . ($statusValue == '8' ? 'red' : 'black') . ";";
                                                                ?>">
                                                            <?php echo $statusLabel; ?>
                                                        </td>

                                                        <!-- <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['technicalstatus']; ?>
                                                            </span></td> -->
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['created_at']; ?>
                                                            </span></td>
                                                        <td class="cell">
                                                            <button type="button" class="btn bgcolor"
                                                                onclick="viewOffersAnalysis(<?php echo $mailListAccount['id']; ?>,'1')">View</button>
                                                            <button type="button" class="btn bgcolor offerStatus"
                                                                data-offerStatus="<?php echo $mailListAccount['offerstatus']; ?>"
                                                                data-id="<?php echo $mailListAccount['id']; ?>">
                                                                <?php $buttonname = ($mailListAccount['offerstatus'] == '0' ? 'published' : 'Unpublished'); ?>
                                                                <?php echo $buttonname; ?>
                                                            </button>


                                                            <button type="button" class="btn bgcolor editoffersButton"
                                                                data-toggle="modal" data-target="#editoffersPopup"
                                                                data-id="<?php echo $mailListAccount['id']; ?>">
                                                                Edit
                                                            </button>

                                                            <button type="button" class="btn bgcolor"
                                                                onclick="deleteoffersanalysis(this);">Delete</button>
                                                    </tr>
                                                <?php }
                                            } ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade " id="editoffersPopup" tabindex="-1" role="dialog"
                            aria-labelledby="editModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="editModalLabel">Edit Offers Analysis</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>

                                    <div class="modal-body">
                                        <form class="update-offers">
                                            <label for="title">ID:</label>
                                            <input type="text" id="offerId" name="id">
                                            <label for="type">Offers Type</label>
                                            <select id="offerType" name="offertype">
                                                <option value="1">Offer</option>
                                                <option value="2">Events</option>
                                            </select>
                                            <label for="title">English Title</label>
                                            <input type="text" id="offerTitle" name="title">

                                            <label for="details">English Details</label>
                                            <textarea name="details" id="offerDetails" class="tinymce"></textarea><br />

                                            <label for="offerstatus">Publish</label>
                                            <select id="offerStatus" name="offerstatus">
                                                <option value="1">Publish Now</option>
                                                <option value="0">Publish Later</option>
                                            </select>

                                            <label for="arabic_title">Arabic Title</label>
                                            <input type="text" id="offerArabic_title" name="arabic_title">


                                            <label for="arabic_details">Arabic Details</label>
                                            <textarea name="arabic_details" id="offerArabic_details"
                                                class="tinymce"></textarea><br />

                                            <label for="title">Russian Title</label>
                                            <input type="text" id="offersrussiantitle" name="russian_title"
                                                placeholder="Enter name">
                                            <label for="details">Russian Details</label>
                                            <textarea name="russian_details" id="offersrussiandetails"
                                                class="tinymce"></textarea><br />


                                            <button type="submit" value="Add" class="btn bgcolor">Update</button>
                                            <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                                        </form>

                                    </div>
                                    <!-- <div class="modal-footer">
                                            <button type="reset" class="btn btn-secondary" >Close</button>
                                            <button type="submit" class="btn btn-primary" id="saveChangesBtn">Save Changes</button>
                                        </div> -->
                                </div>
                            </div>
                        </div>

                        <nav class="app-pagination">
                            <ul class="pagination justify-content-end">
                                <?php
                                $totalRecords = getTotalofferAnalysis($searchValue);
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
            function deleteoffersanalysis() {
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
                        data: { type: 'delete-offers', ids: ids, page: currentPage },
                        success: function (res) {
                            console.log("cddsdddddddddddddddddddd", res);
                            var successMessageDiv = document.getElementById('success-message');
                            successMessageDiv.innerHTML = 'Selected Records Deleted';
                            successMessageDiv.style.display = 'block';

                            alert('Selected Records Deleted');
                            window.location.href = "offers.php";
                            var deleteAllButton = document.getElementById('deleteAllButton');
                            deleteAllButton.disabled = true;
                            deleteAllButton.style.display = 'none';  // Hide the button after deletion
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

    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>