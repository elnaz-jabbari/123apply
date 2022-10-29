<?php
/**
 * The main template file
 * Template Name: home *
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package apply
 */

get_header();
?>

    <div class="slider-section">
        <div class="swiper mySwiper1 p-0">
            <div class="swiper-wrapper ">
                <div class="swiper-slide">
                    <?php

                    $slideimage1 = get_field( 'slider_img_1' );

                    if ( ! empty( $slideimage1 ) ) :

                        echo "<img src='$slideimage1'>";

                    endif;
                    ?>
                </div>
                <div class="swiper-slide">
                    <?php

                    $slideimage2 = get_field( 'slider_img_2' );

                    if ( ! empty( $slideimage2 ) ) :

                        echo "<img src='$slideimage2'>";

                    endif;
                    ?>
                </div>
                <div class="swiper-slide">
                    <?php

                    $slideimage3 = get_field( 'slider_img_3' );

                    if ( ! empty( $slideimage3 ) ) :

                        echo "<img src='$slideimage3'>";

                    endif;
                    ?>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>

    <div class="container mt-5">
        <div class="row">
            <section>
                <h3 class="text-center text-black apply-text boder-bottom">۱،۲،۳ اپلای کن</h3>
                <div class=" d-flex align-items-center justify-content-center">
					<span class="underline">

					</span>
                </div>
            </section>
            <section class="d-none d-md-block mt-4">
                <p class="text-center apply-under-text">ما با ۱۳ سال سابقه تخصصی به هزاران متقاضی مهاجرت کمک کرده‌ایم</p>
            </section>
        </div>
    </div>

    <div class="container mt-5 mt-md-3">
        <div class="row">
            <div class="col-12 col-md-4 h-maxcontent p-4 p-md-0">
                <div class="Counseling-section Counseling-section1 p-3 position-relative">
                    <h2 class="Counseling-title"><?php echo get_field('title_section_1'); ?></h2>

                    <div class="bg-4 Counseling-icon">

                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Vector1.png' ?>" alt="">

                        <!--<i class="icon-Support"></i>-->
                    </div>
                    <div class="Counseling-exp">
                        <p class="Counseling-exp"><?php echo get_field('exp_section_1');?></p>
                    </div>


                </div>

                <div class="Counseling-section Counseling-section2 p-3 position-relative mt-5">
                    <h2 class="Counseling-title"><?php echo get_field('title_section_2'); ?></h2>

                    <div class="bg-5 Counseling-icon">

                        <!-- <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.625 28.208V26.791H25.917C26.1943 26.791 26.4303 26.694 26.625 26.5C26.8197 26.3053 26.917 26.069 26.917 25.791V13.291C26.917 11.6803 26.5973 10.1597 25.958 8.729C25.3193 7.29833 24.4583 6.04133 23.375 4.958C22.2917 3.87467 21.0277 3.01367 19.583 2.375C18.139 1.73567 16.6113 1.416 15 1.416C13.3887 1.416 11.861 1.73567 10.417 2.375C8.97233 3.01367 7.70833 3.87467 6.625 4.958C5.54167 6.04133 4.68067 7.29833 4.042 8.729C3.40267 10.1597 3.083 11.6803 3.083 13.291V23.333H2.5C1.80533 23.333 1.215 23.09 0.729 22.604C0.243 22.118 0 21.5277 0 20.833V17.5C0 17.0273 0.152667 16.5897 0.458 16.187C0.764 15.7843 1.167 15.4303 1.667 15.125L1.708 12.916C1.764 11.1107 2.153 9.42333 2.875 7.854C3.597 6.28467 4.56233 4.91667 5.771 3.75C6.979 2.58333 8.37467 1.66667 9.958 1C11.5413 0.333333 13.222 0 15 0C16.778 0 18.4653 0.326333 20.062 0.979C21.6593 1.63167 23.0553 2.54133 24.25 3.708C25.4447 4.87467 26.403 6.24267 27.125 7.812C27.847 9.38133 28.236 11.0827 28.292 12.916L28.333 15.041C28.833 15.291 29.236 15.6107 29.542 16C29.8473 16.3887 30 16.8053 30 17.25V21.083C30 21.5277 29.8473 21.9443 29.542 22.333C29.236 22.7217 28.833 23.041 28.333 23.291V25.791C28.333 26.4303 28.09 26.993 27.604 27.479C27.118 27.965 26.5557 28.208 25.917 28.208H14.625ZM10.625 16.666C10.3197 16.666 10.0557 16.548 9.833 16.312C9.611 16.076 9.5 15.8053 9.5 15.5C9.5 15.194 9.611 14.93 9.833 14.708C10.0557 14.486 10.3337 14.375 10.667 14.375C10.9723 14.375 11.236 14.486 11.458 14.708C11.6807 14.93 11.792 15.194 11.792 15.5C11.792 15.8053 11.674 16.076 11.438 16.312C11.2013 16.548 10.9303 16.666 10.625 16.666ZM19.375 16.666C19.0697 16.666 18.7987 16.548 18.562 16.312C18.326 16.076 18.208 15.8053 18.208 15.5C18.208 15.194 18.326 14.93 18.562 14.708C18.7987 14.486 19.0697 14.375 19.375 14.375C19.6803 14.375 19.9443 14.486 20.167 14.708C20.389 14.93 20.5 15.194 20.5 15.5C20.5 15.8053 20.389 16.076 20.167 16.312C19.9443 16.548 19.6803 16.666 19.375 16.666ZM6.208 14C6.09733 12.5553 6.292 11.2357 6.792 10.041C7.292 8.847 7.96533 7.84033 8.812 7.021C9.65933 6.201 10.6387 5.569 11.75 5.125C12.8613 4.68033 13.9723 4.458 15.083 4.458C17.3057 4.458 19.2153 5.16633 20.812 6.583C22.4093 7.99967 23.3747 9.76367 23.708 11.875C21.4027 11.847 19.3403 11.222 17.521 10C15.7017 8.77733 14.3057 7.20767 13.333 5.291C12.9443 7.26367 12.111 9.02067 10.833 10.562C9.55567 12.104 8.014 13.25 6.208 14Z" fill="black"/>
                        </svg> -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Vector2.png' ?>" alt="">

                    </div>
                    <div class="Counseling-exp">
                        <p class="Counseling-exp"><?php echo get_field('exp_section_2');?></p>
                    </div>

                </div>
            </div>
            <div class="col-md-4 d-none d-md-block px-4">
                <div class="position-relative">

                    <?php

                    $image = get_field( 'img_section' );

                    if ( ! empty( $image ) ) :

                        echo "<img src='$image'>";

                    endif;
                    ?>
                    <p class="counseling-slogan position-absolute bg-white rounded-5 p-2">
                        به سادگی یک، دو، سه
                    </p>
                </div>

            </div>
            <div class="col-md-4 p-4 p-md-0">

                <div class="Counseling-section Counseling-section3 p-3 position-relative">
                    <h2 class="Counseling-title"><?php echo get_field('title_section_3'); ?></h2>

                    <div class="bg-6 Counseling-icon">

                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Vector2.png' ?>" alt="">

                    </div>
                    <div class="Counseling-exp">
                        <p class="Counseling-exp"><?php echo get_field('exp_section_3');?></p>
                    </div>

                </div>

                <div class="Counseling-section Counseling-section4 p-3 position-relative mt-5">
                    <h2 class="Counseling-title"><?php echo get_field('title_section_4'); ?></h2>

                    <div class="bg-7 Counseling-icon">

                        <!-- <svg width="30" height="29" viewBox="0 0 30 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M14.625 28.208V26.791H25.917C26.1943 26.791 26.4303 26.694 26.625 26.5C26.8197 26.3053 26.917 26.069 26.917 25.791V13.291C26.917 11.6803 26.5973 10.1597 25.958 8.729C25.3193 7.29833 24.4583 6.04133 23.375 4.958C22.2917 3.87467 21.0277 3.01367 19.583 2.375C18.139 1.73567 16.6113 1.416 15 1.416C13.3887 1.416 11.861 1.73567 10.417 2.375C8.97233 3.01367 7.70833 3.87467 6.625 4.958C5.54167 6.04133 4.68067 7.29833 4.042 8.729C3.40267 10.1597 3.083 11.6803 3.083 13.291V23.333H2.5C1.80533 23.333 1.215 23.09 0.729 22.604C0.243 22.118 0 21.5277 0 20.833V17.5C0 17.0273 0.152667 16.5897 0.458 16.187C0.764 15.7843 1.167 15.4303 1.667 15.125L1.708 12.916C1.764 11.1107 2.153 9.42333 2.875 7.854C3.597 6.28467 4.56233 4.91667 5.771 3.75C6.979 2.58333 8.37467 1.66667 9.958 1C11.5413 0.333333 13.222 0 15 0C16.778 0 18.4653 0.326333 20.062 0.979C21.6593 1.63167 23.0553 2.54133 24.25 3.708C25.4447 4.87467 26.403 6.24267 27.125 7.812C27.847 9.38133 28.236 11.0827 28.292 12.916L28.333 15.041C28.833 15.291 29.236 15.6107 29.542 16C29.8473 16.3887 30 16.8053 30 17.25V21.083C30 21.5277 29.8473 21.9443 29.542 22.333C29.236 22.7217 28.833 23.041 28.333 23.291V25.791C28.333 26.4303 28.09 26.993 27.604 27.479C27.118 27.965 26.5557 28.208 25.917 28.208H14.625ZM10.625 16.666C10.3197 16.666 10.0557 16.548 9.833 16.312C9.611 16.076 9.5 15.8053 9.5 15.5C9.5 15.194 9.611 14.93 9.833 14.708C10.0557 14.486 10.3337 14.375 10.667 14.375C10.9723 14.375 11.236 14.486 11.458 14.708C11.6807 14.93 11.792 15.194 11.792 15.5C11.792 15.8053 11.674 16.076 11.438 16.312C11.2013 16.548 10.9303 16.666 10.625 16.666ZM19.375 16.666C19.0697 16.666 18.7987 16.548 18.562 16.312C18.326 16.076 18.208 15.8053 18.208 15.5C18.208 15.194 18.326 14.93 18.562 14.708C18.7987 14.486 19.0697 14.375 19.375 14.375C19.6803 14.375 19.9443 14.486 20.167 14.708C20.389 14.93 20.5 15.194 20.5 15.5C20.5 15.8053 20.389 16.076 20.167 16.312C19.9443 16.548 19.6803 16.666 19.375 16.666ZM6.208 14C6.09733 12.5553 6.292 11.2357 6.792 10.041C7.292 8.847 7.96533 7.84033 8.812 7.021C9.65933 6.201 10.6387 5.569 11.75 5.125C12.8613 4.68033 13.9723 4.458 15.083 4.458C17.3057 4.458 19.2153 5.16633 20.812 6.583C22.4093 7.99967 23.3747 9.76367 23.708 11.875C21.4027 11.847 19.3403 11.222 17.521 10C15.7017 8.77733 14.3057 7.20767 13.333 5.291C12.9443 7.26367 12.111 9.02067 10.833 10.562C9.55567 12.104 8.014 13.25 6.208 14Z" fill="black"/>
                        </svg> -->
                        <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/Vector2.png' ?>" alt="">

                    </div>
                    <div class="Counseling-exp">
                        <p class="Counseling-exp"><?php echo get_field('exp_section_4');?></p>
                    </div>

                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <section class="d-flex align-items-center justify-content-center mt-4">
                    <?php $link_url =get_field('link_url');?>
                    <a href="<?= $link_url  ?>" class="counseling-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                        درخواست وقت مشاوره
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="black"/>
                        </svg>
                    </a>
                </section>
            </div>
        </div>
    </div>



    <div class="academic-admission py-5 my-5">
        <div class="container">
            <div class="row">
                <div class="mb-4">
                    <h3 class="text-center text-dark admission-title">پذیرش تحصیلی ، مهاجرت تحصیلی</h3>
                    <div class="d-flex align-items-center justify-content-center">
					<span class="underline">

					</span>
                    </div>

                    <p class="admission-text text-center d-none d-md-block mt-3">صرف نظر از سود و زیان مالی، ما مسیر مهاجرتی درست و مناسب را پیشنهاد می‌دهیم و با پشتوانه تیم بیش از ۱۰۰ نیروی متعهد، به مهاجرین خدمت می‌کنیم.</p>

                </div>

                <div class="admission-main d-flex align-items-center justify-content-center">










                    <div class="swiper mySwiper2 position-relative">
                        <div class="swiper-wrapper">
                            <?php
                            $args1 = array(
                                'post_type'      => 'education',
                                'posts_per_page' => 5,
                                'orderby'        => 'id',
                            );
                            $loop  = new WP_Query( $args1 );
                            while ( $loop->have_posts() ) :
                                $loop->the_post();
                                ?>
                                <div class="swiper-slide admission-section card ">

                                    <img class="admission-section-image" src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" class="card-img-top" alt="...">
                                    <div class="card-body position-relative">
                                        <?php

                                        $image1 = get_field( 'education-icon' );

                                        if ( ! empty( $image1 ) ) :

                                            echo "<img class='position-absolute admission-section-icon' src='$image1'>";

                                        endif;
                                        ?>
                                        <h2 class="card-title admission-section-title text-center"><a class="text-dark text-decoration-none" href="<?= get_permalink() ?>"><?php echo  the_title();?></a></h2>
                                        <div class="d-flex align-items-center justify-content-center">
                                <span class="underline">

                                </span>
                                        </div>
                                        <p class="admission-section-exp card-text mt-3"><?php the_content();?></p>
                                        <a href="#" class="d-none admission-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                                            اطلاعات بیشتر

                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                            </svg>

                                        </a>
                                    </div>
                                </div>

                            <?php
                            endwhile;
                            wp_reset_postdata();
                            ?>


                            <!--<div class="swiper-slide admission-section card ">
                                    <img class="admission-section-image" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada.png' */?>" class="card-img-top" alt="...">
                                    <div class="card-body position-relative">
                                        <img class="position-absolute admission-section-icon" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-icon.png' */?>" alt="">
                                        <h2 class="card-title admission-section-title text-center"> پذیرش تحصیلی کانادا</h2>
                                        <div class="d-flex align-items-center justify-content-center">
                                <span class="underline">

                                </span>
                                        </div>
                                        <p class="admission-section-exp card-text mt-3">آمار قبولی ویزای تحصیلی کانادا در شرکت در سال‌های اخیر ۹۰٪ بوده است. یعنی از هر ۱۰ متقاضی که با شرکت همکاری داشته‌اند، ۹ متقاضی در بار اول ویزای تحصیلی کانادا را دریافت کرده‌اند.</p>
                                        <a href="#" class="d-none admission-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                                            اطلاعات بیشتر

                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            <div class="swiper-slide admission-section card ">

                                    <img class="admission-section-image" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada.png' */?>" class="card-img-top" alt="...">
                                    <div class="card-body position-relative">
                                        <img class="position-absolute admission-section-icon" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-icon.png' */?>" alt="">
                                        <h2 class="card-title admission-section-title text-center"> پذیرش تحصیلی کانادا</h2>
                                        <div class="d-flex align-items-center justify-content-center">
                                <span class="underline">

                                </span>
                                        </div>
                                        <p class="admission-section-exp card-text mt-3">آمار قبولی ویزای تحصیلی کانادا در شرکت در سال‌های اخیر ۹۰٪ بوده است. یعنی از هر ۱۰ متقاضی که با شرکت همکاری داشته‌اند، ۹ متقاضی در بار اول ویزای تحصیلی کانادا را دریافت کرده‌اند.</p>
                                        <a href="#" class="d-none admission-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                                            اطلاعات بیشتر

                                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                            </svg>

                                        </a>
                                    </div>
                                </div>
                            <div class="swiper-slide admission-section card ">

                                <img class="admission-section-image" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada.png' */?>" class="card-img-top" alt="...">
                                <div class="card-body position-relative">
                                    <img class="position-absolute admission-section-icon" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-icon.png' */?>" alt="">
                                    <h2 class="card-title admission-section-title text-center"> پذیرش تحصیلی کانادا</h2>
                                    <div class="d-flex align-items-center justify-content-center">
                                <span class="underline">

                                </span>
                                    </div>
                                    <p class="admission-section-exp card-text mt-3">آمار قبولی ویزای تحصیلی کانادا در شرکت در سال‌های اخیر ۹۰٪ بوده است. یعنی از هر ۱۰ متقاضی که با شرکت همکاری داشته‌اند، ۹ متقاضی در بار اول ویزای تحصیلی کانادا را دریافت کرده‌اند.</p>
                                    <a href="#" class="d-none admission-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                                        اطلاعات بیشتر

                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                        </svg>

                                    </a>
                                </div>
                            </div>
                            <div class="swiper-slide admission-section card ">

                                <img class="admission-section-image" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada.png' */?>" class="card-img-top" alt="...">
                                <div class="card-body position-relative">
                                    <img class="position-absolute admission-section-icon" src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-icon.png' */?>" alt="">
                                    <h2 class="card-title admission-section-title text-center"> پذیرش تحصیلی کانادا</h2>
                                    <div class="d-flex align-items-center justify-content-center">
                                <span class="underline">

                                </span>
                                    </div>
                                    <p class="admission-section-exp card-text mt-3">آمار قبولی ویزای تحصیلی کانادا در شرکت در سال‌های اخیر ۹۰٪ بوده است. یعنی از هر ۱۰ متقاضی که با شرکت همکاری داشته‌اند، ۹ متقاضی در بار اول ویزای تحصیلی کانادا را دریافت کرده‌اند.</p>
                                    <a href="#" class="d-none admission-btn bg-2 text-decoration-none rounded-pill px-3 py-2 text-dark">

                                        اطلاعات بیشتر

                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                        </svg>

                                    </a>
                                </div>
                            </div>-->
                        </div>
                        <div class="swiper-button-next d-none d-md-block"></div>
                        <div class="swiper-button-prev d-none d-md-block"></div>
                        <div class="swiper-pagination d-md-none"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="container migration-main">
        <div class="row">
            <div class="col-md-8">
                <div class="swiper mySwiper" dir="ltr">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <?php

                            $image9 = get_field( 'slider_image1' );

                            if ( ! empty( $image9 ) ) :

                                echo "<img class='' src='$image9'>";

                            endif;
                            ?>
                        </div>
                        <div class="swiper-slide">
                            <?php

                            $image10 = get_field( 'slider_image2' );

                            if ( ! empty( $image10 ) ) :

                                echo "<img class='' src='$image10'>";

                            endif;
                            ?>
                        </div>
                        <div class="swiper-slide">
                            <?php

                            $image11 = get_field( 'slider_image3' );

                            if ( ! empty( $image11 ) ) :

                                echo "<img class='' src='$image11'>";

                            endif;
                            ?>
                        </div>
                        <!--<div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-7.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-8.jpg" />
                        </div>
                        <div class="swiper-slide">
                            <img src="https://swiperjs.com/demos/images/nature-9.jpg" />
                        </div>-->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="mb-4">
                    <h3 class="text-start text-dark admission-title mt-3 mt-md-0"><?php echo get_field('title_section');?></h3>
                    <div class="d-flex align-items-start justify-content-start">
					<span class="underline">

					</span>
                    </div>

                    <p class="admission-text text-start mt-3"><?php echo get_field("exp_section");?></p>
                    <div class="my-5">
                        <?php $link_url1 =get_field('link_section');?>

                        <a href="<?= $link_url1 ?>" class="trust-btn text-decoration-none rounded-pill px-3 py-2 text-dark">

                            اطلاعات بیشتر

                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                            </svg>

                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="trust-main">
        <div class="container">
            <div class="row py-5">
                <div class="col-12 col-md-7 p-4">
                    <div class="my-4">

                        <h3 class="trust-title text-white text-center text-md-start"><?php echo get_field("section_title");?></h3>
                        <div class="d-flex align-items-md-center justify-content-center align-items-md-start justify-content-md-start">
					<span class="underline">

					</span>
                        </div>
                    </div>

                    <div class="text-white trust-exp p-3"><?php echo get_field("section_exp");?></div>

                    <div class="my-4">
                        <?php $link_url4 =get_field('section_link');?>
                        <a href="<?= $link_url4 ?>" class="trust-btn text-decoration-none rounded-pill px-3 py-2 text-dark">

                            اطلاعات بیشتر

                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                            </svg>

                        </a>
                    </div>


                </div>
                <div class="col-md-5 p-4">
                    <?php

                    $image8 = get_field( 'image_section' );

                    if ( ! empty( $image8 ) ) :

                        echo "<img class='d-none d-md-block' src='$image8'>";

                    endif;
                    ?>
                </div>
            </div>
        </div>
    </div>

    <div class="container py-5">
        <div class="row py-5">
            <h3 class="text-center text-dark admission-title">موکلین ما چه نظری دارند؟</h3>
            <div class="d-flex align-items-center justify-content-center">
					<span class="underline">

					</span>
            </div>

            <p class="comments-section-exp text-center d-none d-md-block mt-3">صرف نظر از سود و زیان مالی، ما مسیر مهاجرتی درست و مناسب را پیشنهاد می‌دهیم و با پشتوانه تیم بیش از ۱۰۰ نیروی متعهد، به مهاجرین خدمت می‌کنیم.</p>
        </div>

        <div class="lawyer-slider">
            <div class="swiper mySwiper3">
                <div class="swiper-wrapper">
                    <?php
                    $args1 = array(
                        'post_type'      => 'lawyers',
                        'posts_per_page' => 5,
                        'orderby'        => 'id',
                    );
                    $loop  = new WP_Query( $args1 );
                    while ( $loop->have_posts() ) :
                        $loop->the_post();
                        ?>
                        <div class="swiper-slide comments-section position-relative">
                            <div class="position-absolute comments-user-img">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full'));?>" alt="">
                            </div>
                            <div class="comments-user text-center">
                                <span class="text-center fw-bold text-dark"><a class="text-dark text-decoration-none" href="<?= get_permalink() ?>"><?php the_title();?></a></span>
                            </div>
                            <div class="text-center py-2">

                                <svg width="17" height="16" viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M9.68048 15.1024V12.2656C9.68048 11.8809 9.99235 11.5692 10.3771 11.5692C11.7497 11.5692 12.4964 10.1613 12.5999 7.38264H10.3771C9.99235 7.38264 9.68048 7.07062 9.68048 6.68604V0.696364C9.68048 0.311831 9.99235 5.62668e-05 10.3771 5.62668e-05H16.3035C16.6884 5.62668e-05 17 0.312076 17 0.696364V6.68604C17 8.01807 16.8659 9.24044 16.6015 10.3196C16.3303 11.4261 15.9141 12.3935 15.3647 13.1952C14.7994 14.019 14.0923 14.6655 13.2628 15.1159C12.4278 15.569 11.4567 15.7988 10.3768 15.7988C9.99235 15.7988 9.68048 15.4871 9.68048 15.1024ZM0.69665 11.5691C0.312117 11.5691 0 11.8811 0 12.2656V15.1023C0 15.4871 0.312067 15.7988 0.69665 15.7988C1.77608 15.7988 2.7473 15.5689 3.58206 15.1159C4.41166 14.6655 5.11917 14.019 5.68457 13.1951C6.23376 12.3935 6.65 11.426 6.9212 10.3192C7.18545 9.23976 7.31957 8.01739 7.31957 6.68599V0.696316C7.31957 0.311783 7.0076 6.67572e-06 6.62297 6.67572e-06H0.696697C0.312164 6.67572e-06 0.000339508 0.312026 0.000339508 0.696316V6.68604C0.000339508 7.07057 0.312117 7.38264 0.696697 7.38264H2.8878C2.78587 10.1613 2.05011 11.5691 0.69665 11.5691Z" fill="#17B3F2"/>
                                </svg>

                            </div>
                            <div class="px-4">
                                <p class="comments-exp">“من تقریبا دو سال پیش کارم رو با مجموعه ۱.۲.۳اپلای شروع کردم. دو بار برای ویزا اقدام کردم و هر دو بار ریجکت شدم. پرونده رو بردیم کورت و در کورت پرونده ستل شد و ظرف چند روز جواب مثبت ویزا اومد و کارمون با موفقیت انجام شد. تشکر می‌کنم از تیم تخصصی</p>
                            </div>

                        </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>

    </div>

    <div class="container">
        <div class="row my-5">
            <div class="col-md-5 d-flex align-items-center justify-content-center px-0">
                <div class="lawyer-exp-section my-4 p-4 mx-4 mx-md-0">
                    <h3 class="text-start text-dark admission-title"><?php echo get_field("section_title1");?></h3>
                    <div class="d-flex align-items-start justify-content-start">
					<span class="underline">

					</span>
                    </div>

                    <div class="admission-text text-center mt-3"><?php echo get_field('exp_part'); ?></div>

                </div>
            </div>
            <div class="col-md-7 p-md-0 px-3">
                <div class="lawyer-img position-relative mx-2 mx-md-0">
                    <?php

                    $image20 = get_field( 'img_section1' );

                    if ( ! empty( $image20 ) ) :

                        echo "<img class='' src='$image20'>";

                    endif;
                    ?>

                    <div class="lawyer-img-icon p-2 bg-white position-absolute top-50 start-50 rounded-circle">


                        <!-- Button trigger modal -->
                        <div type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            <svg width="72" height="72" viewBox="0 0 72 72" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M28.2646 49.5125L49.5125 36L28.2646 22.4875V49.5125ZM36 71.25C31.1694 71.25 26.6163 70.3198 22.3406 68.4594C18.0649 66.599 14.3278 64.0694 11.1292 60.8708C7.93056 57.6722 5.40104 53.9514 3.54063 49.7083C1.68021 45.4653 0.75 40.8958 0.75 36C0.75 31.1042 1.68021 26.5184 3.54063 22.2427C5.40104 17.967 7.93056 14.2462 11.1292 11.0802C14.3278 7.91424 18.0486 5.40104 22.2917 3.54063C26.5347 1.68021 31.1042 0.75 36 0.75C40.8958 0.75 45.4816 1.68021 49.7573 3.54063C54.033 5.40104 57.7538 7.91424 60.9198 11.0802C64.0858 14.2462 66.599 17.967 68.4594 22.2427C70.3198 26.5184 71.25 31.1042 71.25 36C71.25 40.8306 70.3198 45.3837 68.4594 49.6594C66.599 53.9351 64.0858 57.6722 60.9198 60.8708C57.7538 64.0694 54.033 66.599 49.7573 68.4594C45.4816 70.3198 40.8958 71.25 36 71.25ZM36 68.2146C44.9431 68.2146 52.5479 65.0813 58.8146 58.8146C65.0813 52.5479 68.2146 44.9431 68.2146 36C68.2146 27.0569 65.0813 19.4521 58.8146 13.1854C52.5479 6.91875 44.9431 3.78542 36 3.78542C27.0569 3.78542 19.4521 6.91875 13.1854 13.1854C6.91875 19.4521 3.78542 27.0569 3.78542 36C3.78542 44.9431 6.91875 52.5479 13.1854 58.8146C19.4521 65.0813 27.0569 68.2146 36 68.2146Z" fill="#17B3F2"/>
                            </svg>
                        </div>

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="solution-video">
                                            <?php
                                            $file = get_field('video');
                                            if ($file): ?>
                                                <video controls class="w-100">
                                                    <source src="<?php echo $file; ?>" type="video/mp4">
                                                </video>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

    <div class="blog-section-main">
        <div class="container">
            <div class="row">
                <div class="my-4">
                    <h3 class="text-center text-dark admission-title">بلاگ</h3>
                    <div class="d-flex align-items-center justify-content-center">
					<span class="underline">

					</span>
                    </div>

                    <p class="admission-text text-center d-none d-md-block mt-3">آخرین اخبار مهاجرت و تحصیلی را با شما به اشتراک میگذاریم</p>

                </div>
            </div>


            <div class="row gy-4">
                <?php
                $query = array(
                    "post_type" => "post",
                    "order_by" => "rand"
                );
                if(wp_is_mobile()){
                    $query['posts_per_page']=3;
                }else{
                    $query['posts_per_page']=6;
                }
                $loop = new WP_Query($query);
                if ($loop->have_posts()) : while ($loop->have_posts()) : $loop->the_post();
                    ?>

                    <div class="col-md-4">
                        <div class="blog-section d-flex bg-white align-items-center justify-content-center">
                            <div class="blog-section-img">
                                <img src="<?php echo esc_url(get_the_post_thumbnail_url(null, 'full')); ?>" alt="">
                            </div>

                            <a class="text-dark text-decoration-none" href="<?= get_permalink() ?>"><h2 class="blog-section-title px-3"><?php the_title(); ?></h2></a>

                        </div>
                    </div>


                <?php

                endwhile;
                endif;
                ?>


                <!--<div class="col-md-4">
                    <div class="blog-section d-flex bg-white align-items-center justify-content-center">
                        <div class="blog-section-img">
                            <img src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-blog.png'*/?>" alt="">
                        </div>

                            <h2 class="blog-section-title px-3">اداره مهاجرت آزمون جدید زبان برای مهاجرت به کانادا را تایید کرد</h2>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-section d-flex bg-white align-items-center justify-content-center">
                        <div class="blog-section-img">
                            <img src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-blog.png'*/?>" alt="">
                        </div>

                        <h2 class="blog-section-title px-3">اداره مهاجرت آزمون جدید زبان برای مهاجرت به کانادا را تایید کرد</h2>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-section d-flex bg-white align-items-center justify-content-center">
                        <div class="blog-section-img position-relative">
                            <img src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-blog.png'*/?>" alt="">
                            <div class="blog-hover-icon d-none">

                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                </svg>

                            </div>
                        </div>

                        <h2 class="blog-section-title px-3">اداره مهاجرت آزمون جدید زبان برای مهاجرت به کانادا را تایید کرد</h2>

                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-section d-flex bg-white align-items-center justify-content-center">
                        <div class="blog-section-img position-relative">
                            <img src="<?php /*echo get_stylesheet_directory_uri() . '/assets/images/canada-blog.png'*/?>" alt="">
                            <div class="blog-hover-icon d-none">

                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                                </svg>

                            </div>
                        </div>

                        <h2 class="blog-section-title px-3">اداره مهاجرت آزمون جدید زبان برای مهاجرت به کانادا را تایید کرد</h2>

                    </div>
                </div>-->

            </div>

            <div class="d-flex align-items-center justify-content-center my-5">

                <a href="#" class="more-blog text-decoration-none rounded-pill px-3 py-2 text-dark">

                    ورود به بلاگ

                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M0 15C0 17.0833 0.396383 19.0347 1.18915 20.8542C1.98192 22.6736 3.05285 24.2569 4.40195 25.6042C5.75105 26.9514 7.33658 28.0208 9.15856 28.8125C10.9805 29.6042 12.9346 30 15.0209 30C18.4701 30 21.5299 28.9792 24.2003 26.9375C26.8707 24.8958 28.6648 22.1111 29.5828 18.5833H28.2476C27.3853 21.7222 25.7302 24.1944 23.2823 26C20.8345 27.8056 18.0807 28.7083 15.0209 28.7083C11.21 28.7083 7.9694 27.375 5.29902 24.7083C2.62865 22.0417 1.29346 18.8056 1.29346 15C1.29346 11.1944 2.62865 7.95833 5.29902 5.29167C7.9694 2.625 11.21 1.29167 15.0209 1.29167C18.0807 1.29167 20.8345 2.19444 23.2823 4C25.7302 5.80556 27.3853 8.27778 28.2476 11.4167H29.5828C28.6648 7.88889 26.8707 5.10417 24.2003 3.0625C21.5299 1.02083 18.4701 0 15.0209 0C12.9346 0 10.9805 0.395834 9.15856 1.1875C7.33658 1.97917 5.75105 3.04861 4.40195 4.39584C3.05285 5.74306 1.98192 7.32639 1.18915 9.14583C0.396383 10.9653 0 12.9167 0 15ZM9.80528 15L16.9819 22.1667L17.8999 21.25L12.267 15.625L30 15.625V14.375L12.267 14.375L17.8999 8.75L16.9819 7.83334L9.80528 15Z" fill="#00C853"/>
                    </svg>

                </a>
            </div>



        </div>
    </div>


<?php
// get_sidebar();
get_footer();
