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
				<form class="add-fund-requests">

				    <!-- <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account ID</label>
				        <input name="account_id" type="text" class="form-control" value="" >
				    </div> -->
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account Type</label>
						<select name="account" class="form-control" id="account">
				            <option value="" disabled selected>Select Type</option>
				            <option value="1">Website Account</option>
				            <option value="2">Demo Account</option>
				            <option value="3">Live Account</option>
                            <option value="4">Referral Account</option>
				        </select>
						<div class="error-message text-danger text-center" id="accountError" ></div>
					</div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Amount</label>
				        <input name="amount" type="text" class="form-control" value="" id="amount">
				    </div>
					<div class="error-message text-danger text-center" id="amountError" ></div>
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
						<label for="setting-input-1" class="form-label">Type</label>
						<select name="type" class="form-control" id="type">
				            <option value="" disabled selected>Select Type</option>
				            <option value="deposite">Deposite</option>
				            <option value="withdraw">Withdraw</option>
				            <option value="internal_transfer">Internal Transfer</option>
				        </select>
						<div class="error-message text-danger text-center" id="typeError" ></div>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">via</label>
				        <select name="via" class="form-control" id="via">
				            <option value="" disabled selected>Select Type</option>
				            <option value="bank_wire">Bank Wire</option>
				            <option value="coinbase">CoinBase</option>
				        </select>
						<div class="error-message text-danger text-center" id="viaError" ></div>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">website_accounts_id</label>
				        <input name="website_accounts_id" type="text" class="form-control" value="" id="websiteaccountid">
						<div class="error-message text-danger text-center" id="websiteaccountidError" ></div>
				    </div>
                    <div class="mb-3">
					<label for="setting-input-1" class="form-label">Status</label>
						<select name="status" class="form-control">
				            <option value="" disabled selected>Select Type</option>
				            <option value="1">Done</option>
				            <option value="2">Pending</option>
				            <option value="3">Rejected</option>
				        </select>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Details Admin</label>
				        <input name="details_admin" type="text" class="form-control" value="" >
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Details User</label>
				        <input name="details_user" type="text" class="form-control" value="" >
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

