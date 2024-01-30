<?php include('includes/header.php'); ?>
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">All News</h1>
				</div>
				<div class="col-auto ">
					<a class="" href="add-news.php">Add News</h1></a>
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

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col">
					<button type="button" class="btn bgcolor my-3" id="deleteAllButton"
						onclick="deletetechnicalanalysis()" style="display: none;">Delete All</button>
				</div>
				<div class="col">
				</div>
				<div class="col">
					<div class="app-search-form" id="searchForm">
						<form class="app-search-form">
							<input type="text" placeholder="Search ..." name="Search" class="form-control search-input"
								id="searchInput">
							<button type="submit" class="btn search-btn btn-primary" value="Search"><i
									class="fa-solid fa-magnifying-glass"></i></button>
						</form>
					</div>
				</div>
			</div>
			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr>
											<th class="cell">
												<input type="checkbox" id="selectAllCheckbox"
													onclick="toggleSelectAll()">
											</th>
											<th class="cell">ID</th>
											<th class="cell">Heading</th>
											<th class="cell">arabic_title</th>
											<th class="cell">russian_title</th>
											<th class="cell">Posted By</th>
											<th class="cell">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$perPage = 10;
										$index = 0;
										$page = isset($_GET['page']) ? $_GET['page'] : 1;
										$searchValue = isset($_GET['Search']) ? $_GET['Search'] : '';
										$getAllNews = getAllNews($page, $perPage,$searchValue);
										if ($getAllNews->num_rows > 0) {
											foreach ($getAllNews as $thisNews) { ?>
												<tr>
													<td class="cell">
														<input type="checkbox" name="selectedRows[]"
															value="<?php echo $thisNews['id']; ?>" />
													</td>
													<td class="cell">
														<?php echo $thisNews['id']; ?>
													</td>
													<td class="cell"><span class="truncate">
															<?php echo $thisNews['heading']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisNews['ar_heading']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisNews['ru_heading']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisNews['posted_by']; ?>
														</span></td>
													<td class="cell">
														<a class="btn-sm app-btn-secondary"
															href="edit-news.php?id=<?php echo $thisNews['id']; ?>">Edit</a>
														<button type="button" class="btn-sm app-btn-secondary"
															onclick="deletetechnicalanalysis(this);">Delete</button>
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
							$totalRecords = getTotalNews($searchValue);
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
		function deletetechnicalanalysis() {
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
				console.log("avhcjhc", ids);
				// Send an AJAX request to delete the selected records on the current page
				$.ajax({
					url: 'includes/softwareinclude/ajax.php',
					type: 'post',
					data: { type: 'delete-news', ids: ids, page: currentPage },
					success: function (res) {
						console.log("cddsdddddddddddddddddddd", res);
						alert("Record Delete success");
						window.location.reload();
						// var successMessageDiv = document.getElementById('success-message');
						// successMessageDiv.innerHTML = 'Selected Records Deleted';
						// successMessageDiv.style.display = 'block';

						// var successMessageDiv = document.getElementById('success-message');
						// successMessageDiv.innerHTML = 'Selected technical Has Been Deleted';
						// successMessageDiv.style.display = 'block';
						// $('html, body').animate({ scrollTop: 0 }, 'fast');
						// setTimeout(function () {
						//     window.location.reload();
						// }, 2500);
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
		// function submitForm() {
		//     var form = document.getElementById('technicalForm');
		//     form.submit();
		// }
		// function viewTechnicalAnalysis(id, view) {
		//     $.ajax({
		//         type: 'POST',
		//         url: 'includes/softwareinclude/ajax.php',
		//         data: { viewType: view, type: 'session-store-technical' },
		//         success: function (response) {
		//             window.location.href = 'view-technical-analysis.php?id=' + id;
		//         },
		//         error: function (error) {
		//             console.error('Error setting session variable:', error);
		//         }
		//     });
		// }
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