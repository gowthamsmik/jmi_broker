<section class="packageSection">
         <div class="container-fluid ">
            <div class="pdX8">
               <div class="packageSec-hd mn-hd hd-pad text-center pdX5">
                  <h3 class="tx-blue pb-2"><?php echo getPageMetaByIDKeyGroup(1,'Heading','Package');?></h3>
                  <p class="tx-grey300 p-fs3"><?php echo getPageMetaByIDKeyGroup(1,'Description 1','Package');?></p>
               </div>
   
               <div class="packageSec-main">
                  <div class="row">
                     <?php $get_packages =get_packages();
                     if($get_packages -> num_rows > 0){
                        foreach($get_packages as $thisPackage){ ?>
                        <div class="col-lg-3 col-md-6 mb-4 pakageCard_outer">
                           <div class="pakageCard h-100">
                              <div class="pakageCard-icon">
                                 <svg xmlns="http://www.w3.org/2000/svg" width="43" height="35" viewBox="0 0 43 35" fill="none">
                                    <path d="M17.431 29.0003C17.2416 28.6703 17.0616 28.3403 16.9004 28.001C16.9004 28.001 2.40116 28.001 2.33012 28.0104C1.31949 28.1266 0.554525 28.9816 0.550781 29.9997V32.9997C0.554531 34.1022 1.44703 34.9965 2.5514 35.0003H23.5512C23.7499 35.0003 23.9506 34.9703 24.14 34.9103C23.5193 34.6515 22.9175 34.3459 22.34 33.9991C20.3094 32.7728 18.62 31.0534 17.431 29.0003Z" fill="url(#paint0_linear_623_67364)"/>
                                    <path d="M2.82078 21.9991C2.64453 22.3028 2.55078 22.6478 2.55078 23.0003V26.0003C2.55078 26.3509 2.64453 26.6959 2.82078 26.9996H16.48C15.8631 25.404 15.5481 23.709 15.55 21.999L2.82078 21.9991Z" fill="url(#paint1_linear_623_67364)"/>
                                    <path opacity="0.3" d="M2.33018 20.9909C2.4033 20.9984 2.47643 21.0021 2.55143 21.0003H15.59C15.6106 20.6609 15.65 20.3309 15.6894 20.0009H15.6913C15.9444 18.2366 16.535 16.5397 17.4313 15.0003C17.6244 14.6553 17.8381 14.3216 18.0706 14.001H2.5514C1.44703 14.0029 0.554525 14.8972 0.550781 15.9997V18.9997C0.560156 20.0159 1.32147 20.869 2.33018 20.9909Z" fill="white"/>
                                    <path opacity="0.3" d="M3.82078 8.00005C3.64453 8.30379 3.55078 8.64881 3.55078 8.9994V11.9994C3.55078 12.35 3.64453 12.695 3.82078 12.9987H18.8413C20.9562 10.4694 23.9019 8.7725 27.1509 8.21C26.9784 8.075 26.7684 8.00188 26.551 8L3.82078 8.00005Z" fill="white"/>
                                    <path opacity="0.3" d="M3.33204 6.98996C3.40142 6.99934 24.5512 6.99934 24.5512 6.99934C25.0818 6.99934 25.5899 6.78934 25.9649 6.41432C26.3399 6.0393 26.5518 5.53123 26.5518 5.00059V2.00062C26.5481 0.896247 25.6537 0.00374396 24.5512 0H3.5514C2.4489 0.00374972 1.55453 0.896247 1.55078 2.00062V5.00059C1.55453 6.01871 2.31959 6.87371 3.33204 6.98996Z" fill="white"/>
                                    <path d="M29.5552 14.001C27.4327 14.001 25.3983 14.8428 23.8984 16.3428C22.3985 17.8428 21.5547 19.879 21.5547 21.9996C21.5547 24.1221 22.3984 26.1564 23.8984 27.6563C25.3984 29.1562 27.4328 30 29.5552 30C31.6758 30 33.712 29.1563 35.2119 27.6563C36.7118 26.1563 37.5537 24.122 37.5537 21.9996C37.5519 19.879 36.7081 17.8465 35.2082 16.3467C33.7082 14.8468 31.6756 14.0028 29.5552 14.001ZM31.5558 21.0003H31.5539C31.8201 21.0003 32.0733 21.1053 32.2608 21.2928C32.4483 21.4803 32.5552 21.7353 32.5552 21.9997V24.9996C32.5552 25.2659 32.4483 25.519 32.2608 25.7065C32.0733 25.894 31.8202 26.0009 31.5539 26.0009H30.5545C30.5545 26.5521 30.1064 27.0002 29.5552 27.0002C29.0021 27.0002 28.554 26.5521 28.554 26.0009H27.5546C27.0015 26.0009 26.5553 25.5528 26.5553 24.9997C26.5553 24.4484 27.0015 24.0003 27.5546 24.0003H30.5546V23.001H27.5546C27.0015 23.001 26.5553 22.5528 26.5553 21.9997V18.9998C26.5553 18.4485 27.0015 18.0004 27.5546 18.0004H28.554C28.554 17.4473 29.0021 17.0011 29.5552 17.0011C30.1064 17.0011 30.5545 17.4473 30.5545 18.0004H31.5539C32.107 18.0004 32.5551 18.4485 32.5551 18.9998C32.5551 19.5529 32.107 20.001 31.5539 20.001H28.5539V21.0003L31.5558 21.0003Z" fill="url(#paint2_linear_623_67364)"/>
                                    <path d="M29.5519 8.9991C25.8957 8.9916 22.4081 10.5328 19.952 13.2384C19.7326 13.4878 19.5114 13.7391 19.3126 13.9978L19.3108 13.9996C19.0576 14.3203 18.8214 14.654 18.602 14.999C17.6232 16.5177 16.9764 18.224 16.7008 20.0092C16.607 20.6692 16.5564 21.3329 16.5508 21.9985C16.5508 23.716 16.892 25.4147 17.552 26.9991C17.8201 27.6497 18.1445 28.2741 18.5214 28.8685C19.862 31.0322 21.8101 32.7534 24.1219 33.8182C24.4519 33.9588 24.7819 34.0975 25.1213 34.2175V34.2194C26.5388 34.7406 28.0406 35.005 29.5519 34.9994C34.1962 34.9994 38.488 32.5207 40.8092 28.4988C43.1323 24.477 43.1323 19.5215 40.8092 15.4996C38.488 11.4759 34.1963 8.9991 29.5519 8.9991ZM29.5519 31.9995C26.8988 31.9995 24.3564 30.9458 22.4796 29.0708C20.6047 27.1939 19.5509 24.6515 19.5509 21.9985C19.5509 19.3473 20.6046 16.8031 22.4796 14.9282C24.3565 13.0532 26.899 11.9995 29.5519 11.9995C32.2031 11.9995 34.7474 13.0532 36.6222 14.9282C38.4971 16.8032 39.551 19.3475 39.551 21.9985C39.5472 24.6497 38.4916 27.1901 36.6166 29.0655C34.7435 30.9404 32.2014 31.9939 29.5519 31.9995Z" fill="url(#paint3_linear_623_67364)"/>
                                    <defs>
                                       <linearGradient id="paint0_linear_623_67364" x1="-0.502307" y1="28.001" x2="23.9311" y2="36.3517" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18"/>
                                          <stop offset="1" stop-color="#FFF7C5"/>
                                       </linearGradient>
                                       <linearGradient id="paint1_linear_623_67364" x1="1.92894" y1="21.999" x2="16.8512" y2="26.2143" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18"/>
                                          <stop offset="1" stop-color="#FFF7C5"/>
                                       </linearGradient>
                                       <linearGradient id="paint2_linear_623_67364" x1="20.8404" y1="14.001" x2="39.1594" y2="15.8587" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18"/>
                                          <stop offset="1" stop-color="#FFF7C5"/>
                                       </linearGradient>
                                       <linearGradient id="paint3_linear_623_67364" x1="15.39" y1="8.99903" x2="45.161" y2="12.0182" gradientUnits="userSpaceOnUse">
                                          <stop stop-color="#FEDC18"/>
                                          <stop offset="1" stop-color="#FFF7C5"/>
                                       </linearGradient>
                                    </defs>
                                    </svg>
                              </div>
      
                              <div class="pakageCard-title">
                                 <h6><?php echo $thisPackage['name'];?></h6>
                                 <h5><?php echo $thisPackage['price'];?> USD</h5>
                                 <h4 ><?php echo $thisPackage['discount_line'];?></h4>
                                 <span ><?php echo $thisPackage['tag_line'];?></span>
                              </div>
      
                              <div class="pakageCard-detail mn-btn text-white line-height-3">
                                 
                                 <?php echo $thisPackage['description'];?>
                                 
                                 <a href="<?php echo getPageMetaByIDKeyGroup(21,'Banner Button URL','Package');?>" class="gd-btn mt-4">Buy Package</a>
                              </div>
                           </div>
                        </div>
                     <?php }
                     } ?>
                  </div>
               </div>
   
               <div class="aboutSec-bottom packageSec-bottom mn-hd mn-btn text-center pdX12">
                  <p class="p-fs3">
                  <?php echo getPageMetaByIDKeyGroup(1,'Description 2','Package');?>
                  </p>
                  <a class="theam-btn text-black  signUp" href="<?php echo getPageMetaByIDKeyGroup(1,'Banner Button URL','Package');?>"><?php echo getPageMetaByIDKeyGroup(1,'Banner Button Text','Package');?>
                     <span>
                           <svg width="21" height="16" viewBox="0 0 21 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M2 9L19 9" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                              <path d="M15 4L20 9L15 14" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                           </svg>
                     </span>
                  </a>
               </div>
            </div>
         </div>
      </section>