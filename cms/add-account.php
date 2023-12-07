<?php include('includes/header.php');

?>
<?php
// Retrieve the ID from the URL
$id = isset($_GET['id']) ? $_GET['id'] : null;

// Array to map account type ID to its corresponding value
$accountTypeOptions = array(
    '1' => 'Website Account',
    '2' => 'Demo Account',
    '3' => 'Live Account',
    '4' => 'Referral Account',
);

// Function to check if an option should be selected
function isSelected($id, $accountTypeID) {
    return $id === $accountTypeID ? 'selected' : '';
}
?>
    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <h1 class="app-page-title">Add  Account</h1>
			    <hr class="mb-4">
				<div id="error-message"></div>
				<form class="add-account">

				    <!-- <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account ID</label>
				        <input name="account_id" type="text" class="form-control" value="" >
				    </div> -->
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account Type</label>
						<select name="account_type" class="form-control" id="accounttype">
							<option value="" disabled>Select Type</option>
							<?php
							foreach ($accountTypeOptions as $accountTypeID => $accountTypeValue) {
								echo '<option value="' . $accountTypeID . '" ' . isSelected($id, $accountTypeID) . '>' . $accountTypeValue . '</option>';
							}
							?>
						</select>
						<div class="error-message text-danger item-center my-5" id="accountTypeError"></div>
					</div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account Group</label>
				        <input name="account_group" type="text" class="form-control" value="" id="accountGroup">
				    </div>
					<div class="error-message text-danger text-center" id="accountGroupError" ></div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Currency</label>
				        <select name="currency" class="form-control" id="currency">
				            <option value="" disabled selected>Select Type</option>
				            <option value="1">USD - $</option>
				            <option value="2">EUR - €</option>
				            <option value="3">JPY - ¥</option>
				            <option value="4">GBP - £</option>
							<option value="5">CAD - CA$</option>
							<option value="6">CHF - CHF</option>
							<option value="7">AUD - A$</option>
							<option value="8">CNY - ¥</option>
							<option value="9">INR - ₹</option>
							<option value="10">BRL - R$</option>
				        </select>
						<div class="error-message text-danger text-center" id="currencyError" ></div>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Leverage</label>
				        <input name="leverage" type="text" class="form-control" value="" id="leverage">
				    </div>
					<div class="error-message text-danger text-center" id="leverageError"></div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account Radio Type</label>
				        <input name="account_radio_type" type="text" class="form-control" value="" >
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label"> Password</label>
				        <input name="password" type="text" class="form-control" value="" id="password">
						<div class="error-message text-danger text-center" id="passwordError" ></div>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Investor Password</label>
				        <input name="investor_password" type="text" class="form-control" value="" id="investorpassword">
						<div class="error-message text-danger text-center" id="investorpasswordError" ></div>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Status</label>
				        <input name="status" type="text" class="form-control" value="" >
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">website_accounts_id</label>
				        <input name="website_accounts_id" type="text" class="form-control" value="" id="websiteaccountid">
						<div class="error-message text-danger text-center" id="websiteaccountidError" ></div>
				    </div>
					<button type="submit" class="btn app-btn-primary" >Save</button>
				</form>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


		    </div>
	    </footer><!--//app-footer-->

    </div><!--//app-wrapper-->
<?php include('includes/footer.php');?>

