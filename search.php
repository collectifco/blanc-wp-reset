<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

	<?php if (have_posts()) : ?>

		<h1><?php _e('Search Results for','html5reset'); ?> <em>&ldquo;<?php echo get_search_query(); ?>&rdquo;</em></h1>

		<?php post_navigation(); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>

				<?php posted_on(); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php post_navigation(); ?>

	<?php else : ?>

		<h1><?php _e('Nothing found for','html5reset'); ?> <em>&ldquo;<?php echo get_search_query(); ?>&rdquo;</em></h1>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
