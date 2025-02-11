<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<?php global $options; global $woocommerce; ?>
<?php if(is_home() || is_front_page()){?>

<body <?php body_class('scrolllenis home'); ?>id="top">
    <?php } else{?>

    <body <?php body_class('scrolllenis'); ?>id="top">
        <?php }?>


        <?php if(is_home() || is_front_page()){?>
        <div class="preLoader black">
            <!-- <img src="assets/images/logo.webp" alt="img"> -->
            <h2>Common <br>Good Alliance</h2>
        </div>
        <div class="preLoader white"></div>
        <?php } ?>
        <div class="mouse-cursor cursor-outer"></div>
        <div class="mouse-cursor cursor-inner"></div>

        <header class="fixed">
            <div class="main-header">
                <div class="container-fluid">
                    <div class="mmheader">
                        <div class="menu-Bar">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="mainnavs">
                            <a href="<?php echo site_url();?>" class="logo navbar-brand">
                                <!-- <img src="assets/images/logo.webp" alt=""> -->
                                Common <br>Good Alliance
                            </a>
                            <nav class="menuWrap">
                                <!-- <ul class="menu navbar-nav">
                                <li><a class="active" href="./" title="">Home</a></li>
                                <li><a href="about-us.php" title="">About Us</a></li>
                                <li class="dropitem"><a href="strategic-pillars.php" title="">Strategic Pillars</a></li>
                                <li><a href="investment-and-crowdfunding.php" title="">Investment & Crowdfunding</a>
                                </li>
                                <li><a href="events-and-workshops.php" title="">Events & Workshops </a></li>
                                <li><a href="javascript:;" title="">Testimonials</a></li>
                                <li><a href="javascript:;" title="">Blog</a></li>
                                <li class="last"><a class="themeBtn" href="contact-us.php" title="">Contact Us</a></li>
                            </ul> -->

                                <?php wp_nav_menu( array( 'menu' => 'Menu 1', 'menu_class'=> 'menu navbar-nav' ) ); ?>

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <main>

            <?php if(is_home() || is_front_page() ){?>


            <?php } else{?>

            <?php $banner_section = get_field('banner_section'); ?>

            <section class="main-Banner">
                <img class="img-fluid" src="<?php echo $banner_section['image'];?>" alt="">
                <div class="bannCont">
                    <h1><?php echo $banner_section['heading'];?></h1>
                </div>
            </section>
            <?php }?>