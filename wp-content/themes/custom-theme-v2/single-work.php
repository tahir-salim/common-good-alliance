<?php /** * Template Name: Arts and Culture Template */ ?>
<?php get_header(); ?>

<section class="ourwork">
    <div class="container-fluid pt-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="ourworkDv" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                    <figure>
                        <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                    </figure>
                </div>
            </div>
            <div class="col-md-6">
                <div class="pl-5">
                    <h2><?php the_title() ;?></h2>
                    <?php the_content();?>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Begin: Blog -->
<?php get_template_part("includes/blogsec"); ?>
<!-- END: Blog -->

<!-- Begin: Cta -->
<?php get_template_part("includes/cta"); ?>
<!-- END: Cta -->

<!-- Begin: Events -->
<?php get_template_part("includes/events"); ?>
<!-- END: Events -->
<?php get_footer(); ?>