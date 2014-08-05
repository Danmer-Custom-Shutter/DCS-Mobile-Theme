<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/*
Template Name: Window Coverings Page
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

get_header(); ?>

<div id="content" class="<?php echo implode( ' ', responsive_get_content_classes() ); ?>">

	<?php if( have_posts() ) : ?>

		<?php while( have_posts() ) : the_post(); ?>

			<?php dynamic_sidebar( 'find-a-rep-widget' );		 ?>

			<?php // responsive_entry_before(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php responsive_entry_top(); ?>

				<?php // get_template_part( 'post-meta-page' ); ?>

				<div class="post-entry">
					<?php echo get_the_excerpt( ); ?>
					<?php // wp_link_pages( array( 'before' => '<div class="pagination">' . __( 'Pages:', 'responsive' ), 'after' => '</div>' ) ); ?>
					
					<?php
					
					?>
					<?php
					query_posts(array('post_status'=>'publish','post_type'=>'page', 'post_parent'=>get_the_id(), 'orderby' => 'menu_order', 'order' => 'ASC'));
					
					// var_dump($terms);
					if ( have_posts() ) {
					   // print '<ul>';
					    // foreach( (array) $terms as $term ) {
					    
					    while ( have_posts() ) : the_post();
						    echo '<div class="product '.(($x++%2==0) ? 'even':'odd').'">';
						    echo '<a href="'.get_permalink().'">';
						    echo get_the_post_thumbnail(get_the_id(), 'product-thumbnail');
						    the_title();
						    echo '</a>';
						    echo '</div>';
						endwhile;
					    
					    //print '</ul>';
					}
					
					wp_reset_query();
					
					?>
					
				</div>
				<!-- end of .post-entry -->

				<?php get_template_part( 'post-data' ); ?>

				<?php responsive_entry_bottom(); ?>
			</div><!-- end of #post-<?php the_ID(); ?> -->
			<?php responsive_entry_after(); ?>

			<?php responsive_comments_before(); ?>
			<?php // comments_template( '', true ); ?>
			<?php responsive_comments_after(); ?>

		<?php
		endwhile;

		// get_template_part( 'loop-nav' );

	else :

		get_template_part( 'loop-no-posts' );

	endif;
	?>

</div><!-- end of #content -->

<?php // get_sidebar(); ?>
<?php get_footer(); ?>
