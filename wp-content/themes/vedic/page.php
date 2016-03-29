<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */

get_header(); ?>
	
	<!-- content: start -->
	<div>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<div id="post-<?php the_ID(); ?>">
			<?php the_content(); ?>
		</div>
		<?php endwhile; endif; ?>
	</div>
	<!-- content: end -->
</div>
<!-- Main Content Wrapper: End -->


<?php get_footer(); ?>