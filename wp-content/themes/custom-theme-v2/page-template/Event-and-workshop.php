<?php /** * Template Name: Event and workshop Template */ ?>
<?php get_header(); ?>

<section class="eventsSec">
    <div class="container-fluid pt-5">
        <div class="text-center" data-aos="fade-up">
            <h2><?php echo get_field('heading',10)?></h2>
        </div>
        <div class="row">
            <?php    $x=1;  $args = array( 'post_type' => 'event' , 'posts_per_page' => '12','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
            <div class="col-md-3" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                <figure>
                    <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                </figure>
                <h3><?php the_title() ;?></h3>
                <p><?php the_excerpt() ;?></p>
                <a class="readIcon" href="<?php the_permalink() ;?>" title="">Read More <i
                        class="far fa-arrow-right"></i></a>
            </div>
            <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>