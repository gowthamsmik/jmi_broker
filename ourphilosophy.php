<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>Our Philosophy</title>
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
        <img src="cms/<?php echo getPageMetaByIDKeyGroup(38,'Banner Image','Banner')?>" alt="404" class="w-100 banner">
    </section>

    <div class="container">
        <p class="text_header h1 pt-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading','Body 1')?></p>

        <p class="text_header h2 py-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading 1','Body 1')?></p>

        <p><?php echo getPageMetaByIDKeyGroup(38,'Description 1','Body 1')?></p>
    </div>

    <section class="container-fluid p-0">
        <img src="cms/<?php echo getPageMetaByIDKeyGroup(38,'Image','Body Image')?>" alt="" class="w-100 mt-3">
    </section>

    <div class="container">
        <p class="text_header h2 py-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading','Body 2')?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading 1','Body 2')?></p>
        <p><?php echo getPageMetaByIDKeyGroup(38,'Description 1','Body 2')?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading 2','Body 2')?></p>
        <p><?php echo getPageMetaByIDKeyGroup(38,'Description 2','Body 2')?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading 3','Body 2')?></p>
        <p><?php echo getPageMetaByIDKeyGroup(38,'Description 3','Body 2')?></p>

        <p class="h3 mt-3"><?php echo getPageMetaByIDKeyGroup(38,'Heading 4','Body 2')?></p>
        <p><?php echo getPageMetaByIDKeyGroup(38,'Description 4','Body 2')?></p>

    </div>

    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>

    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

</html>