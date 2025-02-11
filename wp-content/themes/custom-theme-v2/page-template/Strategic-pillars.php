<?php /** * Template Name: Strategic Pillars Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php get_header(); ?>

<section class="ourwork">
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="text-center pb-5 pt-5">
                <h2><?php echo $first_section['heading'];?></h2>
                <p><?php echo $first_section['content'];?></p>
            </div>
        </div>
        <div class="row justify-content-center">

            <?php    $x=1;  $args = array( 'post_type' => 'work' , 'posts_per_page' => '5','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <?php if ($x<3) {?>
            <div class="col-md-4">
                <div class="ourworkDv" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                    <figure>
                        <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                    </figure>
                    <div class="hovercont">
                        <h3><?php the_title() ;?></h3>
                        <p><?php the_excerpt() ;?></p>
                        <a href="<?php the_permalink() ;?>" title="">Read More <i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <?php } $x++; endwhile; ?>
            <div class="row">
            <?php    $y=1; $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

            <?php if ($y>2) {?>
                <div class="col-md-4">
                    <div class="ourworkDv" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                        <figure>
                            <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                        </figure>
                        <div class="hovercont">
                            <h3><?php the_title() ;?></h3>
                            <p><?php the_excerpt() ;?></p>
                            <a href="<?php the_permalink() ;?>" title="">Read More <i
                                    class="far fa-arrow-right"></i></a>
                        </div>
                    </div>
                </div>

                

                <?php } $y++; endwhile; wp_reset_query(); ?>
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