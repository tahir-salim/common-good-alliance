<?php $third_section = get_field('third_section',10);?>
<section class="ctaSec">
    <div class="container">
        <div class="d-flex align-items-center justify-content-between">
            <div class="cont" data-aos="fade-right" data-aos-delay="400" data-aos-duration="1200">
                <h2><?php echo $third_section['heading'];?></h2>
                <p><?php echo $third_section['content'];?></p>
            </div>
            <a data-aos="fade-left" data-aos-delay="400" data-aos-duration="1200" class="themeBtn"
                href="<?php echo $third_section['button_link'];?>"
                title=""><?php echo $third_section['button_text'];?></a>
        </div>
    </div>
</section>