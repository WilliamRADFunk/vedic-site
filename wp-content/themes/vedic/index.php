<?php
/**
 * @package WordPress
 * @subpackage VEDIC_Theme
 */

get_header();

?>

<?php 
$categories = get_categories( array(
    'orderby' => 'name',
    'order'   => 'ASC'
) );
 
foreach ( $categories as $category ) {
    ?>


    <div class="blog-topic">
        <div class="sub-header"><?php echo esc_html( $category->name ); ?></div>
        <div class="doc-wrapper">

<?php 
query_posts('category_name='.$category->name);
if (have_posts()) : ?>

        <?php while (have_posts()) : the_post(); ?>

            <div id="post-<?php the_ID(); ?>" class="doc-box" onmouseover="showDoc(this)" onmouseout="hideDoc(this)" onclick="window.open('<?php the_permalink(); ?>','_parent');">
                <h6><?php the_title(); ?></h6>
                <div class="doc-overlay"></div>
				<?php
				if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				}
				else {
					echo '<img src="' . get_bloginfo( 'stylesheet_directory' ) . '/assets/thumbnail-con-ops.png" />';
				}
				?>	                
            </div>

		<?php endwhile; ?>

        
        </div>
        <div class="more" onclick="">More...</div>
    </div>


<?php else : ?>

		<h2 class="center"><?php _e('Not Found', 'vedic'); ?></h2>
		<p class="center"><?php _e('Sorry, but you are looking for something that isn&acute;t here.', 'vedic'); ?></p>
		<?php get_search_form(); ?>

<?php endif; ?>

<?php
}
?>

<?php get_footer(); ?>




		
		