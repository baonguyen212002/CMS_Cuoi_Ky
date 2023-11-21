<?php
/**
 * Client Section
 * 
 * @package JobScout
 */

if( is_active_sidebar( 'client' ) ){ ?>
	<section id="client-section" class="client-section client-binh">

	    	<?php dynamic_sidebar( 'client' ); ?>

	</section> <!-- .bg-cta-section -->
<?php
}