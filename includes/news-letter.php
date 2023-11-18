<section class="about-section5">
    <div class="container">
        <div class="sec5-top">
            <div class="mn-hd">
                <h4 class="tx-blue">Our Latest News</h4>
            </div>
        </div>

        <div class="sec5-main">
            <div class="row newsletter-slider">
                <?php $getAllNewsFront = getAllNewsFront();
                if($getAllNewsFront->num_rows > 0){
                    foreach($getAllNewsFront as $thisFrontNews){ ?>
                        <div class="col-md-4">
                            <div class="about-card3">
                                <div class="abtCard-head">
                                    <img src="cms/<?php echo $thisFrontNews['image'];?>" alt="">
                                </div>
                                <div class="mn-hd">
                                    <div class="abtCard-body">
                                        <h6 class="tx-blue">
                                            <?php echo $thisFrontNews['heading']; ?>
                                        </h6>
                                        <p class="tx-grey300 p-fs5">
                                            <?php echo $thisFrontNews['description']; ?>
                                        </p>
                                    </div>
                                    <div class="abtCard-foot">
                                        <p class="tx-grey300 p-fs6"><?php echo $thisFrontNews['posted_by']; ?>
                                            <span class="tx-grey-new"><?php echo date('d-m-Y',$thisFrontNews['posted_on']); ?></span>
                                        </p>
        
                                        <a href="#">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="58" height="59" viewBox="0 0 58 59"
                                                fill="none">
                                                <path d="M16.918 41.151L41.0846 16.9844" stroke="#0343AE" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M16.918 16.9844H41.0846V41.151" stroke="#0343AE" stroke-width="4"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php  }
                } ?>
                

            </div>
        </div>
    </div>
</section>