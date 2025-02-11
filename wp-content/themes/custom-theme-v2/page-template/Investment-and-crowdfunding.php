<?php /** * Template Name: Investment & Crowdfunding Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php $box_list = $first_section['box_list'];?>
<?php get_header(); ?>

<section class="ourwork">
    <div class="container-fluid pt-5">
        <div class="text-center">
            <div class="tabsMain">
                <?php $x=1; foreach ($box_list as $boxlist) {?>
                <a class="<?php if ($x==1){echo'active';}?>" data-targetit="box-cat<?php echo $x;?>" href="javascript:;"
                    title=""><?php echo $boxlist['heading'];?></a>
                <?php $x++;}?>
            </div>
        </div>

        <?php $x=1; foreach ($box_list as $boxlist) {?>

        <div class="box-cat<?php echo $x;?> <?php if ($x==1){echo'showfirst';}?>">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="ourworkDv" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                        <figure>
                            <img class="blur1 img-fluid" src="<?php echo $boxlist['image'];?>" alt="">
                        </figure>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="pl-5" data-aos="fade-left" data-aos-delay="400" data-aos-duration="1200">
                        <h2><?php echo $boxlist['heading'];?></h2>
                        <p><?php echo $boxlist['content'];?></p>

                        <p><?php echo $boxlist['content_2'];?></p>
                    </div>
                </div>
            </div>
            <div class="row pt-5">
                <div class="col-md-12" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                    <h2><?php echo $boxlist['heading_2'];?></h2>
                    <p><?php echo $boxlist['content_3'];?></p>
                    <p><?php echo $boxlist['content_4'];?></p>
                </div>
            </div>
        </div>
        <?php $x++;}?>

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