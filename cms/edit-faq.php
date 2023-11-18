<?php include('includes/header.php');
$faqid = $_GET['id'];
$getFAQ = getFaqById($faqid);
?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Edit FAQ</h1>
			    <hr class="mb-4">
				<form class="update-faq">
				    
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Question</label>
						<input name="id" type="hidden" class="form-control" value="<?php echo $getFAQ['id'];?>" >
				        <input name="question" type="text" class="form-control" value="<?php echo $getFAQ['question'];?>" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Answer</label>
						<textarea name="answer" class="form-control" value="<?php echo $getFAQ['answer'];?>"><?php echo $getFAQ['answer'];?></textarea>
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Type</label>
				        <select name="faqtype" class="form-control">
				            <option value="" disabled selected>Select Type</option>
				            <option value="General">General</option>
				            <option value="Payments">Payments</option>
				            <option value="services">services</option>
				            <option value="Refund">Refund</option>
				            <option value="Contact">Contact</option>
				        </select>
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

