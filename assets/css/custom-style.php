<?php
/*
 * print css with cheking value is empty or not
 *
 */

function resox_get_custom_styles() {
	global $resox_options;
	$redix_opt_prefix = 'resox_';

	if ( ( isset( $resox_options[ $redix_opt_prefix . 'main_color' ] ) ) && ( ! empty( $resox_options[ $redix_opt_prefix . 'main_color' ] ) ) ) {

		$resox_main_color = $resox_options[ $redix_opt_prefix . 'main_color' ];

	} else {
		$resox_main_color = '';
	}

	if ( ( isset( $resox_options[ $redix_opt_prefix . 'secondary_color' ] ) ) && ( ! empty( $resox_options[ $redix_opt_prefix . 'secondary_color' ] ) ) ) {
		$resox_secondary_color = $resox_options[ $redix_opt_prefix . 'secondary_color' ];
	} else {
		$resox_secondary_color = '';
	}

	ob_start();
	if ( ( isset( $resox_options[ $redix_opt_prefix . 'main_color' ] ) ) && ( ! empty( $resox_options[ $redix_opt_prefix . 'main_color' ] ) ) ) {
		?>

.scroll-top{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.scroll-top:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.preloader-close{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.handle-preloader .animation-preloader .txt-loading .letters-loading{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.handle-preloader .animation-preloader .txt-loading .letters-loading:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.handle-preloader .animation-preloader .spinner{
  border: 3px solid <?php echo esc_attr( $resox_main_color ); ?>; 
}

.header-top .info li i{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.theme-btn-one{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.main-header .header-upper .upper-info li i{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.main-header .header-upper .upper-info li h5 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.main-header.style-one .header-lower .outer-box .menu-area{
  border-bottom: 5px solid <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-header.style-one .social-links li a:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-menu .navigation > li > ul > li > a:hover,
.main-menu .navigation > li > .megamenu li > a:hover{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-menu .navigation > li > ul > li > ul > li > a:hover{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-menu .navigation > li.current-menu-item > a,
.main-menu .navigation > li:hover > a{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.main-menu .navigation > li.dropdown.current-menu-item > a:before,
.main-menu .navigation > li.dropdown:hover > a:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.banner-carousel .content-box h6{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.banner-carousel .owl-nav .owl-prev:hover,
.banner-carousel .owl-nav .owl-next:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.feature-section .feature-block-one:first-child .inner-box{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.feature-section .feature-block-one:nth-child(2) .inner-box{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.feature-section .feature-block-one:first-child .inner-box .icon-box:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.feature-section .feature-block-one:nth-child(2) .inner-box .icon-box:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.sec-title p{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_1 .content-box .list-item li:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_1 .content-box .inner-box .inner{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_1 .content-box .inner-box .inner .icon-box{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_1 .content-box .inner-box .inner:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_1 .content-box .inner-box .author .author-thumb{
  border: 2px solid <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-block-one .inner-box .image-box .icon-box{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-block-one .inner-box:hover .image-box .icon-box{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-block-one .inner-box .image-box .icon-box:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-block-one .inner-box:hover .image-box .icon-box:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-block-one .inner-box .lower-content h4 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-block-one .inner-box .lower-content .link a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-section .owl-nav .owl-prev:hover,
.service-section .owl-nav .owl-next:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.proudly-section .image-layer{
  border-bottom: 4px solid <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.sec-title.light p{
  color: #ffdc78 !important;
}

#content_block_2 .content-box .list-item li:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_2 .content-box .counter-inner .counter-block .inner-box .icon-box{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.bg-color-2{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.feature-block-two .inner-box .content-inner .theme-btn-one{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.feature-block-two .inner-box .count-box span{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.testimonial-block-one .inner-box h4:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.testimonial-block-one .inner-box h4:after{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.testimonial-block-one .inner-box:hover h4:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.testimonial-block-one .inner-box:hover h4:after{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.testimonial-block-one .inner-box:hover .image-box{
  border-color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_3 .single-box .inner .icon-box{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_3 .single-box .inner h4 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_3 .content-box .inner-box{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_3 .content-box .inner-box .icon-box{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_3 .content-box .inner-box h3 span{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_4 .form-inner:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

#content_block_4 .form-inner .form-group input:focus,
#content_block_4 .form-inner .form-group textarea:focus{
  border-color: #9e0036 !important;
}

.news-block-one .inner-box .image-box .post-date{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.news-block-one .inner-box .lower-content .post-info li i{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.news-block-one .inner-box .lower-content .post-info li a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.news-block-one .inner-box .lower-content h3 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.news-block-one .inner-box .lower-content .link a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.gallery-block-one .inner-box .link a{
  background: #f6db7d;
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.gallery-block-one .inner-box .link a:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
  color: #f6db7d;
}

.cta-section .inner-box .theme-btn-one{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.footer-top .logo-widget .info li a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.footer-top .logo-widget .info li i{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.footer-top .logo-widget .support-box i{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.footer-top .logo-widget .support-box h5 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.footer-top .links-widget .links-list li a:hover:before{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.footer-top .appointment-widget .shediul-list .theme-btn-one{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.footer-top .appointment-widget .shediul-list .theme-btn-one:before, .footer-top .appointment-widget .shediul-list .theme-btn-one:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.footer-botton .copyright p a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.footer-botton .social-links li a:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.header-top .info li a:hover{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.header-top .social-links li a:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-header .search-box-btn{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.main-header .search-box-btn:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.main-header .search-box-outer:after{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.welcome-section #content_block_3 .single-box .inner .icon-box{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_5 .content-box .inner-box .inner .video-inner a{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.bg-color-3{
  background: #f6db7d;
}

#content_block_6 .content-box .shediul-list li h6{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#image_block_1 .image-box .icon-box{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_7 .content-box .inner-box .single-item h5:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_7 .content-box .lower-box .support-box i{
  background: #f6db7d;
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_7 .content-box .lower-box .support-box h3 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-style-two .owl-nav .owl-prev:hover,
.service-style-two .owl-nav .owl-next:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.weare-section .single-column:first-child .single-item .inner-box .image-box:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.weare-section .single-column:nth-child(2) .single-item .inner-box .image-box:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.testimonial-style-two .testimonial-content .inner-box .text h3{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.accordion-box .block .acc-btn.active .icon-outer{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.accordion-box .block .acc-btn.active h5{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.faq-section .image-layer{
  border-bottom: 4px solid <?php echo esc_attr( $resox_main_color ); ?>;
}

.team-block-one .inner-box .image-box .social-links li a:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.team-block-one .inner-box .lower-content h5 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.cta-style-two .inner-container .text i{
  color: #f6db7d;
}

.cta-style-two .inner-container .subscribe-form .form-group input:focus{
  border-color: #f6db7d !important;
}

.cta-style-two .inner-container .subscribe-form .form-group .theme-btn-one{
  background: #f6db7d;
}

.page-title .content-box .bread-crumb{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.page-title .content-box .bread-crumb li a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_8 .content-box .author-box .author-thumb{
  border: 2px solid <?php echo esc_attr( $resox_main_color ); ?>;
}

#content_block_8 .content-box .inner-box .single-item h5:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.progress-box .bar-inner{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.team-details-content .upper-box .designation{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.team-details-content .upper-box .social-links li a:hover{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.error-section .inner-box p a{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-sidebar .categories-widget h4:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-sidebar .sidebar-support:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-sidebar .sidebar-support{
  border-top: 10px solid <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-sidebar .sidebar-support h3{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-sidebar .sidebar-support h3 a{
  color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-sidebar .sidebar-support .theme-btn-one{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .content-one .image-box i{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .content-one .image-box i:after{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .content-one .image-box svg:after{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .content-one .image-box svg{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .two-column .text h4{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-details-content .two-column .list-item li:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.service-details-content .content-two .inner-box:before{
  background: <?php echo esc_attr( $resox_secondary_color ); ?>;
}

.service-details-content .content-two .text p span{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.pagination li a:hover,
.pagination li a.active{
  background: #f6db7d;
}

.pagination li:first-child a{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.news-block-one .inner-box .lower-content h2 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .search-widget{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .sidebar-widget .widget-title:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .post-widget .post .post-thumb{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .post-widget .post .post-date{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .post-widget .post h5 a:hover{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.sidebar .categories-widget .categories-list li a:hover span{
  background: #f6db7d;
}

.sidebar .categories-widget .categories-list li a:hover:before{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.blog-details-content .post-share-option .social-links li a:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.blog-details-content .comments-area .comment .comment-inner > a{
  background: #f6db7d;
}

.blog-details-content .comments-area .comment .comment-inner h4 span{
  color: <?php echo esc_attr( $resox_main_color ); ?>;
}

.blog-details-content .comments-area .comment .comment-inner > a:hover{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.default-form .form-group input:focus,
.default-form .form-group textarea:focus{
  border-color: #9e0036 !important;
}

.contact-section .info-inner:before{
  background: <?php echo esc_attr( $resox_main_color ); ?>;
}

.contact-section .info-inner .content-box .info-list li a:hover{
  color: #f6db7d;
}

.contact-section .info-inner .content-box .info-list li i{
  color: #f6db7d;
}

.contact-section .info-inner .content-box .btn-box .theme-btn-one{
  background: #f6db7d;
}

.contact-section .info-inner{
  border-top: 10px solid #f6db7d;
}

.main-menu .navigation > li.current_page_ancestor > a, .main-menu .navigation > li:hover > a {
    color: <?php echo esc_attr( $resox_secondary_color ); ?>;
}
.service-sidebar h5:before {
    background: <?php echo esc_attr( $resox_main_color ); ?>;
}

		<?php
	}

	$resox_custom_css = ob_get_clean();

	return $resox_custom_css;
}

