<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Title Here</title>
      <?php include("includes/style.php"); ?>
      
      <style>
.policy-banner{
    padding: 60px 0;
    text-align: center;
}

.wrapper-2 h1{
    font-family: 'Kaushan Script', cursive;
    font-size:6em;
    letter-spacing:3px;
    color:#5892FF ;
    padding-bottom: 35px;
}
.wrapper-2 p{
  margin:0;
  font-size:1.3em;
  color:#fff;
  font-family: 'Source Sans Pro', sans-serif;
  letter-spacing:1px;
}
.go-home{
  color:#fff;
  background:#5892FF;
  border:none;
  padding:10px 50px;
  margin:30px 0 0;
  border-radius:30px;
  text-transform:capitalize;
}
.go-home:hover{
    color:#fff;
    box-shadow: 0 2px 15px 2px rgb(255 255 255);
}


      </style>
   </head>
   <body>
      <?php include("includes/header.php"); ?>
      
      <section class="policy-banner">
        <div class=container>
            <div class="wrapper-1">
                <div class="wrapper-2">
                  <h1>Thank you !</h1>
                  <p>Thanks for subscribing to our news letter.  </p>
                  <p>you should receive a confirmation email soon  </p>
                  <a href="./" class="go-home">go home</a>
                </div>
            </div>
        </div>
      </section>


      <!--<?php include("includes/footer-cta.php"); ?>-->

      <!--<?php include("includes/footer-apparea.php"); ?>-->


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>