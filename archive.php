<?php
/**
 * @package WordPress
 * @subpackage HTML5-Reset-WordPress-Theme
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>

		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>

			<?php /* If this is a category archive */ if (is_category()) { ?>
				<h1><?php _e('Archive for the','html5reset'); ?> &#8216;<?php single_cat_title(); ?>&#8217; <?php _e('Category','html5reset'); ?></h1>

			<?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
				<h1><?php _e('Posts Tagged','html5reset'); ?> &#8216;<?php single_tag_title(); ?>&#8217;</h1>

			<?php /* If this is a daily archive */ } elseif (is_day()) { ?>
				<h1><?php _e('Archive for','html5reset'); ?> <?php the_time('F jS, Y'); ?></h1>

			<?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
				<h1><?php _e('Archive for','html5reset'); ?> <?php the_time('F, Y'); ?></h1>

			<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
				<h1 class="pagetitle"><?php _e('Archive for','html5reset'); ?> <?php the_time('Y'); ?></h1>

			<?php /* If this is an author archive */ } elseif (is_author()) { ?>
				<h1 class="pagetitle"><?php the_author(); ?> <?php _e('Author Archive','html5reset'); ?></h1>

			<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
				<h1 class="pagetitle"><?php _e('Blog Archives','html5reset'); ?></h1>

			<?php } ?>

			<?php post_navigation(); ?>

			<?php while (have_posts()) : the_post(); ?>

				<article <?php post_class() ?>>

						<h2 id="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

						Posted <a href="<?php the_permalink();?>"><?php the_time('j F, Y'); ?></a> by <?php the_author_posts_link(); ?>

						<div class="entry">
							<?php the_content(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php post_navigation(); ?>

	<?php else : ?>

		<h2><?php _e('Nothing Found','html5reset'); ?></h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
