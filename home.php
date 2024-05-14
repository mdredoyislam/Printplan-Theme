<?php
/**
 * Template Name: Home
 */

get_header();
?>
<section id="hero-section" style="background: url(<?php echo get_template_directory_uri(); ?>/assets/images/hero-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="hero-section-wrap">
                    <h1 class="hero-title mb-30">Hello, I’m Iqbal Ahmed</h1>
                    <p class="mb-50">Hi! I'm a UI/UX Designer - creating bold & brave interface design for companies all across the world.</p>
                    <a href="#" class="btn common-btn common-btn-color mr-25">hire me <i class="fas fa-paper-plane"></i></a>
                    <span>Check out my:</span>
                    <div class="hero-icons d-inline-block">
                        <a href="#" class="btn common-btn"><i class="fab fa-facebook-f"></i></a>
                        <a href="#" class="btn common-btn"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="btn common-btn"><i class="fab fa-behance"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="hero-section-image">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/profile.png" alt="" srcset="">
                </div>
            </div>
        </div>
    </div>
</section>
<section id="about-section" class="pb-100 pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="progress-inner">
                    <div class="progress-box">
                        <h5 class="box-title3 mb-1">Physiotherapy</h5>
                        <div class="bar">
                            <div class="bar-inner count-bar counted" data-percent="80%"></div>
                            <div class="count-text">80%</div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h5 class="box-title3 mb-1">Physiotherapy</h5>
                        <div class="bar">
                            <div class="bar-inner count-bar counted" data-percent="50%"></div>
                            <div class="count-text">50%</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="section-text-wrap">
                    <h3 class="section-title mb-20">About me.</h3>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                    <p>If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text.</p> 
                    <p class="mb-50">All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.</p>
                    <a href="#" download="download" class="btn common-btn common-btn-color d-inline-block">download cv</a>
                    <a href="#" class="btn common-btn d-inline-block">job experience</a>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
get_footer();
