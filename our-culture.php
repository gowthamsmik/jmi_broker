<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Our Cluture</title>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/style.php"); ?>
    <style>
        .text_header {
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
        <img src="cms/<?php echo getPageMetaByIDKeyGroup(37,'Banner Image','Banner');?>" alt="" class="w-100 banner">
    </section>

    <div class="container">
        <p class="text_header h1 py-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading','Body');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 1','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 1','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 2','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 2','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 3','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 3','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 4','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 4','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 5','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 5','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 6','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 6','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 7','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 7','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 8','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 8','Banner');?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(37,'Heading 9','Body');?></p>
        <p><?php echo getPageMetaByIDKeyGroup(37,'Description 9','Banner');?></p>
    </div>

    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html>