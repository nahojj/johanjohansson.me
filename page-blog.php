<?php
/**
* Template Name: blog
* @package johanjohansson
*/
?>

<?php get_header('second'); ?>

<div class="quotes col-sm-12 text-center">
	<p class="quote" style="display: none">Love = Oxygen</p>
	<p class="quote" style="display: none">Beauty = price</p>
	<p class="quote" style="display: none">Keep a business diary</p>
</div><!-- quotes end -->

<div class="container">
	<section id="blog">
	<?php echo do_shortcode('[ajax_load_more post_type="post" author="1" posts_per_page="4" max_pages="3" pause="fasle" button_label="Äldre Inlägg"]'); ?>
	</section>
</div><!-- container end -->
<?php get_footer('sfooter'); ?>


