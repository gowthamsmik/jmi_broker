<?php if (!isset($_SESSION['sessionuser']))
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("includes/softwareinclude/config.php"); ?>
    <?php include("includes/compatibility.php"); ?>
    <meta name="description" content="">
    <title>FAQ</title>
    <?php include("includes/style.php"); ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        p {
            text-align: justify;
        }

        /* for faq*/
        .d-flex {
            display: flex;
        }

        .align-items-center {
            align-items: center;
        }

        .faq-search {
            position: relative;
        }

        .suggestions_faq {
            position: absolute;
            top: 100%;
            left: 0;
            width: 100%;
            background-color: #fff;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
            display: none;
        }

        .suggestions_faq a {
            display: block;
            padding: 10px;
            text-decoration: none;
            color: #333;
        }

        .suggestions_faq a:hover {
            background-color: #f0f0f0;
        }

        #suggestions_faq {
            max-height: 170px;
            overflow-y: auto;
            border: 1px solid #ccc;
            z-index: 999;
            text-align: left;
        }
    </style>
</head>

<body>
    <?php include("includes/header.php"); ?>

    <section class="faq-banner"
        style="background-image: url('cms/<?php echo getPageMetaByIDKeyGroup(27, 'Banner Background', 'Banner'); ?>');">
        <div class="container">
            <div class="banner-cont text-center mn-hd mn-btn">
                <h2>
                    <?php echo getPageMetaByIDKeyGroup(27, 'Banner Heading 1', 'Banner'); ?>
                </h2>
                <p class="p-fs4 tx-white text-center">
                    <?php echo getPageMetaByIDKeyGroup(27, 'Description', 'Banner'); ?>
                </p>
                <div class="banner-form faq-search">
                    <form>
                        <input type="text" placeholder="Search" oninput="faqSearch(this.value)" id="faq-search-input">
                        <button><i class="fa-solid fa-magnifying-glass"></i></button>
                        <div class="suggestions_faq" id="suggestions_faq"></div>
                    </form>
                </div>

            </div>
        </div>
    </section>

    <section class="faq-section1">
        <div class="container">
            <div class="pdX5">
                <div class="faqSec1-nav text-center">
                    <ul>
                        <li data-target="box-general" class="current"><a href="#"
                                onclick="showorhidetab('general')">General</a></li>
                        <li data-target="box-payments"><a href="#" onclick="showorhidetab('payments')">Payments</a></li>
                        <li data-target="box-services"><a href="#" onclick="showorhidetab('services')">Services</a></li>
                        <li data-target="box-refund"><a href="#" onclick="showorhidetab('refund')">Refund</a></li>
                        <li data-target="box-contact"><a href="#" onclick="showorhidetab('contact')">Contact</a></li>
                    </ul>
                </div>

                <div class="box-general showfirst">
                    <div class="faqSec1-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faqSec1-cont">
                                    <div class="innerFAQSec-accordion">
                                        <ul class="accordion">
                                            <?php $get_faqs = get_faqs_by_cat('general');
                                            if ($get_faqs->num_rows > 0) {
                                                foreach ($get_faqs as $thisFaq) { ?>
                                                    <li>
                                                        <div class="acc_title" id="general-title-<?php echo $thisFaq['id']; ?>">
                                                            <?php echo $thisFaq['question']; ?>
                                                            <i class="far fa-plus-square"></i>
                                                        </div>
                                                        <div class="acc_desc" style="display: none;"
                                                            id="general-slide-<?php echo $thisFaq['id']; ?>">
                                                            <p>
                                                                <?php echo $thisFaq['answer']; ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-payments">
                    <div class="faqSec1-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faqSec1-cont">
                                    <div class="innerFAQSec-accordion">
                                        <ul class="accordion">
                                            <?php $get_faqs = get_faqs_by_cat('payments');
                                            if ($get_faqs->num_rows > 0) {
                                                foreach ($get_faqs as $thisFaq) { ?>
                                                    <li>
                                                        <div class="acc_title" id="payments-title-<?php echo $thisFaq['id']; ?>">
                                                            <?php echo $thisFaq['question']; ?>
                                                            <i class="far fa-plus-square"></i>
                                                        </div>
                                                        <div class="acc_desc" style="display: none;"
                                                            id="payments-slide-<?php echo $thisFaq['id']; ?>">
                                                            <p>
                                                                <?php echo $thisFaq['answer']; ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-services">
                    <div class="faqSec1-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faqSec1-cont">
                                    <div class="innerFAQSec-accordion">
                                        <ul class="accordion">
                                            <?php $get_faqs = get_faqs_by_cat('services');
                                            if ($get_faqs->num_rows > 0) {
                                                foreach ($get_faqs as $thisFaq) { ?>
                                                    <li>
                                                        <div class="acc_title" id="services-title-<?php echo $thisFaq['id']; ?>">
                                                            <?php echo $thisFaq['question']; ?>
                                                            <i class="far fa-plus-square"></i>
                                                        </div>
                                                        <div class="acc_desc" style="display: none;"
                                                            id="services-slide-<?php echo $thisFaq['id']; ?>">
                                                            <p>
                                                                <?php echo $thisFaq['answer']; ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="box-refund">
                    <div class="faqSec1-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faqSec1-cont">
                                    <div class="innerFAQSec-accordion">
                                        <ul class="accordion">
                                            <?php $get_faqs = get_faqs_by_cat('refund');
                                            if ($get_faqs->num_rows > 0) {
                                                foreach ($get_faqs as $thisFaq) { ?>
                                                    <li>
                                                        <div class="acc_title" id="refund-title-<?php echo $thisFaq['id']; ?>">
                                                            <?php echo $thisFaq['question']; ?>
                                                            <i class="far fa-plus-square"></i>
                                                        </div>
                                                        <div class="acc_desc" style="display: none;"
                                                            id="refund-slide-<?php echo $thisFaq['id']; ?>">
                                                            <p>
                                                                <?php echo $thisFaq['answer']; ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="box-contact">
                    <div class="faqSec1-main">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="faqSec1-cont">
                                    <div class="innerFAQSec-accordion">
                                        <ul class="accordion">
                                            <?php $get_faqs = get_faqs_by_cat('contact');
                                            if ($get_faqs->num_rows > 0) {
                                                foreach ($get_faqs as $thisFaq) { ?>
                                                    <li>
                                                        <div class="acc_title" id="contact-title-<?php echo $thisFaq['id']; ?>">
                                                            <?php echo $thisFaq['question']; ?>
                                                            <i class="far fa-plus-square"></i>
                                                        </div>
                                                        <div class="acc_desc" style="display: none;"
                                                            id="contact-slide-<?php echo $thisFaq['id']; ?>">
                                                            <p>
                                                                <?php echo $thisFaq['answer']; ?>
                                                            </p>
                                                        </div>
                                                    </li>
                                                <?php }
                                            } ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq-section2">
        <div class="container">
            <div class="sec2-cont1 pdX5">
                <div class="row">
                    <?php $get_faqs = get_faqs_by_cat('other');
                    if ($get_faqs->num_rows > 0) {
                        foreach ($get_faqs as $thisFaq) { ?>
                            <div class="col-md-4">
                                <div class="mn-hd mx-3" id="contact-title-<?php echo $thisFaq['id']; ?>">
                                    <p class="tx-blue p-fs4 bld">
                                        <?php echo $thisFaq['question']; ?>
                                    </p>
                                    <p class="tx-grey300 p-fs4">
                                        <?php echo $thisFaq['answer']; ?>
                                    </p>
                                </div>
                            </div>
                        <?php }
                    } ?>

                </div>
            </div>
            <!--<div class="faq-btn mn-btn text-center">-->
            <!--   <button type="submit" class="theam-btn">-->
            <!--      View More-->
            <!--   </button>-->
            <!--</div>-->
        </div>
    </section>

    <?php include("includes/footer-cta.php"); ?>

    <?php include("includes/footer-apparea.php"); ?>


    <?php include("includes/footer.php"); ?>
    <?php include("includes/scripts.php"); ?>
</body>

<script>


    $(document).on('click', function (event) {

        if (!$(event.target).closest('.faq-search').length) {

            $('.suggestions_faq').hide();
        }
    });

    $('#faq-search-input').on('focus', function () {

        $('.suggestions_faq').show();
    });

    function faqSearch(query) {
        $.ajax({
            url: "includes/faqs.php",
            method: 'GET',
            dataType: 'json',
            success: function (data) {

                const faqSuggestionsContainer = document.getElementById('suggestions_faq');
                faqSuggestionsContainer.innerHTML = '';
                const matchedFaqs = data.faqs.filter(faq => {

                    return faq.question.toLowerCase().includes(query.toLowerCase());
                });
                console.log("data matched", matchedFaqs);

                matchedFaqs.forEach(match => {
                    const suggestionElement = document.createElement('a');
                    suggestionElement.href = `#${match.type}-title-${match.id}`;

                    suggestionElement.addEventListener('click', function () {
                        showorhidetab(match.type);
                        showSilde(match.type, match.id);
                    });

                    suggestionElement.textContent = match.question;
                    faqSuggestionsContainer.appendChild(suggestionElement);
                });
                faqSuggestionsContainer.style.display = matchedFaqs.length > 0 ? 'block' : 'none';



            },
            error: function (xhr, status, error) {
                console.error('AJAX error:', status, error);
            }
        })
    }
    function showorhidetab(gettab) {


        $(".faqSec1-nav ul li").removeClass('current');

        $(".faqSec1-nav ul li[data-target='box-" + gettab + "']").addClass('current');

        $(".box-general").removeClass('showfirst');
        $(".box-services").removeClass('showfirst');
        $(".box-payments").removeClass('showfirst');
        $(".box-contact").removeClass('showfirst');
        $(".box-refund").removeClass('showfirst');
        $(".box-" + gettab).addClass('showfirst');

    }



    function showSilde(tab, id) {


        $('.acc_desc').slideUp();

        $(`#${tab}-title-${id}`).toggleClass('active');
        $(`#${tab}-slide-${id}`).slideToggle();
    }
</script>

</html>