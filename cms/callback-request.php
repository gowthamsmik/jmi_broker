<?php include('includes/header.php'); ?>
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">

			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">All Callback Requests</h1>
				</div>
				<div>
					<h6>Callback Requests</h6>
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


			<div class="tab-content" id="orders-table-tab-content">
				<div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					<div class="app-card app-card-orders-table shadow-sm mb-5">
						<div class="app-card-body">
							<div class="table-responsive">
								<table class="table app-table-hover mb-0 text-left">
									<thead>
										<tr class="text-center fs-8">
											<th class="cell">#</th>
											<th class="cell">Name</th>
											<th class="cell">Email</th>
											<th class="cell">Country</th>
											<th class="cell">Mobile</th>
											<th class="cell">Department</th>
											<th class="cell">TimeToCall</th>
											<th class="cell">Date</th>
											<th class="cell">Manage</th>
										</tr>
									</thead>
									<tbody>
										<?php
										$perPage = 10;
										$index = 0;
										$page = isset($_GET['page']) ? $_GET['page'] : 1;
										$getAllwebsiteaccount = getAllCallBackRequests($page, $perPage);
										if ($getAllwebsiteaccount->num_rows > 0) {
											foreach ($getAllwebsiteaccount as $websiteaccount) {
												$index++;
												?>
												<tr class="text-center">

													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['id']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['fullname']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['email']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['country']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['phone']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['department']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['timetocall']; ?>
														</span></td>
													<td class="cell"><span class="truncate">
															<?php echo $websiteaccount['created_at']; ?>
														</span></td>
													<td onclick="deleteCallbackAccount(<?php echo $websiteaccount['id']; ?>)">
														<button class="btn btn-success">Delete</button>
													</td>

													<!-- <td class="cell">
														<a class="btn-sm app-btn-secondary mx-1"
															href="list-account.php?id=<?php echo $websiteaccount['id']; ?>">
															<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
																fill="currentColor" class="bi bi-eye-fill" viewBox="0 0 16 16">
																<path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z" />
																<path
																	d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z" />
															</svg>
														</a>
														<a class="btn-sm app-btn-secondary mx-1"
															href="edit-website-account.php?id=<?php echo $websiteaccount['id']; ?>">
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
													</td> -->
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
	</footer><!--//app-footer-->
	<script>
		function deleteCallbackAccount(id) {
			console.log("Delete function triggered with ID: " + id);

			// if ('Are you sure you want to delete the selected records?')) {
			// Send an AJAX request to delete the selected records on the current page
			$.ajax({
				url: 'includes/softwareinclude/ajax.php',
				type: 'post',
				data: { type: 'delete-callback-request', id: id },
				success: function (res) {
					console.log("AJAX Success:", res);
					alert('CallBack Request Deleted');

					// Optionally, you can reload the page or update the table without a page reload
					window.location.href = "callback-request.php";
				},
				error: function (err) {
					console.error("AJAX Error:", err);
					alert('Error deleting Callback Request');
				}
			});
		}
		//}
	</script>

</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>