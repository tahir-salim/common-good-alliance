<?php $fifth_section = get_field('fifth_section',10);?>
<section class="blogsMain">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-between" data-aos="fade-up">
            <h2><?php echo $fifth_section['heading'];?></h2>
            <a class="themeBtn"
                href="<?php echo $fifth_section['button_link'];?>"><?php echo $fifth_section['button_text'];?></a>
        </div>
        <div class="BlogBox">
            <div class="row align-items-center fullblog" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="1200">


                <?php    $x=1;  $args = array( 'post_type' => 'blog' , 'posts_per_page' => '4','post_status' => 'publish','order'=>'ASC',); $index_query = new WP_Query($args); while ($index_query->have_posts()) : $index_query->the_post(); ?>
                <?php if ($x==1) {?>
                <div class="col-md-8">
                    <figure>
                        <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                    </figure>
                </div>
                <div class="col-md-4">
                    <div class="blogDetails">
                        <div class="date_details">
                            <h5><?php echo $fifth_section['heading_2'];?></h5>
                            <p><?php echo get_the_date('d F Y') ;?></p>
                        </div>
                        <h3><a href="<?php the_permalink() ;?>" title=""><?php the_title() ;?></a></h3>
                        <p><?php the_excerpt() ;?></p>
                        <a class="read" href="<?php the_permalink() ;?>" title="">Read More</a>
                    </div>
                </div>
                <div class="row pt-5">
                    <?php } else{?>

                    <div class="col-md-4" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1200">
                        <figure>
                            <img class="blur1 img-fluid" src="<?php the_post_thumbnail_url() ;?>" alt="">
                        </figure>
                        <div class="blogDetails">
                            <div class="date_details">
                                <h5><?php echo $fifth_section['heading_2'];?></h5>
                                <p><?php echo get_the_date('d F Y') ;?></p>
                            </div>
                            <h3><a href="<?php the_permalink() ;?>" title=""><?php the_title() ;?></a></h3>
                            <p><?php the_excerpt() ;?></p>
                        </div>
                    </div>

                    <?php }?>
                    <?php $x++; endwhile; wp_reset_query(); ?>
                </div>


            </div>


        </div>
    </div>
</section>