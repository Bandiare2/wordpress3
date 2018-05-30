<?php
/**
 * Template name: Full Width
 *
 * @package WordPress
 * @subpackage newsmagz
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<div class="newsmagz-content-left col-md-12">
			<main id="main" class="site-main" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/content', 'page' ); ?>

					<?php
					if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;
					?>

				<?php endwhile; // End of the loop. ?>

			</main><!-- #main -->
		</div><!-- .newsmagz-content-left -->
	</div><!-- #primary -->

<?php get_footer(); ?>
