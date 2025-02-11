<?php /** * Template Name: About Template */ ?>
<?php $first_section = get_field('first_section',10);?>
<?php $second_section = get_field('second_section');?>

<?php get_header(); ?>

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

<section class="aboutWork InnerAboutsec">
    <figure>
        <img class="blur1 img-fluid" src="<?php echo $second_section['image'];?>" alt="">
    </figure>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1200">
                <h2><?php echo $second_section['heading'];?></h2>
                <p><?php echo $second_section['content'];?></p>
                <p><?php echo $second_section['content_2'];?></p>
                <?php echo $second_section['list'];?>
                <p><?php echo $second_section['content_3'];?></p>
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