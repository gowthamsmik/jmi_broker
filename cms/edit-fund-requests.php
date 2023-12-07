<?php include('includes/header.php');
$id = $_GET['id'];
$getfund = getAllfundrequests($id);
?>
    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <h1 class="app-page-title">Fund Requests</h1>
			    <hr class="mb-4">
				<form class="update-fund-requests">

                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">ID</label>
						<input name="id" type="text" class="form-control" value="<?php echo $getfund['id'];?>" >
				    </div>
                    <div class="mb-3">
    <label for="setting-input-1" class="form-label">Account</label>
    <select name="account" class="form-control">
        <?php
        $currencyOptions = array(
            1 => 'Website account',
            2 => 'Demo account',
            3 => 'Live account',
            4 => 'Refferal account',
        );

        foreach ($currencyOptions as $value => $label) {
            $selected = ($getfund['account'] == $value) ? 'selected' : '';
            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }
        ?>
    </select>
</div>
                     <div class="mb-3">
						<label for="setting-input-1" class="form-label">amount</label>
						<input name="amount" type="text" class="form-control" value="<?php echo $getfund['amount'];?>" >
				    </div>

                    <div class="mb-3">
    <label for="setting-input-1" class="form-label">Currency</label>
    <select name="currency" class="form-control">
        <?php
        $currencyOptions = array(
            1 => 'USD - $',
            2 => 'EUR - €',
            3 => 'JPY - ¥',
            4 => 'GBP - £',
            5 => 'CAD - CA$',
            6 => 'CHF - CHF',
            7 => 'AUD - A$',
            8 => 'CNY - ¥',
            9 => 'INR - ₹',
            10 => 'BRL - R$'
        );

        foreach ($currencyOptions as $value => $label) {
            $selected = ($getfund['currency'] == $value) ? 'selected' : '';
            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="setting-input-1" class="form-label">Type</label>
    <select name="type" class="form-control">
        <?php
        $currencyOptions = array(
            "1" => 'Deposite',
            "2" => 'Withdraw',
            "3" => 'Internal Transfer',
        );

        foreach ($currencyOptions as $value => $label) {
            $selected = ($getfund['type'] == $value) ? 'selected' : '';
            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }
        ?>
    </select>
</div>
<div class="mb-3">
    <label for="setting-input-1" class="form-label">Via</label>
    <select name="via" class="form-control">
        <?php
        $currencyOptions = array(
            "bank_wire" => 'Bank Wire',
            "coinbase" => 'CoinBase',
        );

        foreach ($currencyOptions as $value => $label) {
            $selected = ($getfund['via'] == $value) ? 'selected' : '';
            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }
        ?>
    </select>
</div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">website_account_id</label>
						<input name="website_account_id" type="text" class="form-control" value="<?php echo $getfund['website_account_id'];?>" >
				    </div>
                    <div class="mb-3">
    <label for="setting-input-1" class="form-label">Status</label>
    <select name="status" class="form-control">
        <?php
        $statusOptions = array(
            1 => 'Done',
            2 => 'Pending',
            3 => 'Rejected',
        );

        foreach ($statusOptions as $value => $label) {
            $selected = ($getfund['status'] == $value) ? 'selected' : '';
            echo '<option value="' . $value . '" ' . $selected . '>' . $label . '</option>';
        }
        ?>
    </select>
</div>

                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">details_admin</label>
						<input name="details_admin" type="text" class="form-control" value="<?php echo $getfund['details_admin'];?>" >
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">details_user</label>
						<input name="details_user" type="text" class="form-control" value="<?php echo $getfund['details_user'];?>" >
				    </div>
					<button type="submit" class="btn app-btn-primary"  >Update</button>
				</form>
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->


		    </div>
	    </footer><!--//app-footer-->
        <script>

</script>
    </div><!--//app-wrapper-->
<?php include('includes/footer.php');?>

