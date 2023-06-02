<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dream_Agency
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    <script
            src="https://kit.fontawesome.com/c51b07e54f.js"
            crossorigin="anonymous"
    ></script>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
            href="https://fonts.googleapis.com/css2?family=Hind+Vadodara:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap"
            rel="stylesheet"
    />
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">

    <header class="header">
        <nav class="main-nav">
<!--        <ul class="main-nav-list">-->
<!--                <li><a class="main-nav-link active" href="index.html">Home</a></li>-->
<!--                <li><a class="main-nav-link" href="#">About Us</a></li>-->
<!--                <li><a class="main-nav-link" href="#">Services</a></li>-->
<!--                <li><a class="main-nav-link" href="#">Contact Us</a></li>-->
<!--            </ul>-->
            <?php
            wp_nav_menu(

                array(

                    'theme_location' => 'menu-1',



                    'menu_class' => "main-nav-list",

                )

            );
            ?>
        </nav>
        <div class="logo">
            <a class="logoAgency" href="index.html"><?php echo get_field('logo_dream_agency','option');?></a>
        </div>

        <div class="icons">
            <?php if( have_rows('social_media_links','option') ):
            while( have_rows('social_media_links','option') ) : the_row();
            $url = get_sub_field('social_link');
            $icon = get_sub_field('icon_image');
            ?>
            <a href="<?php echo $url ?>" >
            <img src="<?php echo $icon ?>"/>
            </a>
<!--            <i class="fa-brands fa-facebook-f" ></i>-->
<!--            <i class="fa-brands fa-linkedin-in" ></i>-->
<!--            <i class="fa-brands fa-instagram"></i>-->
            <?php
            endwhile;
            endif;
            ?>
        </div>
    </header>
