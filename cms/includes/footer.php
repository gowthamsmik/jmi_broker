
	    
	    <footer class="app-footer">
		    <div class="container text-center py-3">
		         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
            
		       
		    </div>
	    </footer><!--//app-footer-->
	    
    </div><!--//app-wrapper-->    					

 
    <!-- Javascript -->          
    <script src="assets/plugins/popper.min.js"></script>
    <script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>  

    <!-- Charts JS -->
    <script src="assets/plugins/chart.js/chart.min.js"></script> 
    <script src="assets/js/index-charts.js"></script> 
    
    <!-- Page Specific JS -->
    <script src="assets/js/app.js"></script> 
    <script src="assets/js/jquery.js"></script> 
    <script>
        $(document).on('submit','.settings-form',function(e){
            e.preventDefault();
            console.log($(this).serialize())
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=page-save',
                success:function(res){
                    console.log(res);
                    alert('Page Updated');
                    //location.reload();
                }
            })
        })
        $(document).on('submit','.section-form',function(e){
            e.preventDefault();
            console.log($(this).serialize())
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=section-save',
                success:function(res){
                    console.log(res);
                    alert('Section Updated');
                    location.reload();
                }
            })
        })
        $(document).on('submit','.add-faq',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=add-faq',
                success:function(res){
                    console.log(res);
                    alert('FAQ Added');
                    window.location.href="all-faqs.php"
                }
            })
        })
        $(document).on('submit','.update-faq',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=update-faq',
                success:function(res){
                    console.log(res);
                    alert('FAQ Updated');
                    window.location.href="all-faqs.php"
                }
            })
        })
        
        $(document).on('submit','.add-news',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=add-news',
                success:function(res){
                    console.log(res);
                    alert('News Added');
                    window.location.href="all-news.php"
                }
            })
        })
        $(document).on('submit','.update-news',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=update-news',
                success:function(res){
                    console.log(res);
                    alert('News Updated');
                    window.location.href="all-news.php"
                }
            })
        })
        
        $(document).on('submit','.add-fanalysis',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=add-fanalysis',
                success:function(res){
                    console.log(res);
                    alert('News Added');
                    window.location.href="all-f-analysis.php"
                }
            })
        })
        $(document).on('submit','.update-fanalysis',function(e){
            e.preventDefault();
            var forms = $(this).serialize();
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                type:'post',
                data: forms+'&type=update-fanalysis',
                success:function(res){
                    console.log(res);
                    alert('News Updated');
                    window.location.href="all-f-analysis.php"
                }
            })
        })
        
        $(document).on('change','input[type="file"]', function(e){
            //console.log($(this).attr('rel'));
            var rel_class = $(this).attr('rel');
            var props=$(this).prop('files');
            var file_data = props[0];   
            var form_data = new FormData();                  
            form_data.append('file', file_data);
            form_data.append('type', 'upload_file');
                          
            $.ajax({
                url:'includes/softwareinclude/ajax.php',
                dataType: 'text',  // <-- what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,                         
                type: 'post',
                success: function(res){
                    $('input[name="'+rel_class+'"]').val(res);
                }
            });
        })


    </script>
</body>
</html> 