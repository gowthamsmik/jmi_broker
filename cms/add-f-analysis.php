<?php include('includes/header.php');

?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Add News</h1>
			    <hr class="mb-4">
				<form class="add-fanalysis">
				    <div class="mb-3">
				        <input rel="news_files" type="file" class="form-control" value="" >
					    <input name="news_files" type="hidden" class="form-control" value="" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Heading / Title</label>
				        <input name="heading" type="text" class="form-control" value="" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Description</label>
						<textarea name="description" class="form-control"></textarea>
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Posted By</label>
						<input name="posted_by" type="text" class="form-control" value="" >
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

