<!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head profile="http://gmpg.org/xfn/11">
		
		<meta http-equiv="Content-type" content="text/html;charset=<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" >
																		
		<title><?php wp_title('|', true, 'right'); ?></title>
		<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-42359703-1', 'littlebookbigstory.com');
  ga('send', 'pageview');

        </script>
		<?php wp_head(); ?>
	
	</head>
	
	<body <?php body_class(); ?>>
	
		<div class="wrapper" id="wrapper">
	
			<div class="header">
							
				<?php if ( get_theme_mod( 'hoffman_logo' ) ) : ?>
				
			        <a class="blog-logo" href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>' rel='home'>
			        	<img src='<?php echo esc_url( get_theme_mod( 'hoffman_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'title' ) ); ?>'>
			        </a>
			
				<?php elseif ( get_bloginfo( 'description' ) || get_bloginfo( 'title' ) ) : ?>
			
					<h1 class="blog-title">
						<a href="<?php echo esc_url( home_url() ); ?>" title="<?php echo esc_attr( get_bloginfo( 'title' ) ); ?> &mdash; <?php echo esc_attr( get_bloginfo( 'description' ) ); ?>" rel="home"><?php echo esc_attr( get_bloginfo( 'title' ) ); ?></a>
					</h1>
					
					<?php if (  get_bloginfo( 'description' ) ) : ?>
					
						<h3 class="blog-description"><?php echo esc_attr( get_bloginfo( 'description' ) ); ?></h3>
					
					<?php endif; ?>
					
				<?php endif; ?>
				
				<?php get_template_part( 'menu', 'social' ); ?>				
				
				<div class="clear"></div>
								
			</div> <!-- /header -->
			
			<div class="navigation hidden" style="display:block">
		
				<div class="section-inner">
				
					<ul class="main-menu">
						
						<?php if ( has_nav_menu( 'primary' ) ) {
																			
							wp_nav_menu( array( 
							
								'container' => '', 
								'items_wrap' => '%3$s',
								'theme_location' => 'primary'
															
							) ); } else {
						
							wp_list_pages( array(
							
								'container' => '',
								'title_li' => ''
							
							));
							
						} ?>
						<li class="page_item"><a target="_blank" href="http://astore.amazon.com/libobist-20">Bookshop</a></li>
						<form method="get" class="search-form" id="search-form" action="http://littlebookbigstory.com/">
	                        <input type="search" class="search-field" placeholder="Search form" name="s" id="s"> 
	                        <a id="searchsubmit" class="search-button" onclick="document.getElementById('search-form').submit(); return false;"></a>
                        </form>
						<div class="clear"></div>
							
					 </ul>
					 
					 <ul class="mobile-menu hidden">
					
					<?php if ( has_nav_menu( 'primary' ) ) {
																		
						wp_nav_menu( array( 
						
							'container' => '', 
							'items_wrap' => '%3$s',
							'theme_location' => 'primary'
														
						) ); } else {
					
						wp_list_pages( array(
						
							'container' => '',
							'title_li' => ''
						
						));
						
					} ?>
					
				</ul>
						
				</div> <!-- /section-inner -->
					
			</div> <!-- /navigation -->