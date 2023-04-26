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
                        <h1 class="title-xl">WooCommerce </h1>
                    </div>
                    <p class="text-xl-extra mt-3">Custom WooCommerce development to build your business and start
                        selling online. </p>
                    <p class="text-lg-extra mt-4">Create a visually appealing and fully functional ecommerce website.
                        Business owners around the world are using WooCommerce to open online stores and process online
                        payments.</p>
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
                            <h4 class="title-lg">Custom WooCommerce development</h4>
                            <p class="title-descripstion font-weight-medium">An ecommerce platform that is adaptable to
                                your business needs.</p>
                        </div>
                        <div class="text-description">
                            <p>WooCommece is fully customisable, flexible and free. Compatible with any WordPress
                                website WooCommerce is a great option for any ecommerce solution. WooCommerce provides a
                                platform capable of handling all stages of a retail transaction without the fees and
                                third-party control necessary on other ecommerce platforms. It is a completely free
                                WordPress plugin that can be installed and integrated with any WordPress website.
                                WooCommerce integrates seamlessly with any WordPress website’s existing website theme
                                and is able to run alongside all the site’s existing parts.</p>
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
                            <h3 class="title-lg">Start selling online</h3>
                            <div class="title-descripstion font-weight-medium">Build the ecommerce website you want
                            </div>
                        </div>
                        <div class="text-description">
                            WooCommerce offers a fully functioning ecommerce platform to build all the components of
                            your online store. The WooCommerce platform is flexible and can be constantly updated and
                            customised according to your business needs. Our developers can work with the WooCommerce
                            source code to give you more control over your platform’s functions and appearance. Once set
                            up the online store and product management is easy, giving you the freedom and control to
                            add products, images and details as you need to. Coupons, discounts and sales promotions can
                            all be easily managed within the platform
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