<?php
$site_title = "Liftr - We help great brands grow their sales.";
$meta_description = "We’re really good at Technical Scoping, Wireframing and Prototyping,User Experience and User Interface Design, Front-end Development and Back-endDevelopment.";
$page_css = array ("css/pages/build.css");
?>
<?php include('head.php') ?>
<div class="wrapper">
    <?php include('header.php') ?>
    <div class="section-hero section-b2x">
        <div class="container">
            <div class="row">
                <div class="hero-content col-md-8">
                    <div class="section-title">
                        <h1 class="title-xl">Wordpress </h1>
                    </div>
                    <p class="text-xl-extra mt-3">Custom wordpress wesbite design and developement to help you build
                        your
                        business online </p>

                    <p class="text-lg-extra mt-4">The internet is a powerful tool to reach more users and turn them into
                        customers. Do you want to get more quality leads? Increase sales? Build your online business
                        today
                        with Liftr</p>

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
                        <img src="images/slider-screenshots1.png" class="img-fluid" alt=" screenshots">
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
                            <h4 class="title-md">Custom Wordpress <br> design & dev</h4>
                            <p class="title-descripstion font-weight-medium">Beautiful websites to fit your needs, now
                                and into
                                the future.</p>
                        </div>
                        <div class="text-description">
                            <p>The content management system that powers over 30% of the entire internet, WordPress
                                delivers
                                an unforgettable digital experience. With functionality that’s highly customisable,
                                powerful
                                and looks beautiful.</p>

                            <p>That’s why we’re the specialists when it comes to making WordPress work for your
                                business.
                            </p>

                            <p>We offer: Custom Themes, Plugin development, Wordpress Support, Upgrades Training &
                                Hosting
                            </p>
                        </div>


                        <div class="mt-5">
                            <a href="#" class="btn btn-dark">View portfolio </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 order-lg-1 order-2 direction-rtl">

                    <div class="block-50-image mockup-screen-left budget-cover-left budget-cover-bg"
                        style="background-image:url(images/hertext-background-bg.png)" class="o-image_wrapper"
                        data-scroll data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="budget-control-screen" data-scroll data-scroll-speed="2.0575"
                            data-scroll-delay="0.5">
                            <img src="images/hertext-mockup-screen.png" class="img-fluid" alt="Local targeting">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section alabaster-bg">
        <div class="container-fluid">
            <div class="row align-items-center">
                <div class="col-lg-6 left-col-50">
                    <div class="block-content block-content-left">
                        <div class="section-title">
                            <h3 class="title-md">Optimise your website for mobile users</h3>
                            <div class="title-descripstion font-weight-medium">Everything You Need to Start Selling
                                Online</div>
                        </div>
                        <div class="text-description">
                            If your site isn’t optimized for mobile users, you could be missing out on the search engine
                            rankings, leads, and sales that your business deserves. We can help you enable Accelerated
                            Mobile Pages (AMP), recommend responsive WordPress themes, making technical site speed
                            improvements, and so much more.
                        </div>
                        <div class="mt-5">
                            <a href="#" class="btn btn-dark">View portfolio </a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6 p-0">
                    <div class="block-50-image budget-cover-bg budget-cover-right"
                        style="background-image:url(images/mh-backpack-bag.png)" class="o-image_wrapper" data-scroll
                        data-scroll-call="dynamicBackground" data-scroll-repeat>
                        <div class="budget-control-screen" data-scroll data-scroll-speed="2.0575"
                            data-scroll-delay="0.5">
                            <img src="images/plugplug-screen.png" class="img-fluid" alt="Local targeting">
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