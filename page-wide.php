<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
Template Name: Wide Landing Page
*/

/**
 * Pages Template
 *
 *
 * @file           page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.0
 * @filesource     wp-content/themes/responsive/page.php
 * @link           http://codex.wordpress.org/Theme_Development#Pages_.28page.php.29
 * @since          available since Release 1.0
 */

global $phone;
if(is_page(660)){
	$phone = "+18884997171";
}
get_header(); ?>

<div id="content" class="fullwidth <?php echo implode( ' ', responsive_get_content_classes() ); ?>">

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php // get_template_part( 'loop-header' ); ?>

			<?php // responsive_entry_before(); ?>
				<?php // responsive_entry_top(); ?>

				<?php // get_template_part( 'post-meta-page' ); ?>

					<?php the_content( __( 'Read more &#8250;', 'responsive' ) ); ?>
				<!-- end of .post-entry -->

			
		<?php
		endwhile;

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content -->
<?php // get_sidebar(); ?>
<?php get_footer(); ?>