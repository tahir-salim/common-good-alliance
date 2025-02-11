<?php global $options; ?>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Goes Here %%%%%%%%%%%%%%%%%%%%%% -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="pr-5">
                    <div class="flogo">
                        <a href="./" class="logo navbar-brand">
                            <!-- <img src="assets/images/logo.webp" alt=""> -->
                            Common <br>Good Alliance
                        </a>
                    </div>
                    <p class="pt-5"><?php echo $options['footer_about'];?></p>
                    <div class="socialIcons">
                        <a href="<?php echo $options['facebook'];?>" title=""><i class="fab fa-facebook-f"></i></a>
                        <a href="<?php echo $options['instagram'];?>" title=""><i class="fab fa-instagram"></i></a>
                        <a href="<?php echo $options['youtube'];?>" title=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-2">
                <h4>Quick Links</h4>
                <div class="widget">
                    <!-- <ul class="">
                        <li><a class="active" href="./" title="">Home</a></li>
                        <li><a href="about-us.php" title="">About Us</a></li>
                        <li class="dropitem"><a href="strategic-pillars.php" title="">Strategic Pillars</a></li>
                        <li><a href="investment-and-crowdfunding.php" title="">Investment and Crowdfunding</a></li>
                        <li><a href="events-and-workshops.php" title="">Events and Workshops </a></li>
                        <li><a href="javascript:;" title="">Testimonials</a></li>
                        <li><a href="javascript:;" title="">Blog</a></li>
                        <li><a href="contact-us.php" title="">Contact Us</a></li>
                    </ul> -->
                    <?php wp_nav_menu( array( 'menu' => 'Footer Menu', 'menu_class'=> '' ) ); ?>
                </div>
            </div>
            <div class="col-md-3">
                <h4>Contacts Info</h4>
                <p>Main Office <br> <?php echo $options['address'];?></p>
                <p>
                    <a href="tel:<?php echo $options['phone_number'];?>" title=""><?php echo $options['phone_number'];?></a> or
                    <a href="tel:<?php echo $options['phone_number2'];?>" title=""><?php echo $options['phone_number2'];?></a>
                </p>
                <a href="mailto:<?php echo $options['email'];?>" title=""><?php echo $options['email'];?></a>
            </div>
            <div class="col-md-3">
                <h4>Subscribe to Our Newsletter</h4>
                <p><?php echo $options['timing'];?></p>
                <div class="subscribeform">
                <?php echo do_shortcode('[email-subscribers-form id="1"]');?>
                </div>
            </div>
        </div>

    </div>
</footer>

<div class="copyright">
    <div class="container">
        <p>Copyright © <script>
            var CurrentYear = new Date().getFullYear()
            document.write(CurrentYear)
            </script> <?php echo $options['copyright'];?></p>
    </div>
</div>

<!-- %%%%%%%%%%%%%%%%%%%%%% Footer Code Ends Here %%%%%%%%%%%%%%%%%%%%%% -->
    <?php wp_footer(); ?>

</main>
  </body>
</html>
