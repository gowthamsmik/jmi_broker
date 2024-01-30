<?php include('includes/header.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<style>
		.but1 {
			background-color: lightgray !important;
		}

		.status-buttons .but1.active {
			background-color: green !important;
			color: white;
		}

		.but2 {
			background-color: lightgray !important;
		}

		.status-buttons .but2.active {
			background-color: green !important;
			color: white;
		}

		.but3 {
			background-color: lightgray !important;
		}

		.status-buttons .but3.active {
			background-color: yellow !important;
			/* color:white; */
		}

		.but4 {
			background-color: lightgray !important;
		}

		.status-buttons .but4.active {
			background-color: red !important;
			color: white;
		}

		.action {
			background-color: green !important;
			color: white;
		}
		.danger{
			background-color: red !important;
			color: white;
		}
	</style>
</head>

<body>


	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl">

				<div class="row g-3 mb-4 align-items-center justify-content-between">
					<div class="col-auto">
						<h1 class="app-page-title mb-0">Withdraw Fund Request</h1>
					</div>
					<div class="col-auto">


					</div>
					<div class="col-auto">
						<!-- <button class="btn app-btn-secondary">
							<a class="" href="add-fund-requests.php?id=<?php echo urlencode(1); ?>">Add Account</a>
						</button> -->

						<!-- <button type="button" class="btn app-btn-secondary" id="deleteAllButton"
							onclick="deletefundrequests()" style="display: none;">Delete All</button> -->

					</div>
				</div><!--//row-->
				<div class="mb-5 row">
					<div class="status-buttons col-4">
						<button type="button" class="btn but1 active" onclick="filterTable('all')">All</button>
						<button type="button" class="btn but2" onclick="filterTable('1')">Done</button>
						<button type="button" class="btn but3" onclick="filterTable('0')">Pending</button>
						<button type="button" class="btn but4" onclick="filterTable('9')">Rejected</button>
					</div>
					<div class="col-2 ">
						<button type="button" class="btn btn-primary float-end" id="extractAllwithdrawButton">Export CSV</button>
					</div>
					<div class="col-2">
                        <?php $sort = isset($_GET['sort']) && $_GET['sort'] == "asc" ? "asc" : "desc";?>
                        <select name="" id="withdraw-fund-req" class="ms-auto me-3 px-3 py-1" onchange="updateSort()">
                            <option value="asc" <?php echo ($sort == "asc") ? "selected" : ''; ?>>Asc</option>
                            <option value="desc" <?php echo ($sort == "desc") ? "selected" : ''; ?>>Desc</option>
                        </select>
                    </div>
					<div class="col-auto">
					<div class="row">
						<div class="col-md-8">
							<div class="app-search-form" id="searchForm">
								<form class="app-search-form" method="GET">
									<div class="input-group">
										<input type="text" placeholder="Account Id ..." name="Search"
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
				</div>

				<div class="tab-content mt-5" id="orders-table-tab-content">
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

												<th class="cell">#</th>
												<th class="cell">Type</th>
												<th class="cell">Via</th>
												<th class="cell">Account</th>
												<th class="cell">Amount</th>
												<th class="cell">Status</th>
												<th class="cell">Details</th>
												<th class="cell">Date</th>
												<th class="cell">Action</th>
											</tr>
										</thead>
										<tbody>
											<?php
											$perPage = 10;
											$index = 0;
											$page = isset($_GET['page']) ? $_GET['page'] : 1;
											$searchValue = isset($_GET['Search']) ? $_GET['Search'] : '';
											$getAllfundrequests = getAllwithdrawrequest($page, $perPage,$sort,$searchValue);
											if ($getAllfundrequests->num_rows > 0) {
												foreach ($getAllfundrequests as $getAllfundrequests) {
													$index++;
													?>
													<tr class="text-center m-3">
														<!-- <td class="cell">
															<input type="checkbox" name="selectedRows[]"
																value="<?php echo $getAllfundrequests['id']; ?>" />
														</td> -->
														<td class="cell">
															<?php echo $getAllfundrequests['id']; ?>
														</td>
														<td class="cell">
															<?php
															$statusValue = $getAllfundrequests['type'];
															$statusLabel = '';

															switch ($statusValue) {
																case '0':
																	$statusLabel = 'Deposit';
																	break;
																case '1':
																	$statusLabel = 'Withdraw';
																	break;
																case '3':
																	$statusLabel = 'Internal Transfer';
																	break;
																default:
																	$statusLabel = 'Internal Transfer';
																	break;
															}

															echo $statusLabel;
															?>
														</td>
														<td class="cell"><span class="truncate">
																<?php echo $getAllfundrequests['via']; ?>
															</span></td>
														<td class="cell"><span class="truncate">
																<?php echo $getAllfundrequests['account']; ?>
															</span></td>

														<td class="cell"><span class="truncate">
																<?php echo $getAllfundrequests['amount']; ?> USD
															</span></td>
														<td class="cell status-cell"
															data-status="<?php echo $getAllfundrequests['status']; ?>" style="color: #fff; padding: 5px; border-radius: 5px;
															<?php
															$statusValue = $getAllfundrequests['status'];
															$statusLabel = '';

															switch ($statusValue) {
																case '1':
																	$statusLabel = 'Done';
																	echo 'color: #28a745;'; // Green color for 'Done'
																	break;
																case '0':
																	$statusLabel = 'Pending';
																	echo 'color: #ffc107;'; // Yellow color for 'Pending'
																	break;
																case '9':
																	$statusLabel = 'Rejected';
																	echo 'color: #dc3545;'; // Red color for 'Rejected'
																	break;
																default:
																	$statusLabel = 'Unknown';
																	echo 'color: #6c757d;'; // Default gray color for 'Unknown'
																	break;
															}
															?>">
															<?php echo $statusLabel; ?>
														</td>


														<td class="cell"><span class="truncate">
																<?php if( $getAllfundrequests['via']=='Bank Wire')
																{?>
																	<a class="btn btn-primary" href="<?php echo $getAllfundrequests['details_admin'] ?>" target="__blank">Show TT Copy</a>
																<?php }
																else{
																	echo $getAllfundrequests['details_admin'];
																}
																 ?>
																
															</span></td>
														<td class="cell"><span class="truncate">
																<?php echo $getAllfundrequests['created_at']; ?>
															</span></td>
														<td class="cell">
															<?php
															if ($getAllfundrequests['status'] == '0') {
																?>
																<button type="button" class="btn action" data-toggle="modal"
																	data-target="#donestatus"
																	data-id="<?php echo $getAllfundrequests['id']; ?>"
																	onclick="openModal(<?php echo $getAllfundrequests['id']; ?>,1)">Done</button>

																<button type="button" class="btn danger" data-toggle="modal"
																	data-target="#rejectstatus"
																	onclick="openrejectModal(<?php echo $getAllfundrequests['id']; ?>,9)">Reject</button>

															<?php } ?>
															<!-- <a class="btn-sm app-btn-secondary mx-1"
																href="list-fund-requests.php?id=<?php echo $getAllfundrequests['id']; ?>">
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																	fill="currentColor" class="bi bi-eye-fill"
																	viewBox="0 0 16 16">
																	<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
																	<path
																		d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
																</svg>
															</a>
															<a class="btn-sm app-btn-secondary mx-1"
																href="edit-fund-requests.php?id=<?php echo $getAllfundrequests['id']; ?>">
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																	fill="currentColor" class="bi bi-pencil-square"
																	viewBox="0 0 16 16">
																	<path
																		d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
																	<path fill-rule="evenodd"
																		d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
																</svg>
															</a>
															<a class="btn-sm app-btn-secondary mx-1" href="#"
																data-id="<?php echo $getAllfundrequests['id']; ?>"
																onclick="deletefundrequests(this);">
																<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																	fill="currentColor" class="bi bi-trash3"
																	viewBox="0 0 16 16">
																	<path
																		d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
																</svg>
															</a> -->
														</td>
													</tr>
												<?php }
											} ?>



										</tbody>
									</table>
								</div><!--//table-responsive-->

							</div><!--//app-card-body-->
						</div><!--//app-card-->
						<div class="modal fade " id="donestatus" tabindex="-1" role="dialog"
							aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="statusChangeModalLabel">Are You Sure Of Done
											This Request?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<div class="modal-body">
										<form class="update-status">
											<input type="hidden" id="donestatusId" name="donestatusId" value="">
											<input type="hidden" id="statusValue" name="statusValue" value="">
											<label for="note"><b>Note:</b></label>
											<textarea id="details_user" name="details_user" cols="60"
												rows="5"></textarea>
											<div class="modal-footer">
												<button type="button" class="btn but2 close" data-dismiss="modal"
													aria-label="Close">close</button>
												<button type="submit" class="btn action">Add Note & Done</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<div class="modal fade " id="rejectstatus" tabindex="-1" role="dialog"
							aria-labelledby="editModalLabel" aria-hidden="true">
							<div class="modal-dialog" role="document">
								<div class="modal-content">
									<div class="modal-header">
										<h5 class="modal-title" id="statusChangeModalLabel">Are You Sure Of Rejecting
											This Request?</h5>
										<button type="button" class="close" data-dismiss="modal" aria-label="Close">
											<span aria-hidden="true">&times;</span>
										</button>
									</div>

									<div class="modal-body">
										<form class="update-rej-status">
											<input type="hidden" id="rejectstatusId" name="rejectstatusId" value="">
											<input type="hidden" id="statusValueReject" name="statusValueReject"
												value="">
											<label for="note"><b>Note:</b></label>
											<textarea id="details_user" name="details_user" cols="60"
												rows="5"></textarea>
											<div class="modal-footer">
												<button type="button" class="btn but2 close" data-dismiss="modal"
													aria-label="Close">close</button>
												<button type="submit" class="btn action">Add Note & Reject</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
						<nav class="app-pagination">
							<ul class="pagination justify-content-end">
					<?php
                    $totalRecords = getTotalpagewithdrawrequest($searchValue);
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
		</footer><!--//app-footer-->
		<script>
			function openModal(id, status) {
				// Set the value of the hidden input in the "donestatus" modal
				document.getElementById('donestatusId').value = id;
				document.getElementById('statusValue').value = status;
				// Trigger the modal opening
				$('#donestatus').modal('show');
			}
			function openrejectModal(id, status) {
				// Set the value of the hidden input in the "donestatus" modal
				document.getElementById('rejectstatusId').value = id;
				document.getElementById('statusValueReject').value = status;
				// Trigger the modal opening
				$('#rejectstatus').modal('show');
			}

			function deletefundrequests() {
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
						data: { type: 'delete-fund-requests', ids: ids, page: currentPage },
						success: function (res) {
							console.log(res);
							alert('Selected Website Accounts Deleted');

							// Optionally, you can reload the page or update the table without a page reload
							window.location.href = "withdraw-f-requests.php";

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

		</script>

		<script>
			function filterTable(selectedStatus) {
				var rows = document.querySelectorAll('.table tbody tr');
				var buttons = document.querySelectorAll('.status-buttons button');

				// Remove active class from all buttons
				buttons.forEach(function (button) {
					button.classList.remove('active');
				});

				// Add active class to the clicked button
				event.currentTarget.classList.add('active');

				rows.forEach(function (row) {
					var statusCell = row.querySelector('.status-cell');
					var statusValue = statusCell.getAttribute('data-status');

					if (selectedStatus === 'all' || statusValue === selectedStatus) {
						row.style.display = '';
					} else {
						row.style.display = 'none';
					}
				});
			}
			$(document).on('click', '#extractAllwithdrawButton', function () {
				// Make an AJAX request to a PHP script that extracts and downloads the CSV
				$.ajax({
					url: 'includes/softwareinclude/ajax.php',
					type: 'post',
					data: { type: 'extract-all-withdraw-copy-trade' },
					success: function (res) {
						alert('CSV extraction successful. Download will begin shortly.');
						var csvData = res;
						console.log(csvData)
						var blob = new Blob([csvData], { type: 'text/csv' });
						var link = document.createElement('a');
						link.href = window.URL.createObjectURL(blob);
						link.download = 'withdraw_fund_request_data.csv';
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

			
			function updateSort() {
            var selectedValue = document.getElementById("withdraw-fund-req").value;
			
            window.location.href = "?page=1&sort=" + selectedValue;
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
	</div><!--//app-wrapper-->
	<?php include('includes/footer.php'); ?>

</body>

</html>