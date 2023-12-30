<?php include('includes/header.php');
if(isset($_GET['id'])){
	$pid = $_GET['id'];
	
	$page_detail = getRuPageDetail($pid);
}else{ ?>
    <meta http-equiv="refresh" content="0;URL='index.php'" />
<?php die; } ?>
?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title"><?php echo $page_detail['ru_pages'];?> Страница</h1>
			    <hr class="mb-4">
				<form class="settings-ru-form">
					<input type="hidden" name="page_id" value="<?php echo $pid;?>" />
					<?php $getPageGroups = getRuPageGroups($pid);
					if($getPageGroups->num_rows > 0){
						foreach($getPageGroups as $thisGroup){ ?>

						
						<div class="row g-4 settings-section">
							<div class="col-12 col-md-4">
								<h3 class="section-title"><?php echo $thisGroup['group_name'];?></h3>
								
							</div>
							<div class="col-12 col-md-8">
								<div class="app-card app-card-settings shadow-sm p-4">
									
									<div class="app-card-body">
										<?php $getPageFieldsByGroup = getRuPageFieldsByGroup($pid,$thisGroup['group_name']);
										if($getPageFieldsByGroup->num_rows > 0){
											foreach($getPageFieldsByGroup as $thisField){ ?>
												<div class="mb-3">
													<label for="setting-input-1" class="form-label"><?php echo $thisField['field_name'];?></label>
													<?php if($thisField['field_type'] == 'textarea'){ ?>
														<textarea name="<?php  echo $thisField['field_name'].'|'.$thisGroup['group_name'];?>" class="form-control"   value="<?php  echo $thisField['field_value'];?>" ><?php  echo $thisField['field_value'];?></textarea>
													<?php }else if($thisField['field_type'] == 'file'){ ?>
													    <?php if($thisField['field_value'] != ''){ ?>
													        <img src="<?php echo $thisField['field_value'];?>" style="display:block;max-width: 100%;">
													    <?php } ?>
														<input rel="<?php  echo $thisField['field_name'].'|'.$thisGroup['group_name'];?>" type="<?php echo $thisField['field_type'];?>" class="form-control" value="<?php  echo $thisField['field_value'];?>" >
														<input name="<?php  echo $thisField['field_name'].'|'.$thisGroup['group_name'];?>" type="hidden" class="form-control" value="<?php  echo $thisField['field_value'];?>" >
													<?php } else if($thisField['field_type'] == 'list'){ ?>
														<!-- <select name="<?php  echo $thisField['field_name'].'|'.$thisGroup['group_name'];?>[]" class="form-control" multiple>
															<option value="" selected disabled>--</option>
															<?php $get_data_from_table = get_data_from_table($thisGroup['group_name']);
															if($get_data_from_table->num_rows > 0){
																foreach($get_data_from_table as $thisdata){ ?>
																	<option value="<?php echo $thisdata['id'];?>"><?php echo $thisdata['name'];?></option>
																<?php }
															} ?> -->
														</select>
													<?php } else{ ?>
														<input name="<?php  echo $thisField['field_name'].'|'.$thisGroup['group_name'];?>" type="<?php echo $thisField['field_type'];?>" class="form-control" value="<?php  echo $thisField['field_value'];?>" >
													<?php } ?>
													
												</div>
											<?php }
										} ?>
										
											
											
										
									</div><!--//app-card-body-->
									
								</div><!--//app-card-->
							</div>
						</div><!--//row-->
						<hr class="my-4">
					<?php }
					}?>
					<button type="submit" class="btn app-btn-primary" >Save Changes</button>
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

