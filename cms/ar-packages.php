<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">اللغة الروسية</h1>
				</div>
				<div class="col-auto ms-auto">
					<a class="" href="add-ar-packages.php">أضف الحزم</a>
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
			<div class="col">
				<button type="button" class="btn app-btn-secondary my-3" id="deletearButton"
					onclick="deletetechnicalanalysis()" style="display: none;">احذف كل شيء</button>

			</div>
			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr class="text-center">
											<th class="cell">
												<input type="checkbox" id="selectarCheckbox"
													onclick="togglearSelectAll()">
											</th>
											<th class="cell">بطاقة تعريف</th>
											<th class="cell">اسم الحزمة</th>
											<th class="cell">خط العلامة</th>
											<th class="cell">خط الخصم</th>
											<th class="cell">سعر</th>
											<th class="cell"></th>
										</tr>
									</thead>
									<tbody>
										<?php
										$perPage = 10;
										$index = 0;
										$page = isset($_GET['page']) ? $_GET['page'] : 1;
										$getAllPackages = getAllArPackages($page, $perPage);
										if ($getAllPackages->num_rows > 0) {
											foreach ($getAllPackages as $thisruPackage) {
												$index++;
												?>
												<tr class="text-center">
													<td class="cell">
														<input type="checkbox" name="selectedarRows[]"
															value="<?php echo $thisruPackage['id']; ?>" />
													</td>
													<td class="cell">
														<?php echo $thisruPackage['id']; ?>
													</td>
													<td class="cell"><span class="truncate">
															<?php echo $thisruPackage['name']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisruPackage['tag_line']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisruPackage['discount_line']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $thisruPackage['price']; ?>
														</span></td>
													<td class="cell">
														<a class="btn-sm app-btn-secondary"
															href="edit-ar-package.php?id=<?php echo $thisruPackage['id']; ?>">يحرر</a>
														<button type="button" class="btn-sm app-btn-secondary"
															onclick="deletetechnicalanalysis(this);">يمسح</button>

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
							$totalRecords = getarTotalpackage();
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
			var selectedRows = document.querySelectorAll('input[name="selectedarRows[]"]:checked');
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
					data: { type: 'delete-ar-package', ids: ids, page: currentPage },
					success: function (res) {
						console.log("cddsdddddddddddddddddddd", res);
						alert("Record delete succesfully");
						window.location.href = "all-lang-packages.php";
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
						alert('Error deleting record');
					}
				});
			}
		}

		function togglearSelectAll() {
			console.log("Inside togglearSelectAll");
			var checkboxes = document.querySelectorAll('input[name="selectedarRows[]"]');
			var selectAllCheckbox = document.getElementById('selectarCheckbox');
			var deleteruButton = document.getElementById('deletearButton');

			checkboxes.forEach(function (checkbox) {
				checkbox.checked = selectAllCheckbox.checked;
			});

			// Enable or disable the "Delete All" button based on the number of selected checkboxes
			deleteruButton.disabled = !checkboxesarChecked();
			// deleteruButton.style.display = checkboxesChecked() ? 'inline-block' : 'none';
			deleteruButton.style.display = checkboxesarChecked() ? 'inline-block' : 'none';

		}

		function checkboxesarChecked() {
			var checkboxes = document.querySelectorAll('input[name="selectedarRows[]"]');
			var checkedCount = 0;

			checkboxes.forEach(function (checkbox) {
				if (checkbox.checked) {
					checkedCount++;
				}
			});

			console.log("checkedCount", checkedCount);

			return checkedCount > 1;
		}


		// Call toggleSelectAll on page load to set the initial state of the button
		window.onload = function () {
			togglearSelectAll();
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

	</script>
</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>