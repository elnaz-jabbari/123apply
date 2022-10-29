<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package apply
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'apply' ); ?></a>

    <!--<div class="mobile-header mb-5 d-md-none">
        <nav class="nav-bar">
            <div class="toggle-menu">
                <div class="line line1"></div>
                <div class="line line2"></div>
                <div class="line line3"></div>
            </div>
            <div class="nav-list p-0 m-0">
                <div class="d-flex align-items-center justify-content-center">
                    <?php /*echo the_custom_logo();*/?>
                </div>
                <div class="mobile-search position-relative">
                    <input class="input-search w-100" type="text">
                    <svg class="position-absolute" width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.0407 20L11.4826 12.46C10.9012 12.9646 10.2277 13.3576 9.46221 13.639C8.69671 13.9204 7.89729 14.0611 7.06395 14.0611C5.08721 14.0611 3.4157 13.377 2.04942 12.0087C0.683139 10.6405 0 8.97622 0 7.01601C0 5.07521 0.683139 3.42067 2.04942 2.0524C3.4157 0.684134 5.07752 0 7.03488 0C8.99225 0 10.6541 0.684134 12.0203 2.0524C13.3866 3.42067 14.0698 5.07521 14.0698 7.01601C14.0698 7.83115 13.9293 8.62688 13.6483 9.4032C13.3672 10.1795 12.9651 10.8782 12.4419 11.4993L20 19.0393L19.0407 20ZM7.06395 12.7511C8.63372 12.7511 9.97093 12.1931 11.0756 11.0771C12.1802 9.96118 12.7326 8.60747 12.7326 7.01601C12.7326 5.42455 12.1802 4.07569 11.0756 2.96943C9.97093 1.86317 8.63372 1.31004 7.06395 1.31004C5.45543 1.31004 4.09884 1.86317 2.99419 2.96943C1.88953 4.07569 1.33721 5.42455 1.33721 7.01601C1.33721 8.60747 1.88953 9.96118 2.99419 11.0771C4.09884 12.1931 5.45543 12.7511 7.06395 12.7511Z" fill="#17B3F2"/>
                    </svg>
                </div>
                <div>
                    <?php
/*                    wp_nav_menu(
                        array(
                            'theme_location' => 'menu-1',
                            'menu_id'        => 'mainmenu',
                        )
                    );
                    */?>
                </div>
            </div>
        </nav>
    </div>-->

    <!--<nav role='navigation'>
        <div id="menuToggle">

            <input type="checkbox" />


            <span></span>
            <span></span>
            <span></span>


            <ul id="menu">
                <a href="#"><li>Home</li></a>
                <a href="#"><li>About</li></a>
                <a href="#"><li>Info</li></a>
                <a href="#"><li>Contact</li></a>
                <a href="https://erikterwan.com/" target="_blank"><li>Show me more</li></a>
            </ul>
        </div>
    </nav>-->

    <header id="masthead" class="site-header p-2">
        <!--	<div class="site-branding">


			<?php
        /*			the_custom_logo();
                    if ( is_front_page() && is_home() ) :
                        */?>
				<h1 class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></h1>
				<?php
        /*			else :
                        */?>
				<p class="site-title"><a href="<?php /*echo esc_url( home_url( '/' ) ); */?>" rel="home"><?php /*bloginfo( 'name' ); */?></a></p>
				<?php
        /*			endif;
                    $apply_description = get_bloginfo( 'description', 'display' );
                    if ( $apply_description || is_customize_preview() ) :
                        */?>
				<p class="site-description"><?php /*echo $apply_description; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped */?></p>
			<?php /*endif; */?>
		</div>--><!-- .site-branding -->


        <div class="mobile-header">
            <div class="container">
                <div class="row">
                    <div class="col-6">
                        <a href="#" class="btn toggle-menu">

                        </a>
                    </div>
                    <div class="col-6 d-flex align-items-end justify-content-end">
                        <a href="#" class="btn en-lang text-dark">
                            En
                        </a>
                        <a href="#" class="btn fa-lang text-dark ms-3">
                            Fa
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="desktop-header">
            <div class="container">
                <div class="row d-flex align-items-center justify-content-center">
                    <div class="col-md-2 col-3">
                        <div class="site-logo">
                            <?php echo the_custom_logo();?>
                        </div>

                    </div>
                    <div class="col-md-7 d-none d-md-block">
                        <nav id="site-navigation" class="main-navigation">
                            <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'apply' ); ?></button>
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'menu-1',
                                    'menu_id'        => 'primary-menu',
                                )
                            );
                            ?>
                        </nav><!-- #site-navigation -->
                    </div>
                    <div class="col-md-3 col-9 p-0">
                        <div class="d-flex align-items-center justify-content-center">
                            <div class="evaluation-btn">
                                <?php $link_url2 =get_field('link_button_1');?>
                                <a href="<?= $link_url2 ?>" class="btn text-dark"><?php echo get_field("text_btn_1");?></a>
                            </div>
                            <div class="counselingt-btn ms-2 ms-md-3">
                                <a href="" class="btn text-dark">درخواست وقت مشاوره</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </header><!-- #masthead -->



