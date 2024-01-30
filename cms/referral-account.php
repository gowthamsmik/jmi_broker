<?php include('includes/header.php');
$myReferrals = getMyReferralscms();
$search = isset($_GET['Search']) ? $_GET['Search'] : '';
?>


<div class="app-wrapper">
	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<div class="row g-3 mb-4 align-items-center justify-content-between">
				<div class="col-auto">
					<h1 class="app-page-title mb-0">Referral Account</h1>
				</div>
				<div class="col-auto">

				</div>
				<div class="col-auto">
					<div class="app-search-form" id="searchForm">
						<form class="app-search-form">
							<div class="input-group">
								<input type="text" placeholder="search......" name="Search"
									class="form-control search-input" id="searchInput" value="<?php echo $search; ?>">
								<button type="submit" class="btn search-btn btn-primary" value="Search"><i
										class="fa-solid fa-magnifying-glass"></i></button>
								<button type="button" class="btn clear-search-btn btn-secondary" onclick="clearSearch()"
									id="clearSearchButton"><i class="fa-solid fa-x"></i></button>
							</div>
						</form>
					</div>

				</div>
			</div>
			<!-- <?php if (count($myReferrals) <= 0): ?>
					<div class="white-box mt-3">
						<h3>Don't Have Any Referalls Yet</h3>

						<div class="input-group mb-3 mt-4">
							<input type="text" class="form-control border <?php echo ($userPreferredLanguage === 'ar') ? 'rounded-start-0 rounded-end' : 'rounded-start rounded-end-0'; ?>" id="MyRef" readonly
								placeholder="<?php echo $siteurl; ?>index.php?myref=<?php echo $_SESSION['sessionuserid'] + 10000; ?>">
							<button class="btn btn-success custom-button <?php echo ($userPreferredLanguage === 'ar') ? 'rounded-start rounded-end-0' : ''; ?>" onclick="CopyText()" type="submit">Copy
								Link</button>
						</div>
					</div>

				<?php endif; ?> -->
			<?php if (count($myReferrals) > 0): ?>
				<div class="table-container">
					<!-- <h4 class="fs-4 mt-3"> <?php echo $lang['linked_copy_trade'] ?></h4> -->
					<table class="class='gap-3 bg-white table mt-3'" id="referral-account-table">
						<thead class="border">
							<tr>
								<td>#</td>
								<td>Full Name</td>
								<td>Email</td>
								<td>Country</td>
								<td>Mobile</td>
								<td>Live Accounts</td>
								<td>Demo Accounts</td>
								<td>Created Date</td>
							</tr>
						</thead>
						<tbody>


						</tbody>
					</table>
				</div>

				<div id="pagination-container" class="pagination float-end">

				</div>

			<?php endif; ?>
			<div id="modal-wrapper" onclick="closeModal()">
				<div id="modal-content">
					<div class="modal-dialog">
						<!-- Modal content-->
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal">&times;</button>

							</div>
							<div class="modal-body">

								<table class="table table-bordered" id="live-account-table">
									<thead>
										<tr>
											<td>#</td>

											<td>Account</td>
											<td>Server</td>
											<td>Type</td>
											<td>Group</td>
											<td>Currency</td>
											<td>Leverage</td>
											<td>Investor</td>

										</tr>
									</thead>
									<tbody>





									</tbody>
								</table>


							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-default" onclick="closeModal()"
									data-dismiss="modal">Close</button>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("../../includes/footer.php"); ?>
<?php include("../../includes/scripts.php"); ?>
<style>
	.current-num-btn {
		background-color: #007bff;
		/* Set the background color for the active page */
		color: #fff;
		/* Set the text color for the active page */
	}
</style>
<script type="text/javascript">
	loadReferralAccounts(1);
	function CopyText() {
		$('input#MyRef').val('<?php echo $siteurl; ?>index.php?myref=<?php echo $_SESSION['sessionuserid'] + 10000; ?>');
		var copyText = document.getElementById("MyRef");
		copyText.select();
		document.execCommand("Copy");
	}


	function loadReferralAccounts(page) {
		var searchValue = $('#searchInput').val();
		i = 1;
		$('#referral-account-table tbody').empty();
		$('#pagination-container').empty();
		$.ajax({
			url: 'includes/softwareinclude/referral-table.php?page=' + page + '&Search=' + searchValue,
			method: "GET",
			dataType: 'json',
			success: function (data) {
				$.each(data.referralAccounts, function (index, referralAccounts) {
					const serialNumber = (page - 1) * 10 + index + 1;
					var accountsShow = '';
					if (referralAccounts.totalLiveAccounts != 0) {
						accountsShow = '<span class="btn btn-success" onclick="openModalsacc(' + referralAccounts.website_accounts_live_id + ')">' + referralAccounts.totalLiveAccounts + ' Show</span>';
					}
					var accountsShowDemo = '';
					if (referralAccounts.totalDemoAccounts != 0) {
						accountsShowDemo = '<span class="btn btn-success" onclick="openModalsacc(' + referralAccounts.website_accounts_demo_id + ')">' + referralAccounts.totalDemoAccounts + ' Show</span>';
					}

					$('#referral-account-table tbody').append('<tr>' +
						'<td>' + serialNumber + '</td>' +
						'<td>' + referralAccounts.fullname + '</td>' +
						'<td>' + referralAccounts.email + '</td>' +
						'<td>' + referralAccounts.country + '</td>' +
						'<td>' + referralAccounts.country_code + "" + referralAccounts.mobile + '</td>' +
						'<td>' + accountsShow + '</td>' +
						'<td>' + accountsShowDemo + '</td>' +
						'<td>' + referralAccounts.created_at + '</td>' +
						'</tr>');
				});

				if (data.referralAccounts.length > 0) {
					updatePagination(data.totalPages, page, 'none', 'loadReferralAccounts');
				}
			},
			error: function (xhr, status, error) {
				console.error('AJAX error:', error);
			}
		});
	}



	function openModalsacc(id) {
		console.log("id", id);
		loadLiveAccounts(id);
		document.getElementById("modal-wrapper").style.display = "flex";
	}
	function closeModal() {
		document.getElementById("modal-wrapper").style.display = "none";
	}


	function loadLiveAccounts(id) {
		i = 1;
		$('#live-account-table tbody').empty();
		$.ajax({
			url: 'includes/softwareinclude/referral-table.php?id=' + id,
			method: "GET",
			dataType: 'json',
			success: function (data) {


				$.each(data.liveAccounts, function (index, liveAccounts) {




					var accountType = liveAccounts.account_type != 0 ? "Individual Account" : "IB Account";
					var accountGroup = ''
					if (liveAccounts.account_group == 3) { accountGroup = "Variable Spread Account" }

					else if (liveAccounts.account_group == 5) { accountGroup = "Scalping Account" }

					else if (liveAccounts.account_group == 1) { accountGroup = "Fixed Spread Account" }
					else if (liveAccounts.account_group == 4) { accountGroup = "Bonus Account" }




					$('#live-account-table tbody').append('<tr>' + '<td>' + index + '</td>' +
						'<td>' + liveAccounts.account_id + '</td>' +
						'<td>JMI-Server </td>' +
						'<td>' + accountType + '</td>' +
						'<td>' + accountGroup + '</td>' +
						'<td> USD </td>' +

						'<td>1:' + liveAccounts.leverage + '</td>' +


						'<td>' + liveAccounts.investor_password + '</td></tr>'
					)


				});



			},
			error: function (xhr, status, error) {
				console.error('AJAX error:', status, error);
			}
		})

	}


	function updatePagination(totalPages, currentPage, type, updateFunction) {

		$('#pagination-container').empty();
		if (updateFunction == 'loadTransactions' ) {
			if (currentPage > 1) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(1, \'' + type + '\')">&laquo;&laquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;&laquo;</button>');
			}

			if (currentPage > 1) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage - 1) + ', \'' + type + '\')">&laquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;</button>');
			}

			$('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

			for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + i + ', \'' + type + '\')">' + i + '</button>');
			}

			if (currentPage + 2 < totalPages - 1) {
				// Display ellipsis or any other indicator for more pages
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&hellip;</button>');
			}

			if (totalPages > currentPage) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage + 1) + ', \'' + type + '\')">&raquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;</button>');
			}

			if (totalPages > currentPage) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + totalPages + ', \'' + type + '\')">&raquo;&raquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;&raquo;</button>');
			}
		}
		else {


			if (currentPage > 1) {
				$('#pagination-container').append('<button class="opt-num-btn btn " onclick="' + updateFunction + '(1)">&laquo;&laquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;&laquo;</button>');
			}

			if (currentPage > 1) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage - 1) + ')">&laquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&laquo;</button>');
			}

			$('#pagination-container').append('<button class="current-num-btn" disabled>' + currentPage + '</button>');

			for (var i = currentPage + 1; i <= Math.min(currentPage + 2, totalPages - 1); i++) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + i + ')">' + i + '</button>');
			}

			if (currentPage + 2 < totalPages - 1) {
				// Display ellipsis or any other indicator for more pages
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&hellip;</button>');
			}

			if (totalPages > currentPage) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + (currentPage + 1) + ')">&raquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;</button>');
			}

			if (totalPages > currentPage) {
				$('#pagination-container').append('<button class="opt-num-btn" onclick="' + updateFunction + '(' + totalPages + ')">&raquo;&raquo;</button>');
			} else {
				$('#pagination-container').append('<button class="opt-num-btn pagination-disabled-button" disabled>&raquo;&raquo;</button>');
			}



		}
	}
	function clearSearch() {
		$('#searchInput').val(''); // Clear the search input value
		loadReferralAccounts(1);
		toggleClearButton(false); // Reload the table with cleared search
	}
	$('#searchInput').keyup(function () {
		var searchValue = $(this).val();
		toggleClearButton(searchValue.length > 0);
		// Check if the search value has at least 3 characters
		if (searchValue.length >= 3 || searchValue.length === 0) {
			loadReferralAccounts(1);
		}
	});
	function toggleClearButton(visible) {
    var clearButton = $('#clearSearchButton');
    clearButton.toggleClass('d-none', !visible);
}

</script>