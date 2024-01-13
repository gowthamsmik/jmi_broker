<!DOCTYPE html>
<html lang="en">
   <head>
      <?php include("includes/compatibility.php"); ?>
      <meta name="description" content="">
      <title>Contact Us</title>
      <?php include("includes/softwareinclude/config.php"); ?>
      <?php include("includes/style.php"); ?>
   </head>
   <body>
      <?php include("includes/header.php"); ?>

      <section class="contact-banner banner" style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(22, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2><?php echo getPageMetaByIDKeyGroup(22,'Banner Heading 1','Banner');?></h2>
            </div>
        </div>
      </section>

      <section class="contact-section1">
         <div class="container-fluid p-0">
            <div class="row align-items-center">
               <div class="col-md-6 ps-0">
                  <div class="sec1-cont1 pe-5">
                     <img src="assets/images/contact-us/1.jpg" alt="">
                  </div>
               </div>
               <div class="col-md-6">
                  <div class="sec1-cont2">
                     <div class="cont-hd">
                        <h3><?php echo $lang['get_in_touch'] ?></h3>
                        <p><?php echo $lang['get_back'] ?></p>
                     </div>
                     <div class="cont-form">
                        <form action="lead.php" method="post">
                           <div class="row">
                              <div class="col-md-6">
                                 <label for="fName"><?php echo $lang['first_name'] ?></label>
                                 <br>
                                 <input name="f_name" id="fName" type="text" placeholder="input your first name in here" required>
                              </div>

                              <div class="col-md-6">
                                 <label for="lName"><?php echo $lang['last_name'] ?></label>
                                 <br>
                                 <input name="l_name" id="lName" type="text" placeholder="input your last name in here" required>
                              </div>

                              <div class="col-md-12">
                                 <label for="email"><?php echo $lang['email_address'] ?></label>
                                 <br>
                                 <input name="email" id="email" type="email" placeholder="input your email address in here" required>
                              </div>

                              <div class="col-md-12">
                                 <label for="msg"><?php echo $lang['messages'] ?></label>
                                 <br>
                                 <textarea name="message" id="msg" placeholder="Write your messages in here" required></textarea>
                              </div>
                           </div>

                           <div class="contact-btn mn-btn">
                              <button type="submit" class="gd-btn">
                              <?php echo $lang['send_messages'] ?>
                              </button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <section class="contact-section2">
         <div class="container-fluid">
            <div class="row office-slider">
               <div class="col-md-3 pe-0 ps-0">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="contact-frame">
                           <iframe src="<?php echo getPageMetaByIDKeyGroup(22,'Location Map','Locations 1');?>" frameborder="0"></iframe>
                        </div>
                     </div>
                     <div class="col-md-7 ps-2">
                        <div class="sec2-cont">
                           <div class="mn-hd">
                              <p class="p-fs4 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Location Heading','Locations 1');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['address_details'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Address','Locations 1');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['contact_info'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['phone_no'] ?><a href="Tel:<?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 1');?>"><?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 1');?></a></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['e-mail'] ?><a class="tx-blue" href="mailto:<?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 1');?>"><?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 1');?></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 pe-0 ps-0">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="contact-frame">
                           <iframe src="<?php echo getPageMetaByIDKeyGroup(22,'Location Map','Locations 2');?>" frameborder="0"></iframe>
                        </div>
                     </div>
                     <div class="col-md-7 ps-2">
                        <div class="sec2-cont">
                           <div class="mn-hd">
                              <div class="sec2-cont2-1">
                                 <p class="p-fs4 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Location Heading','Locations 2');?></p>
                              </div>

                              <!--<div class="sec2-cont2-2">-->
                              <!--   <p class="p-fs8 tx-grey300 bld">The registered office of the Company at</p>-->
                              <!--</div>-->

                              <div class="sec2-cont2-3">
                                 <p class="p-fs8 tx-grey300 bld"><?php echo $lang['address_details'] ?></p>
                                 <p class="p-fs8 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Address','Locations 2');?></p>
                              </div>

                              <div class="sec2-cont2-4">
                                 <p class="p-fs8 tx-grey300 bld"><?php echo $lang['contact_info'] ?></p>
                                 <p class="p-fs8 tx-grey300"><?php echo $lang['phone_no'] ?><a href="tel:<?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 2');?>"><?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 2');?></a></p>
                                 <p class="p-fs8 tx-grey300"><?php echo $lang['e-mail'] ?><a class="tx-blue" href="mailto:<?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 2');?>"><?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 2');?></a></p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 pe-0 ps-0">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="contact-frame">
                           <iframe src="<?php echo getPageMetaByIDKeyGroup(22,'Location Map','Locations 3');?>" frameborder="0"></iframe>
                        </div>
                     </div>
                     <div class="col-md-7 ps-2">
                        <div class="sec2-cont">
                           <div class="mn-hd">
                              <p class="p-fs4 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Location Heading','Locations 3');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['address_details'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Address','Locations 3');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['contact_info'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['phone_no'] ?><a href="tel:<?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 3');?>"><?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 3');?></a></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['e-mail'] ?><a class="tx-blue" href="mailto:<?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 3');?>"><?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 3');?></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-3 pe-0 ps-0">
                  <div class="row">
                     <div class="col-md-5">
                        <div class="contact-frame">
                           <iframe src="<?php echo getPageMetaByIDKeyGroup(22,'Location Map','Locations 4');?>" frameborder="0"></iframe>
                        </div>
                     </div>
                     <div class="col-md-7 ps-2">
                        <div class="sec2-cont">
                           <div class="mn-hd">
                              <p class="p-fs4 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Location Heading','Locations 4');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['address_details'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo getPageMetaByIDKeyGroup(22,'Address','Locations 4');?></p>
                              <p class="p-fs8 tx-grey300 bld"><?php echo $lang['contact_info'] ?></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['phone_no'] ?><a href="tel:<?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 4');?>"><?php echo getPageMetaByIDKeyGroup(22,'Phone','Locations 4');?></a></p>
                              <p class="p-fs8 tx-grey300"><?php echo $lang['e-mail'] ?><a class="tx-blue" href="mailto:<?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 4');?>"><?php echo getPageMetaByIDKeyGroup(22,'Email','Locations 4');?></a></p>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>

      <?php include("includes/footer-cta.php"); ?>

      <?php include("includes/footer-apparea.php"); ?>


      <?php include("includes/footer.php"); ?>
      <?php include("includes/scripts.php"); ?>
   </body>
</html>