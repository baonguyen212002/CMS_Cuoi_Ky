<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package JobScout
 */

 get_header(); ?>

 <!-- / cho phép các plugin hoặc theme khác chèn
  nội dung hoặc thực hiện 
 các hành động tại điểm này trong mã của bạn. -->
 
 <?php

 $blog_heading = get_theme_mod( 'blog_section_title', __( 'NEWEST BLOG ENTRIES ', 'jobscout' ) );

 ?>

  <div id="primary" class="content-area">
	  
	  <?php 
	  /**
	   * Before Posts hook
	  */
	  do_action( 'jobscout_before_posts_content' );
	  ?>

	<div class="image-container">
		<img src="../wp-content/themes/jobscout/images/news.jpg" alt=""class="image-style">
		<div class="text-overlay">FDS NEWS</div>
  	</div>
	  <div class="container">
		<!--nội dung chính của trang web được bao bọc trong phần tử <main>  -->
		<main id="main" class="site-main index-main index_main">

	  <?php 
			 if( $blog_heading ) echo '<h2 class="index_title">' . esc_html( $blog_heading ) . '</h2>';
		 ?>
	  <div class="row">
	  <!--  while để duyệt qua các bài viết -->
	  <?php
	  if ( have_posts() ) :
		  while ( have_posts() ) : the_post();?>
 
		  <div class="col-md-6 blog-format">
			  <!-- lấy và hiển thị nội dung -->
			   
			   <?php
			  get_template_part( 'template-parts/content', get_post_format() );
			  ?>
			  </div>
			  <?php
			 endwhile;
	  else :
 
		  get_template_part( 'template-parts/content', 'none' );
 
	  endif; ?>
	</div>
	 
 </div>
	  </main><!-- #main -->
	  
	  <?php
	  /**
	   * After Posts hook
	   * @hooked jobscout_navigation - 15
	  */
	  do_action( 'jobscout_after_posts_content' );
	  ?>
	  
  </div><!-- #primary -->
 
 <?php
//  get_sidebar();
 get_footer();
 
 