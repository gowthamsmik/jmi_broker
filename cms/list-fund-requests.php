<?php include('includes/header.php');
$id = $_GET['id'];
$getfund = getAllfundrequests($id);
?>
    <div class="app-wrapper">

	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    <h1 class="app-page-title">Fund Requests</h1>
			    <hr class="mb-4">
				<form class="update-website-account">

                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">ID</label>
						<input name="id" type="text" class="form-control" value="<?php echo $getfund['id'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Account</label>
						<input name="account" type="text" class="form-control" value="<?php echo $getfund['account'];?>" readonly>
				    </div>
                     <div class="mb-3">
						<label for="setting-input-1" class="form-label">amount</label>
						<input name="amount" type="text" class="form-control" value="<?php echo $getfund['amount'];?>" readonly>
				    </div>

                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Currency</label>
						<input name="currency" type="text" class="form-control" value="<?php echo $getfund['currency'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">type</label>
						<input name="type" type="text" class="form-control" value="<?php echo $getfund['type'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">via</label>
						<input name="via" type="text" class="form-control" value="<?php echo $getfund['via'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">website_account_id</label>
						<input name="website_account_id" type="text" class="form-control" value="<?php echo $getfund['website_account_id'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">status</label>
						<input name="status" type="text" class="form-control" value="<?php echo $getfund['status'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">details_admin</label>
						<input name="details_admin" type="text" class="form-control" value="<?php echo $getfund['details_admin'];?>" readonly>
				    </div>
                    <div class="mb-3">
						<label for="setting-input-1" class="form-label">details_user</label>
						<input name="details_user" type="text" class="form-control" value="<?php echo $getfund['details_user'];?>" readonly>
				    </div>
					<button type="submit" class="btn app-btn-primary"  onclick="goBack()">Back</button>
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
<?php include('includes/footer.php');?>

