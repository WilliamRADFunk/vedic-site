<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */

/*
Template Name: Blog
 */
get_header();

?>

<?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach ( $categories as $category ) {
	query_posts('category_name='. $category->slug);
?>

    <div class="blog-topic">
        <div class="sub-header"><?php echo esc_html( $category->name ); ?></div>
        <div class="doc-wrapper">

<?php 
if (have_posts()) : ?>

        <?php echo do_shortcode( '[ajax_load_more post_type="post" category="'.$category->slug.'" posts_per_page="4" scroll="false" button_label="More..."]'  ); ?>
 
        </div>
    </div>


<?php else : ?>
			<div class="doc-box" style="margin-top: 35px;">
				<h2 style="margin-bottom: 10px;"><?php _e('Not Found', 'nsomnium'); ?></h2>
				<p style=" line-height: 23px; margin-bottom: 10px;"><?php _e('Sorry, we can&acute;t find what you&acute;re looking for.', 'nsomnium'); ?></p>
				<?php get_search_form(); ?>
			</div>
		</div>
<?php 
endif; 
wp_reset_query();
?>

<?php
}
?>

<?php get_footer(); ?>




		
		