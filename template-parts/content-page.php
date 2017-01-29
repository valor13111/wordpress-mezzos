<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package 8Medi Lite
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="page-header">
		<?php the_title( '<h1 class="page-title">', '</h1>' ); ?>

     </script>
	</header><!-- .entry-header -->

	<div class="entry-content">

<!-- This is if the lunch specials page is loaded, certain content for it is loaded depending on the day of the week -->
		<?php	if (is_page('lunch-specials')) {
			$day_of_the_week = "Monday";

			switch ($day_of_the_week) {
				case "Monday":
				  echo '<div class="lunch_special_item_container"> <h2>' . get_theme_mod('lunch_special_settings_monday') . '</h2> </div>';
					echo '<div id="lunch_special_price">' . "Price: $" . get_theme_mod('lunch_special_settings_monday_price') . '</div>';
					echo '<hr>';
					echo '<div class="lunch_special_description_container">';
						echo '<ul>';
							echo '<li>' . get_theme_mod('lunch_special_settings_monday_description1') . '</li>';
							echo '<li>' . get_theme_mod('lunch_special_settings_monday_description2') . '</li>';
							echo '<li>' . get_theme_mod('lunch_special_settings_monday_description3') . '</li>';
					echo '</div>';
					break;
				case "Tuesday":
					break;
				case "Wednesday":
					break;
				case "Thursday":
					break;
				case "Friday":
					break;
				case "Saturday":
					break;
				default:
				}
		 } else {
			 the_content();
		 };
		?>




		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'eightmedi-lite' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( esc_html__( 'Edit', 'eightmedi-lite' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
