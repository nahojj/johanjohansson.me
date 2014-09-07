<?php
/**
 * @package johanjohansson
 */
?>

<article id="post-<?php the_ID(); ?> " <?php post_class('blogpost-article'); ?>>
	<header class="blogpost-header">
		<?php the_title( sprintf( '<h1 class="blogpost-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>

		<?php if ( 'post' == get_post_type() ) : ?>
		<div class="blogpost-meta">
			<p><?php the_time('Y/m/d'); ?> | <?php the_time('G:i'); ?></p>
		</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<div class="blogpost-content">
		<?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'johanjohansson' ) ); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'johanjohansson' ),
				'after'  => '</div>',
			) );
		?>

		<div class="tags">
			<div class="tag text-center">
				<?php
					if( $tags = get_the_tags() ) {

  					foreach( $tags as $tag ) {
      				$sep = ( $tag === end( $tags ) ) ? '' : '';
      				echo '<a href="' . get_term_link( $tag, $tag->taxonomy ) . '">#' . $tag->name . '</a>' . $sep;
  					}
					}
				?>
			</div><!-- .tag end -->
		</div><!-- .tags end -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php edit_post_link( __( 'Edit', 'johanjohansson' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
