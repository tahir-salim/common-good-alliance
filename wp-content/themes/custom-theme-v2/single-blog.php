<?php get_header(); ?>

<section class="blogsSec blogDetials">
    <div class="container">
        <div class="detailWrp para">
            <img src="<?php echo the_post_thumbnail_url() ;?>" alt="">
            <div class="publish_author">
                <span class="date"><?php echo get_the_date('d F Y') ;?></span>
            </div>
            <div class="defpage">
                <h2><?php the_title() ;?></h2>
                <?php the_content() ;?>
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