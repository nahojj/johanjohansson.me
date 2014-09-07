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
				<?php the_time('Y/m/d'); ?>
			</div><!-- .blogpost-meta end -->
		</header><!-- .blogpost-header end -->

		<div class="blogpost-image">
			<?php the_post_thumbnail('full', array('class' => 'aligncenter img-responsive center-block')); ?>
		</div><!-- .blogpost-image end -->

		<div class="blogpost-content text-justify">
			<?php the_content(); ?>

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

			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'johanjohansson' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .blogpoost-content -->

		<div class="comments">
			<div id="disqus_thread"></div>
    		<script type="text/javascript">
        	/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        	var disqus_shortname = 'johanjohansson'; // required: replace example with your forum shortname
		        /* * * DON'T EDIT BELOW THIS LINE * * */
		        (function() {
		            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
		            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
		            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
		        })();
		    </script>
    		<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    		<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			</div><!-- .comment end -->

			<div class="text-center">
				<a class="blogpost-button" href="<?php echo get_permalink( 10 ); ?>">Tillbaka</a>
			</div>

			<footer class="entry-footer">
				<?php edit_post_link( __( 'Edit', 'johanjohansson' ), '<span class="edit-link">', '</span>' ); ?>
			</footer><!-- .entry-footer -->
	</section>
</article><!-- #post-## -->
