<?php

// Exit if accessed directly
if( !defined( 'ABSPATH' ) ) {
	exit;
}

/**
 * Page Meta-Data Template-Part File
 *
 * @file           post-meta-page.php
 * @package        Responsive
 * @author         Emil Uzelac
 * @copyright      2003 - 2013 ThemeID
 * @license        license.txt
 * @version        Release: 1.1.0
 * @filesource     wp-content/themes/responsive/post-meta-page.php
 * @link           http://codex.wordpress.org/Templates
 * @since          available since Release 1.0
 */
?>


<?php
global $post;
if( '0' != $post->post_parent){
?>
	<h1 class="entry-parent-title post-parent-title"><a href="<?php echo get_permalink($post->post_parent); ?>"><?php echo get_the_title($post->post_parent); ?>/</a></h1><h2 class="entry-title post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
<?php }else{ ?>
	<h1 class="entry-title post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<?php } ?>