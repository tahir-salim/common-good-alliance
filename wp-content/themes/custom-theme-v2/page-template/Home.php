<?php /** * Template Name: Home Template */ ?>
<?php $banner_section = get_field('banner_section');?>
<?php $first_section = get_field('first_section');?>
<?php $second_section = get_field('second_section');?>
<?php $fourth_section = get_field('fourth_section');?>

<?php get_header(); ?>

<section class="main-Banner">
    <img class="img-fluid" src="<?php echo $banner_section['image'];?>" alt="">
    <div class="bannCont">
        <h1><?php echo $banner_section['heading'];?></h1>
        <p><?php echo $banner_section['content'];?></p>
        <a class="themeBtn" href="<?php echo $banner_section['button_link'];?>"
            title=""><?php echo $banner_section['button_text'];?><i class="far fa-arrow-right"></i></a>
    </div>
</section>

<section class="aboutSec">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h2 data-aos="fade-up"><?php echo $first_section['heading'];?></h2>
                <div class="row pt-3" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">

                    <?php $box_list = $first_section['box_list'];?>
                    <?php $x=1; foreach ($box_list as $boxlist) {?>

                    <div class="col-md-6">
                        <h3><?php echo $boxlist['heading']; ?></h3>
                        <p><?php echo $boxlist['content']; ?></p>
                        <?php if ($x==3) {?>
                        <a class="themeBtn" href="<?php echo $boxlist['button_link']; ?>"
                            title=""><?php echo $boxlist['button_text']; ?></a>
                        <?php  }?>

                    </div>
                    <?php $x++;}?>
                </div>
            </div>
            <div class="col-md-4">
                <figure class="posset" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1500">
                    <img class="blur1 img-fluid" src="<?php echo $first_section['image'];?>" alt="">
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="ourwork">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4">
                <div class="BxSimple" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                    <h2><?php echo $fourth_section['heading'];?></h2>
                    <p><?php echo $fourth_section['content'];?></p>
                    <a class="themeBtn" href="<?php echo $fourth_section['button_link'];?>" title=""><?php echo $fourth_section['button_text'];?></a>
                </div>
            </div>            
                <?php    $x=1;  $args = array( 'post_type' => 'work' , 'posts_per_page' => '5','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>

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
                <?php $x++; endwhile; wp_reset_query(); ?>
        </div>
    </div>
</section>

<!-- Begin: Blog -->
<?php get_template_part("includes/blogsec"); ?>
<!-- END: Blog -->



<section class="aboutWork">
    <figure>
        <img class="blur1 img-fluid" src="<?php echo $second_section['image'];?>" alt="">
    </figure>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1200">
                <h2><?php echo $second_section['heading'];?></h2>
                <p><?php echo $second_section['content'];?></p>
                <a class="themeBtn" href="<?php echo $second_section['button_link'];?>"
                    title=""><?php echo $second_section['button_text'];?></a>
            </div>
        </div>
    </div>
</section>




<!-- Begin: Cta -->
<?php get_template_part("includes/cta"); ?>
<!-- END: Cta -->

<!-- Begin: Events -->
<?php get_template_part("includes/events"); ?>
<!-- END: Events -->
<?php get_footer(); ?>