<?php include('includes/header.php');
$id = $_GET['id'];
$getNews = getNewsById($id);
?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Edit News</h1>
			    <hr class="mb-4">
				<form class="update-news">
				    
				   <div class="mb-3">
				        <input rel="news_files" type="file" class="form-control" value="" >
					    <input name="news_files" type="hidden" class="form-control" value="<?php echo $getNews['image'];?>" >
					    <input name="id" type="hidden" class="form-control" value="<?php echo $getNews['id'];?>" >
				    </div>
				    <div class="mv-3">
				        <img src="<?php echo $getNews['image'];?>" />
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Heading / Title</label>
				        <input name="heading" type="text" class="form-control" value="<?php echo $getNews['heading'];?>" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Description</label>
						<textarea name="description" class="form-control" value="<?php echo $getNews['description'];?>"><?php echo $getNews['description'];?></textarea>
				    </div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">arabic title</label>
				        <input name="ar_title" type="text" class="form-control" value="<?php echo $getNews['ar_heading'];?>" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Description</label>
						<textarea name="ar_details" class="form-control" value="<?php echo $getNews['ar_description'];?>"><?php echo $getNews['description'];?></textarea>
				    </div>
					<div class="mb-3">
						<label for="setting-input-1" class="form-label">russian title</label>
				        <input name="ru_heading" type="text" class="form-control" value="<?php echo $getNews['ru_heading'];?>" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Description</label>
						<textarea name="ru_description" class="form-control" value="<?php echo $getNews['ru_description'];?>"><?php echo $getNews['description'];?></textarea>
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Posted By</label>
						<input name="posted_by" type="text" class="form-control" value="<?php echo $getNews['posted_by'];?>" >
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

