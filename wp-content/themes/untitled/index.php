<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package untitled
 */

get_header();
get_template_part( 'slider' ); ?>

<div id="main" class="site-main">
		<div id="primary" class="content-area">
			<div id="content" class="site-content" role="main">
				<?php query_posts($query_string . '&orderby=date&order=ASC'); ?>
				<?php
					if ( have_posts() ) :
						while ( have_posts() ) :
							the_post();

							/* Include the Post-Format-specific template for the content.
							 * If you want to overload this in a child theme then include a file
							 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
							 */
							get_template_part( 'content', get_post_format() );
						endwhile;

						untitled_content_nav( 'nav-below' );
					else :
						get_template_part( 'no-results', 'index' );
					endif;
				?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
