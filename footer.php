<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dream_Agency
 */

$footer = get_field('footer-section', 'option');

?>



<section class="last-section">
    <div class="last-container">
        <div class="last-container-text">
            <h7 class="last-tittle"><?php echo $footer['footer_title']; ?></h7>
            <p class="last-description">
                <?php echo $footer['footer_description']; ?>
            </p>
            <p class="touch"><?php echo $footer['get_in_touch']; ?></p>
            <form class="email-form" action="#">
                <input id="email" type="email" placeholder="ENTER YOUR EMAIL" required />
                <button class="btn-last"><?php echo $footer['footer_button']; ?></button>
            </form>
        </div>

        <div class="last-container-image">
            <img class="map"  src="<?php echo $footer['footer_image']?>"  />
        </div>
    </div>
</section>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
