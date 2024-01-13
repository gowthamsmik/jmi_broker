<?php include('includes/header.php');

?>
    <div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">			    
			    <h1 class="app-page-title">Добавить ЧаВо</h1>
			    <hr class="mb-4">
				<form class="add-ru-faq">
				    
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Вопрос</label>
				        <input name="question" type="text" class="form-control" value="" >
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Ответ</label>
						<textarea name="answer" class="form-control"></textarea>
				    </div>
				    <div class="mb-3">
						<label for="setting-input-1" class="form-label">Тип</label>
				        <select name="faqtype" class="form-control">
				            <option value="" disabled selected>Выберите тип</option>
                            <option value="General">Общее</option>
                        <option value="Payments">Платежи</option>
                        <option value="services">Услуги</option>
                        <option value="Refund">Возврат</option>
                        <option value="Contact">Контакт</option>
				        </select>
				    </div>
				    
					
					<button type="submit" class="btn app-btn-primary" >Сохранить</button>
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

