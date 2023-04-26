<?php
$site_title = "Liftr - We help great brands grow their sales.";
$meta_description = "We’re really good at Technical Scoping, Wireframing and Prototyping,User Experience and User Interface Design, Front-end Development and Back-endDevelopment.";
$page_css = array ("css/pages/build.css");
?>
<?php include('head.php') ?>
<div class="wrapper">
    <?php include('header.php') ?>
    <div class="section-hero section">
        <div class="container">
            <div class="row">
                <div class="hero-content col-md-8">
                    <div class="section-title">
                        <h1 class="title-xl">Shopify </h1>
                    </div>
                    <p class="text-xl-extra mt-3">Integrate Shopify into your website and grow your online sales platform.</p>
                    <p class="text-lg-extra mt-4">Shopify is a powerful ecommerce platform trusted by over a million businesses worldwide. Do you need to process online payments? Take your inventory online? Expand your online store offering? We can help you build a powerful online presence with Shopify.</p>
                    <div class="mt-2">
                        <a href="#" class="btn btn-dark">Find out more</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-sm polar-bg">
        <div class="metrics-carousel">
            <div class="swiper-container">
                <div class="swiper-wrapper text-center">
                    <div class="swiper-slide">
                        <img src="images/WooCommerce-screen.png" class="img-fluid" alt=" screenshots">
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="col- section-arrow">
                    <a href="javascript:void(0);" tabindex="0" role="button" aria-label="Next slide"
                        class="slide-next"><i class="icon icon-arrow-next"></i></a>
                </div>
                <div class="col-">
                    <a href="#" class="btn btn-dark">View portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 order-lg-2 order-1">
                    <div class="block-content block-content-right">
                        <div class="section-title">
                            <h4 class="title-lg">More than an ecommerce sales platform</h4>
                            <p class="title-descripstion font-weight-medium">Shopify is an online sales performance powerhouse.</p>
                        </div>
                        <div class="text-description">
                            <p>Shopify allows you to customise your online store and easily promote your products through social media, email campaigns and more. The cloud-based platform enables you to manage inventory, shipping and payments all in one place.</p>
                            <p>Shopify is fully customisable to your business needs. We can help you develop a personalised look and feel with the Shopify platform that showcases your business in the best possible way. </p>
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-dark">View portfolio </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 order-lg-1 order-2 direction-rtl">
                    <div class="block-50-image mockup-screen-left budget-cover-left budget-cover-bg"
                        style="background-image:url(images/answer-background.png)" class="o-image_wrapper"
                        data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="budget-control-screen" data-scroll data-scroll-speed="2.0575"
                            data-scroll-delay="0.5">
                            <img src="images/answer-mockups.png" class="img-fluid" alt="Local targeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section alabaster-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="block-content block-content-left">
                        <div class="section-title">
                            <h3 class="title-lg">Optimise your website for mobile users</h3>
                            <div class="title-descripstion font-weight-medium">
                            Make sure your online store is mobile friendly with Shopify.
                            </div>
                        </div>
                        <div class="text-description">
                        Recent trends show that almost 75% of online customers will access your website from a mobile device. It is therefore essential that your online store provides users with a fast, safe and reliable mobile experience. Shopify’s adaptable design features will ensure that your online store is optimised for mobile shoppers.

                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-dark">View portfolio </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="block-50-image budget-cover-bg budget-cover-right"
                        style="background-image:url(images/hertex2-background.png)" class="o-image_wrapper" data-scroll
                        data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="budget-control-screen" data-scroll data-scroll-speed="2.0575"
                            data-scroll-delay="0.5">
                            <img src="images/hertex2-mockups.png" class="img-fluid" alt="Local targeting">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <?php include('shared/futures.php') ?>
    <?php include('shared/process.php') ?>
    <?php include('shared/services.php') ?>
</div>
<?php include('footer.php') ?>
<script>
$(document).ready(function() {
    $('.collapse').on('shown.bs.collapse', function() {
        $(this).parent().find(".accordion-icon").addClass('active');
    });
    $('.collapse').on('hidden.bs.collapse', function() {
        $(this).parent().find(".accordion-icon").removeClass('active');
    });
});
</script>
</div>