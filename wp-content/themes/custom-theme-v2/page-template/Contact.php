<?php /** * Template Name: Contact Template */ ?>
<?php $first_section = get_field('first_section');?>
<?php global $options; ?>
<?php get_header(); ?>

<section class="contactSec">
    <div class="container pt-5">
        <div class="row">
            <div class="col-md-6 pt-5">
                <h4><?php echo $first_section['heading'];?></h4>
                <h2><?php echo $first_section['sub_heading'];?></h2>
                <p><?php echo $first_section['content'];?></p>
                <div class="listcont">
                    <div class="itemslist">
                        <div class="icons">
                            <i class="fas fa-phone-alt"></i>
                        </div>
                        <div class="contDetails">
                            <h5>Call Us</h5>
                            <a href="tel:<?php echo $options['phone_number'];?>"><?php echo $options['phone_number'];?></a>
                        </div>
                    </div>
                </div>
                <div class="listcont">
                    <div class="itemslist">
                        <div class="icons">
                            <i class="fas fa-envelope"></i>
                        </div>
                        <div class="contDetails">
                            <h5>Mail Us</h5>
                            <a href="mailto:<?php echo $options['email'];?>"><?php echo $options['email'];?></a>
                        </div>
                    </div>
                </div>
                <div class="listcont">
                    <div class="itemslist">
                        <div class="icons">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div class="contDetails">
                            <h5>Visit Us</h5>
                            <p><?php echo $options['address'];?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contactBx">
                    <h3>Fill the Form Below</h3>
                    <?php echo do_shortcode('[contact-form-7 id="718de3c" title="Contact form 1"]');?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>