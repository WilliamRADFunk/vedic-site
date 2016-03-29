<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */

get_header(); ?>

	<!-- content: start -->
	<div id="post">

	<!-- categories: end -->
	<?php if (have_posts()) : ?>

		<?php while (have_posts()) : the_post(); ?>

		<div id="post-img">
            <div class="sub-header"><?php echo strtoupper(get_the_title()) ?></div>
            <div class="head-wrapper">
                <div class="head-box">
	                <?php
					if ( has_post_thumbnail() ) {
									the_post_thumbnail();
					}
					else {
						echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/thumbnail-con-ops.png" />';
					}
					?>
				</div>
            </div>
        </div>
        <div id="post-body">
            <div id="author">
                <?php echo get_avatar( get_the_author_id() ); ?>
                <p id="name">by <a href=""><?php echo get_the_author() ?></a></p>
                <p id="post-date">March 9th, 2016</p>
            </div>
            <div id="post-content"><?php the_content('Read the rest of this entry &raquo;'); ?></div>
        </div>

		<?php endwhile; ?>
    <div class="blog-topic">
        <div class="sub-header">Documentation</div>
        <div class="doc-wrapper">
		 <?php echo do_shortcode( '[ajax_load_more post_type="post" category="documentation" posts_per_page="4" scroll="false" button_label="More..."]'  ); ?>
		</div>
	</div>
	<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'vedic'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&acute;t here.', 'vedic'); ?></p>
		<?php get_search_form(); ?>

	<?php endif; ?>
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->

<?php get_footer(); ?>




		
		