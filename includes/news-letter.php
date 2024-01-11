<!-- <section class="about-section5">
    <div class="container">
        <div class="sec5-top">
            <div class="mn-hd">
                <h4 class="tx-blue"><?php echo $lang['our_latest_news'] ?></h4>
            </div>
        </div>

        <div class="sec5-main">
            <div class="newsletter-slider">
                <?php $getAllNewsFront = getAllNewsFront();
                if ($getAllNewsFront->num_rows > 0) {
                    $initialHeight=100;
                    foreach ($getAllNewsFront as $thisFrontNews) { 
                        
                        $showMoreButton = strlen($thisFrontNews['description']) > $initialHeight;
                    ?>
                        <div class="col-md-4">
                            <div class="about-card3 mb-3">
                                <div class="abtCard-head">
                                    <img src="cms/<?php echo $thisFrontNews['image']; ?>" alt="">
                                </div>
                                <div class="mn-hd">
                                    <div class="abtCard-body">
                                        <h6 class="tx-blue">
                                            <?php echo
                                            isset($_SESSION['user_language']) ? 
                                            ($_SESSION['user_language'] == "ar" ?$thisFrontNews['ar_heading'] : 
                                            ($_SESSION['user_language'] == "ru" ? $thisFrontNews['ru_heading'] : $thisFrontNews['heading'])) : 
                                            $thisFrontNews['heading'];
                                            ?>
                                        </h6>
                                        <div class="newsdesc">
                                            <p class="tx-grey300 p-fs5 ">
                                                <?php echo 
                                                 isset($_SESSION['user_language']) ? 
                                                 ($_SESSION['user_language'] == "ar" ?$thisFrontNews['ar_description'] : 
                                                 ($_SESSION['user_language'] == "ru" ? $thisFrontNews['ru_description'] : $thisFrontNews['description'])) : 
                                                 $thisFrontNews['description'];
                                               ?>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="abtCard-foot">
                                        <p class="tx-grey300 p-fs6">
                                            <span class="tx-grey-new">
                                                <?php echo $thisFrontNews['created_at']; ?>
                                            </span>
                                        </p>

                                        <a href="forex-trading.php">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="59" viewBox="0 0 58 59"
                                                fill="none">
                                                <path d="M16.918 41.151L41.0846 16.9844" stroke="#0343AE" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.918 16.9844H41.0846V41.151" stroke="#0343AE" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                       

                              <div class="show-more-btn" <?php if (!$showMoreButton)
                                 echo 'style="display: none; "'; ?>>
                                 <?php echo $lang['read_more'] ?></div>
                              <div class="show-less-btn" <?php if ($showMoreButton)
                                 echo 'style="display: none;"'; ?>><?php echo $lang['read_less'] ?></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>
        </div>
    </div>
    <script>
      document.addEventListener("DOMContentLoaded", function () {
         const contentList = document.querySelectorAll('.newsdesc');
         const showMoreBtnList = document.querySelectorAll('.show-more-btn');
         const showLessBtnList = document.querySelectorAll('.show-less-btn');

         // Add event listeners for each article
         for (let i = 0; i < contentList.length; i++) {
            const initialHeight = 300; // Set the initial height here

            showMoreBtnList[i].addEventListener('click', function () {
               contentList[i].style.maxHeight = 'none';
               showMoreBtnList[i].style.display = 'none';
               showLessBtnList[i].style.display = 'inline';
            });

            showLessBtnList[i].addEventListener('click', function () {
               contentList[i].style.maxHeight = initialHeight + 'px'; // Set the initial height
               showMoreBtnList[i].style.display = 'inline';
               showLessBtnList[i].style.display = 'none';
            });

            const showMoreButton = contentList[i].scrollHeight > initialHeight;
            showMoreBtnList[i].style.display = showMoreButton ? 'inline' : 'none';
            showLessBtnList[i].style.display = 'none';
         }
      });

   </script>
</section> -->