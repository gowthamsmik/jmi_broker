<?php include('includes/header.php'); ?>
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Website Account</h1>
				</div>
				<div class="col-auto">


				</div>
				<div class="col-auto">
					<button class="btn app-btn-secondary">
						<a class="" href="add-account.php?id=<?php echo urlencode(1); ?>">Add Account</a>
					</button>

					<button type="button" class="btn app-btn-secondary" id="deleteAllButton"
						onclick="deleteWebsiteAccount()" style="display: none;">Delete All</button>
				</div>
			</div><!--//row-->
			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
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

											<th class="cell">ID</th>
											<th class="cell">Account ID</th>
											<th class="cell">Account Type</th>
											<th class="cell">Account Group</th>
											<th class="cell">Created Date</th>
											<th class="cell">Updated Date</th>
											<th class="cell">Status</th>
											<th class="cell">Action</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$perPage = 10;
										$index = 0;
										$page = isset($_GET['page']) ? $_GET['page'] : 1;
										$getAllwebsiteaccount = getAllwebsiteaccount($page, $perPage);
										if ($getAllwebsiteaccount->num_rows > 0) {
											foreach ($getAllwebsiteaccount as $websiteaccount) {
												$index++;
												?>
												<tr class="text-center">
													<td class="cell">
														<input type="checkbox" name="selectedRows[]"
															value="<?php echo $websiteaccount['account_id']; ?>" />
													</td>
													<td class="cell">
														<?php echo $index; ?>
													</td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['account_id']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo 'Website Account' ?>
														</span></td>
													<td class="cell">
														<?php
														$statusValue = $websiteaccount['account_type'];
														$statusLabel = '';

														switch ($statusValue) {
															case '1':
																$statusLabel = 'Website Account';
																break;
															case '2':
																$statusLabel = 'Demo Account';
																break;
															case '3':
																$statusLabel = 'Live Account';
																break;
															default:
																$statusLabel = 'Refferal Account';
																break;
														}

														echo $statusLabel;
														?>
													</td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['account_group']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['created_at']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['updated_at']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['status']; ?>
														</span></td>
													<td class="cell">
														<a class="btn-sm app-btn-secondary mx-1"
															href="list-account.php?id=<?php echo $websiteaccount['account_id']; ?>">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
																<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
																<path
																	d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
															</svg>
														</a>
														<a class="btn-sm app-btn-secondary mx-1"
															href="edit-account.php?id=<?php echo $websiteaccount['account_id']; ?>">
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
															data-id="<?php echo $websiteaccount['id']; ?>"
															onclick="deleteWebsiteAccount(this);">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
																<path
																	d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z" />
															</svg>
														</a>
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
							$totalRecords = getTotalWebsiteAccounts();
							$totalPages = ceil($totalRecords / $perPage);

							for ($i = 1; $i <= $totalPages; $i++) {
								echo '<li class="page-item ' . ($page == $i ? 'active' : '') . '"><a class="page-link" href="?page=' . $i . '">' . $i . '</a></li>';
							}
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
		function deleteWebsiteAccount() {
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
					data: { type: 'delete-website-accounts', ids: ids, page: currentPage },
					success: function (res) {
						console.log(res);
						alert('Selected Website Accounts Deleted');

						// Optionally, you can reload the page or update the table without a page reload
						window.location.href = "website-account.php";

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

</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>