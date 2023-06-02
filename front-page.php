<?php get_header();
$hero = get_field('hero_section');
$business = get_field('business_section');
$aboutus = get_field('about-section');
$recentwork = get_field('work-section');
$testimonials = get_field('testimonials');





?>
<section class="section-hero">
    <div class="hero">
        <div class="hero-text-box">
            <h1 class="heading-primary"><?php echo $hero['hero_title_one'] ; ?></h1>
            <h2><?php echo $hero['hero_title_two'] ; ?></h2>
            <h2 class="underline"><span><?php echo $hero['hero_title_three'] ; ?></span></h2>
            <p class="hero-description"><?php echo $hero['hero_description'] ; ?></p>
            <a href="#" class="btn"><?php echo $hero['hero_button']; ?></a>
        </div>
        <div class="hero-img-box">

            <img src="<?php echo esc_url( $hero['image_hero']['url']); ?>" />

        </div>
    </div>
</section>

<section class="section-business">
    <div class="bg-section-business"></div>
    <!-- <img src="images/Ellipse13.png" alt=""> -->
    <div class="business-text">
        <h3 class="heading-secondary"><?php echo $business['business_title_one']; ?></h3>
        <h4><?php echo $business['business_title_two']; ?><span class="underline"><?php echo $business['business_title_three']; ?></span></h4>
    </div>




    <div class="owl-carousel owl-theme owl-first nav-active">

        <?php
        $args = array(
            'post_type' => 'services',
            'posts_per_page' => -1
        );
        $query = new WP_Query( $args );
        if ($query->have_posts()) :
            while ($query->have_posts()) :
                $query->the_post(); ?>
        <a class= "clickable" href="<?php echo get_permalink() ?>">

        <div class="item">
                    <div class="card-content">
                        <div class="image">
                            <img src="<?php echo get_field('service_icon')?>" />
                        </div>
                        <h5 class="heading5"><?php echo get_the_title(); ?></h5>
                        <p class="p5">
                            <?php echo get_the_excerpt() ; ?>
                        </p>
                    </div>
                </div>
        </a>
           <?php  endwhile;
        endif;

        ?>
    </div>
    </div>
</section>


<!--        <div class="item">-->
<!--            <div class="card-content">-->
<!--                <div class="image">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/icon5.svg" />-->
<!--                </div>-->
<!--                <h5 class="heading5">--><?php //echo $business['textb1']; ?><!--</h5>-->
<!--                <p class="p5">-->
<!--                    --><?php //echo $business['textb2']; ?>
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!---->
<!--        <div class="item">-->
<!--            <div class="card-content">-->
<!--                <div class="image">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/icon6.svg" />-->
<!--                </div>-->
<!--                <h5 class="heading5">--><?php //echo $business['textc1']; ?><!--</h5>-->
<!--                <p class="p5">-->
<!--                    --><?php //echo $business['textc2']; ?>
<!--                </p>-->
<!--            </div>-->
<!--        </div>-->
<!--        <div class="item">-->
<!--            <div class="card-content">-->
<!--                <div class="image">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/icon7.svg" />-->
<!--                </div>-->
<!--                <h5 class="heading5">--><?php //echo $business['textd1']; ?><!--</h5>-->
<!--                <p class="p5">-->
<!--                    --><?php //echo $business['textd2']; ?>
<!--                </p>-->
<!--            </div>-->


<section class="section-aboutus">
    <div class="aboutus">
        <div class="aboutus-img-box">
            <img src="<?php echo esc_url( $aboutus['about_us_image']['url']); ?>" />

        </div>

        <div class="aboutus-text-box">
            <h3 class="heading-secondary"><?php echo $aboutus['about_title_one']; ?></h3>
            <h4><?php echo $aboutus['about_title_two']; ?><span class="underline"><?php echo $aboutus['about_title_three']; ?></span></h4>
            <p class="hero-description">
                <?php echo $aboutus['about_description_one']; ?><br />
                <br />
                <?php echo $aboutus['about_description_two']; ?>
            </p>
            <a href="#" class="btn"><?php echo $aboutus['about_button']; ?></a>
        </div>
    </div>
</section>

<section class="section-work">
    <div class="sectionworkup">
        <div class="bg-section-work"></div>
        <div class="work-text-box">
            <div class="work-title">
                <h3 class="heading-secondary"><?php echo $recentwork['work_title_one']; ?></h3>
                <h4><?php echo $recentwork['work_title_two']; ?> <span class="underline"><?php echo $recentwork['work_title_three']; ?></span></h4>
            </div>
        </div>
        <div class="work-p">
            <p class="work-text">
                <?php echo $recentwork['work_description']; ?>
            </p>
        </div>
    </div>













    <div class="carousel-second">
        <div class="owl-carousel owl-theme owl-second nav-active">

            <?php
            $args = array(
                'post_type' => 'recent_work',
                'posts_per_page' => -1
            );
            $query = new WP_Query( $args );
            if ($query->have_posts()) :
                while ($query->have_posts()) :
                    $query->the_post(); ?>
            <a class= "clickable" href="<?php echo get_permalink() ?>">
            <div class="item second">
                <div class="top">
                    <img src="<?php echo get_field('work_image_one')?>" />
                    <img src="<?php echo get_field('work_image_two')?>" />
                </div>
                <div class="bot">
                    <h6 class="tittle"><?php echo get_the_title(); ?></h6>
                    <button class="btn-light"><?php echo get_the_excerpt() ; ?></button>
                </div>
            </div>
            </a>

    <?php

    endwhile;
    endif;

    ?>
        </div>
    </div>

</section>

<!--            <div class="item second">-->
<!--                <div class="top">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img3.svg" alt="" />-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img4.svg" alt="" />-->
<!--                </div>-->
<!--                <div class="bot">-->
<!--                    <h6 class="tittle">--><?php //echo $recentwork['textb11']; ?><!--</h6>-->
<!--                    <button class="btn-light">--><?php //echo $recentwork['textb22']; ?><!--</button>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="item second">-->
<!--                <div class="top">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img1.svg" alt="" />-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img2.svg" alt="" />-->
<!--                </div>-->
<!--                <div class="bot">-->
<!--                    <h6 class="tittle">--><?php //echo $recentwork['textc11']; ?><!--</h6>-->
<!--                    <button class="btn-light">--><?php //echo $recentwork['textc22']; ?><!--</button>-->
<!--                </div>-->
<!--            </div>-->
<!---->
<!--            <div class="item second">-->
<!--                <div class="top">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img1.svg" alt="" />-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/img2.svg" alt="" />-->
<!--                </div>-->
<!--                <div class="bot">-->
<!--                    <h6 class="tittle">--><?php //echo $recentwork['textd11']; ?><!--</h6>-->
<!--                    <button class="btn-light">--><?php //echo $recentwork['textd22']; ?><!--</button>-->
<!--                </div>-->


<section class="section-testimonials">
    <div class="testimonials-text-box">
        <div class="testimonials-text">
            <h3 class="heading-secondary"><?php echo $testimonials['testimonials_title_one']; ?></h3>
            <h4><?php echo $testimonials['testimonials_title_two']; ?> <span class="underline"><?php echo $testimonials['testimonials_title_three']; ?></span></h4>
        </div>
    </div>

    <div class="testimonials">
        <div class="testimonials-box">

            <?php
            $args = array(
            'post_type' => 'testimonials',
            'posts_per_page' => -1
            );
            $query = new WP_Query($args);
            if ($query->have_posts()) :
            while ($query->have_posts()) :
            $query->the_post();?>


            <div class="box1">
                <div class="box1-content">
                    <img src="<?php echo get_field('testimonials_icon')?>" />
                    <p class="testimonials-description">
                        <?php echo get_the_excerpt() ; ?>
                    </p>
                    <div class="last-test">
                        <img src="<?php echo get_field('dash_image')?>" />
                        <h7 class="last-heading"><?php echo get_the_title(); ?></h7>
                    </div>
                </div>
            </div>

<!--            <div class="box2">-->
<!--                <div class="box1-content">-->
<!--                    <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/Group.svg" alt="" />-->
<!--                    <p class="testimonials-description">-->
<!--                        --><?php //echo $testimonials['testimonial_description_two']; ?>
<!--                    </p>-->
<!--                    <div class="last-test">-->
<!--                        <img src="--><?php //echo get_template_directory_uri(); ?><!--/assets/images/dash.svg" />-->
<!--                        <h7 class="last-heading">--><?php //echo $testimonials['witness_two']; ?><!--</h7>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->


            <?php

            endwhile;
            endif;

            ?>
        </div>
    </div>
</section>
<?php get_footer();


