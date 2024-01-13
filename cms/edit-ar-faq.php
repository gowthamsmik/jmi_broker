<?php include('includes/header.php');
$faqid = $_GET['id'];
$getFAQ = getArFaqById($faqid);
?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">تحرير الأسئلة الشائعة</h1>
			    <hr class="mb-4">
				<form class="update-ar-faq">
				    
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">السؤال</label>
						<input name="id" type="hidden" class="form-control" value="<?php echo $getFAQ['id'];?>" >
				        <input name="question" type="text" class="form-control" value="<?php echo $getFAQ['ar_question'];?>" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">الجواب</label>
						<textarea name="answer" class="form-control" value="<?php echo $getFAQ['ar_answer'];?>"><?php echo $getFAQ['ar_answer'];?></textarea>
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">النوع</label>
				        <select name="faqtype" class="form-control">
                        <option value="" disabled selected>اختر النوع</option>
                        <option value="General">عام</option>
                        <option value="Payments">المدفوعات</option>
                        <option value="services">الخدمات</option>
                        <option value="Refund">الاسترجاع</option>
                        <option value="Contact">الاتصال</option>
				        </select>
				    </div>
				    
					
					<button type="submit" class="btn app-btn-primary" >حفظ</button>
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

