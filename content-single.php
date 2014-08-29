<?php
/**
 * @package johanjohansson
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-sm-12'); ?>>
	<section id="blogpost">
		<header class="blogpost-header">
			<?php the_title( '<h1 class="blogpost-title text-center">', '</h1>' ); ?>

			<div class="blogpost-meta text-center">
				<?php //johanjohansson_posted_on('F j, g:i A'); ?>
				<?php the_time('Y/m/d'); ?>
			</div><!-- .blogpost-meta end -->
		</header><!-- .blogpost-header end -->

		<div class="blogpost-image">
			<?php the_post_thumbnail('full', array('class' => 'aligncenter img-responsive center-block')); ?>
		</div><!-- .blogpost-image end -->

		<div class="blogpost-content text-justify">
			<?php the_content(); ?>

			<div class="tags">
				<div class="tag">
					<?php the_tags('', '', ''); ?>
				</div><!-- .tag end -->
			</div><!-- .tags end -->

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'johanjohansson' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .blogpoost-content -->

		<!--<div id="blogpost-latest" class="row">
			<?php
				$args = array( 'posts_per_page' => 4, 'order'=> 'ASC', 'orderby' => 'title' );
				$postslist = get_posts( $args );

				foreach ( $postslist as $post ) :
  					setup_postdata( $post ); ?>

					<div class="last-post col-sm-3">
						<h4 class="text-center"><a href="<?php echo get_permalink($id); ?>"><?php the_title(); ?></a></h4>
						<p class="text-center"><?php the_date(); ?></p>
						<?php wp_trim_words(the_excerpt(), 50); ?>
					</div>
			<?php
				endforeach;
				wp_reset_postdata();
			?>
		</div>-->

		<div class="text-center">
			<a class="blogpost-button" href="<?php echo get_permalink( 10 ); ?>">Tillbaka</a>
		</div>

		<footer class="entry-footer">
			<?php
				/* translators: used between list items, there is a space after the comma */
				//$category_list = get_the_category_list( __( ', ', 'johanjohansson' ) );

				/* translators: used between list items, there is a space after the comma */
				//$tag_list = get_the_tag_list( '', __( ', ', 'johanjohansson' ) );

				//if ( ! johanjohansson_categorized_blog() ) {
					// This blog only has 1 category so we just need to worry about tags in the meta text
				//	if ( '' != $tag_list ) {
					//	$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'johanjohansson' );
				//	} else {
				//		$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'johanjohansson' );
				//	}

				//} else {
					// But this blog has loads of categories so we should probably display them here
				//	if ( '' != $tag_list ) {
				//		$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'johanjohansson' );
				//	} else {
				//		$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'johanjohansson' );
				//	}

				//} // end check for categories on this blog

			//	printf(
			//		$meta_text,
			//		$category_list,
			//		$tag_list,
			//		get_permalink()
			//	);
			?>

			<?php edit_post_link( __( 'Edit', 'johanjohansson' ), '<span class="edit-link">', '</span>' ); ?>
		</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-## -->
