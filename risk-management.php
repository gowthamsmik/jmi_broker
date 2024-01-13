<!DOCTYPE html>
<html lang="en">
<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Risk Management</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
    <style>
        .text_header{
            color: #0342ab;
        }
        p{
            text-align:justify;
        }
    </style>
</head>
<body>
    <?php include("includes/header.php"); ?>

    <section class="container-fluid p-0">
        <img src="cms/<?php echo getPageMetaByIDKeyGroup(39,'Banner Image','Banner');?>" alt="" class="w-100 banner">
    </section>

    <div class="container">
        <p class="text_header h1 py-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading','Body');?></p>

        <p class="h3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 1','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 1','Body');?></p>
        <p class="ps-5"><?php echo getPageMetaByIDKeyGroup(39,'Description 2','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 2','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 3','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 4','Body');?></p>
        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 3','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 5','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 4','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 6','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 5','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 7','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 6','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 8','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 7','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 9','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 8','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 10','Body');?></p>
        
       
        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 9','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 11','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 10','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 12','Body');?></p>
        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 11','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 13','Body');?></p>
        
        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 12','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 14','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 13','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 15','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(39,'Heading 14','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(39,'Description 16','Body');?></p>
    </div>
    
    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>
</html>