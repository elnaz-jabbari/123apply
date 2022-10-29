<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apply
 */

?>

<footer id="colophon" class="site-footer">
    <div class="container">
        <div class="row p-4">
            <div class="col-md-3">
                <div>
                    <p class="text-start mt-4 mt-md-5">
                        <?php if ( is_active_sidebar( 'widget-one-footer-title' ) ) { ?>

                            <?php dynamic_sidebar('widget-one-footer-title'); ?>
                        <?php } ?>
                    </p>
                    <div class="d-flex align-items-start justify-content-start">
                                <span class="underline">

                                </span>
                    </div>

                    <div class="m-0">
                        <?php if ( is_active_sidebar( 'widget-one-footer' ) ) { ?>

                            <?php dynamic_sidebar('widget-one-footer'); ?>
                        <?php } ?>
                    </div>
                </div>

            </div>
            <div class="col-md-3">
                <div>
                    <div class="text-start mt-5">
                        <?php if ( is_active_sidebar( 'widget-two-footer-title' ) ) { ?>

                            <?php dynamic_sidebar('widget-two-footer-title'); ?>
                        <?php } ?>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                                <span class="underline">

                                </span>
                    </div>
                    <div class="m-0">
                        <?php if ( is_active_sidebar( 'widget-two-footer' ) ) { ?>

                            <?php dynamic_sidebar('widget-two-footer'); ?>
                        <?php } ?>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div>
                    <div class="text-start mt-5">
                        <?php if ( is_active_sidebar( 'widget-three-footer-title' ) ) { ?>

                            <?php dynamic_sidebar('widget-three-footer-title'); ?>
                        <?php } ?>
                    </div>
                    <div class="d-flex align-items-start justify-content-start">
                                <span class="underline">

                                </span>
                    </div>
                    <div class="m-0">

                        <div class="mt-3">
                            <?php if ( is_active_sidebar( 'widget-three-footer-icon1' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-icon1'); ?>
                            <?php } ?>

                            <?php if ( is_active_sidebar( 'widget-three-footer-content1' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-content1'); ?>
                            <?php } ?>
                        </div>

                        <div class="mt-3">
                            <?php if ( is_active_sidebar( 'widget-three-footer-icon2' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-icon2'); ?>
                            <?php } ?>

                            <?php if ( is_active_sidebar( 'widget-three-footer-content2' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-content2'); ?>
                            <?php } ?>
                        </div>

                        <div class="mt-3">
                            <?php if ( is_active_sidebar( 'widget-three-footer-icon3' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-icon3'); ?>
                            <?php } ?>

                            <?php if ( is_active_sidebar( 'widget-three-footer-content3' ) ) { ?>

                                <?php dynamic_sidebar('widget-three-footer-content3'); ?>
                            <?php } ?>
                        </div>



                        <!--<div class="mt-3">
                            <svg width="26" height="20" viewBox="0 0 26 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M2.26668 20C1.73334 20 1.27779 19.8111 0.90001 19.4333C0.522232 19.0556 0.333344 18.6 0.333344 18.0667V1.93333C0.333344 1.4 0.522232 0.944445 0.90001 0.566667C1.27779 0.188889 1.73334 0 2.26668 0H23.7333C24.2667 0 24.7222 0.188889 25.1 0.566667C25.4778 0.944445 25.6667 1.4 25.6667 1.93333V18.0667C25.6667 18.6 25.4778 19.0556 25.1 19.4333C24.7222 19.8111 24.2667 20 23.7333 20H2.26668ZM13 10.2L1.83334 2.83333V18.0667C1.83334 18.2 1.87223 18.3056 1.95001 18.3833C2.02779 18.4611 2.13334 18.5 2.26668 18.5H23.7333C23.8667 18.5 23.9722 18.4611 24.05 18.3833C24.1278 18.3056 24.1667 18.2 24.1667 18.0667V2.83333L13 10.2ZM13 8.6L23.8667 1.5H2.16668L13 8.6ZM1.83334 2.83333V1.5V18.0667C1.83334 18.2 1.87223 18.3056 1.95001 18.3833C2.02779 18.4611 2.13334 18.5 2.26668 18.5H1.83334V18.0667V2.83333Z" fill="#17B3F2"/>
                            </svg>
                            <a href="tel:" class="text-decoration-none text-dark">۰۲۱۸۶۰۸۶۹۰۶</a>
                        </div>-->


                    </div>
                </div>
            </div>
            <div class="col-md-3 mt-4">
                <div class="d-flex align-items-center justify-content-center">
                    <?php if ( is_active_sidebar( 'widget-foure-footer-logo' ) ) { ?>

                        <?php dynamic_sidebar('widget-foure-footer-logo'); ?>
                    <?php } ?>

                </div>
                <div class="d-flex align-items-center justify-content-center mt-3">
                    <h3 class="footer-title">۱.۲.۳ اپلای</h3>
                </div>
                <div class="footer-socials">
                    <?php if ( is_active_sidebar( 'widget-foure-footer-socials' ) ) { ?>

                        <?php dynamic_sidebar('widget-foure-footer-socials'); ?>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</footer><!-- #colophon -->
<div class="under-footer py-3">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span>کلیه حقوق این سایت متعلق به ۱.۲.۳ اپلای می باشد</span>
            </div>
            <div class="col-md-6 d-flex align-items-center justify-content-center align-items-md-end justify-content-md-end">
                <span class="d-inline">طراحی سایت توسط </span>
                <a href="#"><img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/web24.png' ?>" alt=""></a>
            </div>
        </div>
    </div>
</div>
</div><!-- #page -->

<?php wp_footer(); ?>

<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>

</body>
</html>
