<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @package johanjohansson
 */

get_header('second'); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<div class="col-sm12">
						<h1 class="not-found-title text-center"><?php _e( 'BAAAZINGA!', 'johanjohansson' ); ?></h1>
					</div>
				</header><!-- .page-header -->

				<div class="not-found-content text-center">
					<img src="<?php bloginfo('template_directory'); ?>/img/404.png" class="img-responsive center-block">
					<p><?php _e( "Oh dear, I never said that you're not good at what yo do. It's just that what you do is not worth doing!", 'johanjohansson' ); ?></p>



				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer('sfooter'); ?>
