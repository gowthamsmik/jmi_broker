<?php include('includes/header.php');
$id = $_GET['id'];
$getWebsite = getWebsiteById($id);
?>
<div class="app-wrapper">

	<div class="app-content pt-3 p-md-3 p-lg-4">
		<div class="container-xl">
			<h1 class="app-page-title">Account</h1>
			<hr class="mb-4">
			<form class="update-website-account">

				<!-- <div class="mb-3">
						<label for="setting-input-1" class="form-label">ID</label>
						<input name="id" type="text" class="form-control" value="<?php echo $getWebsite['id']; ?>" readonly>
					</div> -->
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Account ID</label>
					<input name="account_id" type="text" class="form-control"
						value="<?php echo $getWebsite['account_id']; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Account Group</label>
					<input name="account_group" type="text" class="form-control"
						value="<?php echo $getWebsite['account_group']; ?>" readonly>
				</div>

				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Currency</label>
					<input name="currency" type="text" class="form-control"
						value="<?php echo $getWebsite['currency']; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">leverage</label>
					<input name="leverage" type="text" class="form-control"
						value="<?php echo $getWebsite['leverage']; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Password</label>
					<input name="password" type="text" class="form-control"
						value="<?php echo $getWebsite['password']; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Investor_password</label>
					<input name="investor_password" type="text" class="form-control"
						value="<?php echo $getWebsite['investor_password']; ?>" readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Status</label>
					<input name="status" type="text" class="form-control" value="<?php echo $getWebsite['status']; ?>"
						readonly>
				</div>
				<div class="mb-3">
					<label for="setting-input-1" class="form-label">Website Accounts_id</label>
					<input name="website_accounts_id" type="text" class="form-control"
						value="<?php echo $getWebsite['website_accounts_id']; ?>" readonly>
				</div>
				<button type="submit" class="btn app-btn-primary" onclick="goBack()">Back</button>
			</form>
		</div><!--//container-fluid-->
	</div><!--//app-content-->

	<footer class="app-footer">
		<div class="container text-center py-3">
			<!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


		</div>
	</footer><!--//app-footer-->
	<script>
		function goBack() {
			window.history.back();
		}
	</script>
</div><!--//app-wrapper-->
<?php include('includes/footer.php'); ?>