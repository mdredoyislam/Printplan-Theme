<?php
class printplan_Int {
	/**
	 * top bar search compatibility.
	 */
	public static function printplan_search_popup() {
		//$header_on_of_search = printplan_get_options( 'header_on_of_search' );
		$header_on_of_search = 1;
		?>
		<?php if ( $header_on_of_search == 1 ) : ?>
				<div class="search-box-outer">
					<div class="dropdown">
						<button class="search-box-btn" type="button" id="dropdownMenu3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-search"></i></button>
						<div class="dropdown-menu search-panel" aria-labelledby="dropdownMenu3" style="">
							<div class="form-container">
								<form method="post" action="<?php echo esc_url( home_url( '/' ) ); ?>">
									<div class="form-group">
									<input type="search"  id="<?php echo esc_attr( uniqid( 'search-form-' ) ); ?>" class="search-field"
										placeholder="<?php esc_attr_e( 'Search...', 'printplan' ); ?>" value="<?php echo get_search_query(); ?>" name="s" required="required"/>
										<button type="submit" class="search-btn"><span class="fas fa-search"></span></button>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>

		<?php endif; ?>
		<?php
	}
	/**
	 * preloader compatibility.
	 */
	/*public static function printplan_preloader() {
		$preloader_on_off = printplan_get_options( 'preloader_on_off' );
		$preloader_img = printplan_get_options('_site_preloader_image');
		
		?>
		<?php if ( $preloader_on_off ) : ?>
			<div class="loader-wrap">
				<div class="preloader">
					<div class="preloader-close"><?php esc_html_e( 'Preloader Close', 'printplan' ); ?></div>
					<div id="handle-preloader" class="handle-preloader">
						<div class="animation-preloader">
						<?php if ( isset( $preloader_img['url'] )
							&& $preloader_img['url'] != ''
							) { ?>
							<img alt="<?php esc_html__( 'Loader Image', 'printplan' ); ?>"
		src="<?php echo esc_url( $preloader_img['url'] ); ?>">
		<?php
			} else {
				?>
							<div class="spinner"></div>
							<div class="txt-loading">
								<span data-text-preloader="R" class="letters-loading">
									<?php esc_html_e( 'R', 'printplan' ); ?>
								</span>
								<span data-text-preloader="e" class="letters-loading">
									<?php esc_html_e( 'e', 'printplan' ); ?>
								</span>
								<span data-text-preloader="s" class="letters-loading">
									<?php esc_html_e( 's', 'printplan' ); ?>
								</span>
								<span data-text-preloader="o" class="letters-loading">
									<?php esc_html_e( 'o', 'printplan' ); ?>
								</span>
								<span data-text-preloader="x" class="letters-loading">
									<?php esc_html_e( 'x', 'printplan' ); ?>
								</span>
							</div>
			<?php } ?>
						</div>  
					</div>
				</div>
			</div>
		<?php endif; ?>
		<?php
	}
	*/
	/**
	 * back to top compatibility.
	 */
	public static function printplan_back_to_top() {
		//$back_to_top_on_off = printplan_get_options( 'back_to_top_on_off' );
		$back_to_top_on_off = 1;
		?>
		<?php if ( $back_to_top_on_off === '1' ) : ?>
			<button class="scroll-top scroll-to-target" data-target="html">
				<span class="fa fa-arrow-up"></span>
			</button>
		<?php endif; ?>
		<?php
	}
	/**
	 * header logo compatibility.
	 *//*
	public static function printplan_header_logo() {
		?>
		<div class="logo-box pull-left">
			<figure class="logo">
		<?php
		if ( has_custom_logo() ) {
			the_custom_logo();
		} else {
			?>
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<img src="<?php echo esc_url( printplan_IMG_URL . 'logo.png' ); ?>" alt="<?php esc_attr_e( 'Logo', 'printplan' ); ?>">
					</a> 
			<?php
		}
		?>
			</figure>
		</div>
		<?php
	}*/

	/**
	 * header menu compatibility.
	 */
	public static function printplan_header_menu() {
		?>
		<nav class="main-menu navbar-expand-md navbar-light pull-left">
			<div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
		<?php
		if ( has_nav_menu( 'primary' ) ) {
			wp_nav_menu(
				array(
					'theme_location' => 'primary',
					'depth'          => 3, // 1 = no dropdowns, 2 = with dropdowns.
					'menu_class'     => 'navigation clearfix',
					'container'      => 'ul',
				)
			);
		} else {
			wp_nav_menu(
				array(
					'menu_class' => 'navigation clearfix',
					'container'  => 'ul',
				)
			);
		}
		?>
			</div>
		</nav>
		<?php
	}

	/**
	 * mobile menu compatibility.
	 *//*
	public static function printplan_mobile_menu() {
		$mobile_menu_social  = printplan_get_options( 'mobile_menu_social' );
		$mobile_menu_contact = printplan_get_options( 'mobile_menu_contact' );
		$mobile_menu_logo    = printplan_get_options( 'mobile_menu_logo' );
		?>

		<!-- Mobile Menu  -->
		<div class="mobile-menu">
			<div class="menu-backdrop"></div>
			<div class="close-btn"><i class="fas fa-times"></i></div>
			
			<nav class="menu-box">
				<div class="nav-logo">
				<?php if ( isset( $mobile_menu_logo['url'] ) && $mobile_menu_logo['url'] != '' ) : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo esc_url( $mobile_menu_logo['url'] ); ?>"  alt="<?php esc_attr_e( 'Logo', 'printplan' ); ?>"></a>
					<?php else : ?>
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" ><img src="<?php echo esc_url( printplan_IMG_URL . 'footer-logo-2.png' ); ?>" alt="<?php esc_attr_e( 'Logo', 'printplan' ); ?>"></a>
					<?php endif; ?>
				</div>
				<div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
		<?php if ( $mobile_menu_contact ) : ?>
				<div class="contact-info">
					<h4><?php esc_html_e( 'Contact Info', 'printplan' ); ?></h4>
					<ul>
						<?php echo wp_kses( $mobile_menu_contact, 'printplan_kses' ); ?>
					</ul>
				</div>
		<?php endif ?>
		<?php if ( $mobile_menu_social ) : ?>
				<div class="social-links">
					<ul class="clearfix">
						<?php echo wp_kses( $mobile_menu_social, 'printplan_kses' ); ?>
					</ul>
				</div>
		<?php endif ?>
			</nav>
		</div><!-- End Mobile Menu -->

		<?php
	}*/
	/**
	 * All header and breadcrumb.
	 */
	public static function printplan_breadcrumb() {
		$breadcrumb_title = 'printplan';
		$breadcrumb_class = 'breadcrumb_no_bg';
		if ( is_front_page() && is_home() ) :
			$breadcrumb_title = ''; // deafult blog
			$breadcrumb_class = 'deafult-home-breadcrumb';
	   elseif ( is_front_page() && ! is_home() ) :
		   $breadcrumb_title = ''; // custom home or deafult
		   $breadcrumb_class = 'custom-home-breadcrumb';
	 elseif ( is_home() ) :
		 //$blog_breadcrumb_switch = printplan_get_options( 'blog_breadcrumb_switch' );
		 $blog_breadcrumb_switch = 1;
		 if ( $blog_breadcrumb_switch == '1' ) :
	 else :
		 $breadcrumb_title = '';
	 endif;
	  $breadcrumb_class = 'blog-breadcrumb';
		   elseif ( is_archive() ) :
			   $breadcrumb_title = get_the_archive_title();
			   $breadcrumb_class = 'blog-breadcrumb';
	 elseif ( is_single() ) :
		 if ( get_post_type( get_the_ID() ) == 'post' ) :
			 $blog_single_breadcrumb_switch = 1;
			 if ( $blog_single_breadcrumb_switch == '1' ) :
				 // redux
				 $blog_single_breadcrumb_content = printplan_get_options( 'blog_single_breadcrumb_content' );
				 $breadcrumb_title               = $blog_single_breadcrumb_content;
				 $breadcrumb_class               = 'blog-single-breadcrumb';
		  else :
			  $breadcrumb_title = '';
		  endif;
	  else :
		  // post type
		  $breadcrumb_title = get_post_type() . esc_html__( ' Details', 'printplan' );
		  $breadcrumb_class = get_post_type() . '-single-breadcrumb';
	  endif;
	 elseif ( is_404() ) :
		 $breadcrumb_title = esc_html__( 'Error Page', 'printplan' );
		 $breadcrumb_class = 'blog-breadcrumb';
	 elseif ( is_search() ) :
		 if ( have_posts() ) :
			 $breadcrumb_title = esc_html__( 'Search Results for: ', 'printplan' ) . get_search_query();
			 $breadcrumb_class = 'blog-breadcrumb';
	 else :
		 $breadcrumb_title = esc_html__( 'Nothing Found', 'printplan' );
		 $breadcrumb_class = 'blog-breadcrumb';
	 endif;
		   elseif ( ! is_home() && ! is_front_page() && ! is_search() && ! is_404() ) :
			   $breadcrumb_title = get_the_title();
			   $breadcrumb_class = 'page-breadcrumb';
		   endif;
			   $breadcrumb_active_class = 'breadcrumb-not-active';
		   if ( function_exists( 'bcn_display' ) ) :
			   $breadcrumb_active_class = '';
		   endif;
			?>
		<?php

		if ( is_page() ) {
			$printplan_show_breadcrumb = get_post_meta( get_the_ID(), 'printplan_core_show_breadcrumb', true );
		} else {
			$printplan_show_breadcrumb = 'on';
		}
		$header_menu_style            = 2;
		$breadcrumb_class_with_header = 'breadcrumb-class-with-header-one';
		if ( $header_menu_style == '2' ) :
			$breadcrumb_class_with_header = '';
		endif;
		?>
		<?php if ( $printplan_show_breadcrumb != 'off' ) : ?>
			<?php if ( isset( $breadcrumb_title ) && ! empty( $breadcrumb_title ) ) : ?>
				<section class="page-title centred <?php echo esc_attr( $breadcrumb_class . ' ' . $breadcrumb_active_class . ' ' . $breadcrumb_class_with_header ); ?>">
					<div class="auto-container">
						<div class="content-box">
				<?php if ( function_exists( 'bcn_display' ) ) : ?>
								<ul class="bread-crumb clearfix">
					<?php bcn_display(); ?>
								</ul>
				<?php endif; ?>
							<div class="title">
								<h1><?php echo wp_kses( $breadcrumb_title, 'printplan_kses' ); ?></h1>
							</div>
						</div>
					</div>
				</section>
			<?php endif; ?>
		<?php endif; ?>
		<?php
	}
	/**
	 * printplan search popup compatibility.
	 */
	public static function printplan_blog_social() {
		?>
				<ul class="social-links pull-right">
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-twitter"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://twitter.com/home?status=<?php echo urlencode( get_the_title() ); ?>-<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-facebook-square"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;"  href="https://www.pinterest.com/pin/find/?url=<?php echo get_the_permalink(); ?>"><i class="fab fa-pinterest-p"></i></a></li>
					<li><a onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600');return false;" href="https://www.instagram.com/p/B8Jp8UbAHmd/?utm_source=<?php echo esc_url( get_permalink() ); ?>"><i class="fab fa-instagram"></i></a></li>
				</ul>
		<?php
	}
	/**
	 * autor box compatibility.
	 */
	public static function printplan_authore_box() {
		$blog_authore_switch = 1;
		if ( $blog_authore_switch == 1 ) :
			global $post;
			$display_name     = get_the_author_meta( 'display_name', $post->post_author );
			$user_description = get_the_author_meta( 'user_description', $post->post_author );
			$user_avatar      = get_avatar( $post->post_author, 165 );
			if ( isset( $user_description ) && ! empty( $user_description ) ) {
				?>
				<div class="author-box">
					<div class="inner">
						<figure class="author-thumb"><?php echo wp_kses_post( $user_avatar ); ?></figure>
						<h4><?php echo wp_kses_post( ucfirst( $display_name ) ); ?></h4>
						<p><?php echo wp_kses_post( $user_description ); ?></p>
					</div>
				</div>
				<?php
			}
			?>
			<?php
		endif;
	}

}
$printplan_int = new printplan_Int();
