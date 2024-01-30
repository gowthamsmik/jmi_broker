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
    </style>
    <title>Your Form</title>
</head>

<body>
    <div class="app-wrapper">

        <div class="app-content pt-3 p-md-3 p-lg-4">
            <div class=" card">
            <hr style="height:3px;border-width:0;color:gray;background-color:#0ffcf8;margin-top:0px">
                <div class=" container-xl row g-3 mb-4 align-items-center justify-content-between ">
                    <div class="col-auto">
                        <h1 class="app-page-title mb-0">Mailer Center</h1>
                    </div>
                    <h6>Mail List</h6>
                    <hr style="height:2px;border-width:0;color:gray;background-color:#0ffcf8">
                    <p> New Mail</p>
                    <form class="add-mailer">
                        <label for="name">Name:</label>
                        <input type="text" id="name" name="name">

                        <label for="title">Title:</label>
                        <select id="title" name="title">
                            <option value="0">Mr</option>
                            <option value="1">Mrs</option>
                            <option value="2">Miss</option>
                        </select>

                        <label for="email">Email:</label>
                        <input type="text" id="email" name="email">

                        <button type="submit" value="Add" class="btn bgcolor">Add</button>
                        <button type="reset" value="Clear" class="btn btn-secondary">Clear</button>
                    </form>
                    <!-- <div class="d-flex justify-content-between my-3">
                        
                        
                    </div> -->
                </div>
                <div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
                <button type="button" class="btn btn-success" id="extractAllmailer">Export CSV</button>
				</div>
				<div class="col-auto">

                <button type="button" class="btn btn-success" onclick="deletemailer()">Delete Selected</button>
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
                <div class="container tab-content" id="orders-table-tab-content">
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
                                                <th class="cell">Name</th>
                                                <th class="cell">Manage</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $perPage = 10;
                                            $index = 0;
                                            $page = isset($_GET['page']) ? $_GET['page'] : 1;
                                            $searchValue = isset($_GET['Search']) ? $_GET['Search'] : '';
                                            $getAllMailListAccount = getAllMailListAccounts($page, $perPage,$searchValue);
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
                                                            <?php echo $mailListAccount['id']; ?>
                                                        </td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['mail']; ?>
                                                            </span></td>
                                                        <td class="cell"><span class="truncate">
                                                                <?php echo $mailListAccount['name']; ?>
                                                            </span></td>
                                                        <td class="cell">
                                                            <button type="button" class="btn btn-success"
                                                                onclick="deletemailer(this);">Delete</button>
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
                                $totalRecords = getTotalMailListAccounts($searchValue);
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
            function deletemailer() {
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
                        data: { type: 'delete-mailer', ids: ids, page: currentPage },
                        success: function (res) {
                            console.log(res);
                            alert('Selected Website Accounts Deleted');

                            // Optionally, you can reload the page or update the table without a page reload
                            window.location.href = "mailer.php";

                            // Update the "Delete All" button status after deletion
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
                deleteAllButton.style.display = checkboxesChecked() ? 'inline-block' : 'none';
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
            $(document).on('click', '#extractAllmailer', function () {
				// Make an AJAX request to a PHP script that extracts and downloads the CSV
				$.ajax({
					url: 'includes/softwareinclude/ajax.php',
					type: 'post',
					data: { type: 'extract-all-mailer' },
					success: function (res) {
						alert('CSV extraction successful. Download will begin shortly.');
						var csvData = res;
						console.log(csvData)
						var blob = new Blob([csvData], { type: 'text/csv' });
						var link = document.createElement('a');
						link.href = window.URL.createObjectURL(blob);
						link.download = 'all_mailer_data.csv';
						document.body.appendChild(link);
						link.click();
						document.body.removeChild(link);
					},
					error: function (err) {
						console.error(err);
						alert('Error extracting data.');
					}
				});
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
    </div>
</body>


</html>
<?php include('includes/footer.php'); ?>