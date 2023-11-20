<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<?php
/**
 * Client Section
 * 
 * @package JobScout
 */

if( is_active_sidebar( 'client' ) ){ ?>
	<section id="client-section" class="client-section client-binh">
	<i class="fa fa-envelope icon_mail_footer"></i>

	    	<?php dynamic_sidebar( 'client' ); ?>
		
	</section> <!-- .bg-cta-section -->
<?php
}