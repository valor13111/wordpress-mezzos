<?php
/**
 * The template for lunch special page.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * Template Name: Lunch Special Page
 */
wp_enqueue_script( 'script', get_template_directory_uri() . '/js/dropdown.js', array ( 'jquery' ), 1.1, true);
get_header(); ?>
<div class="ed-container">
	<?php
	global $post;
	$sidebar = get_post_meta($post->ID, 'eightmedi_lite_sidebar_layout', true);
	if($sidebar=='both-sidebar' || $sidebar=='left-sidebar'){
		get_sidebar('left');
	}
	?>
	<div id="primary" class="content-area <?php echo $sidebar;?>">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->
	<?php
	if($sidebar=='both-sidebar' || $sidebar=='right-sidebar' ){
		get_sidebar('right');
	}
	?>
</div>
<?php get_footer(); ?>
