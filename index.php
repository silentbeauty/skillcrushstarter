<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Skillcrush_Starter
 * @since Skillcrush Starter 1.0
 */

get_header(); ?>

<section class="index-page">		
	<div class="main-content">
		<?php if ( have_posts() ): ?>
			<?php while ( have_posts() ) : the_post(); ?>
	            <?php get_template_part('content-blog', get_post_format()); ?>
            <?php endwhile; ?>
		<?php endif; ?>
	</div>
	
	<?php get_sidebar(); ?>

    <?php if ( have_posts() ): ?>
        <div id="navigation" class="container">
            <div class="left"><?php next_posts_link('&larr; Older Posts'); ?></div>
            <div class="right"><?php previous_posts_link('Newer Posts &rarr;'); ?></div>
        </div>
    <?php endif; ?>
</section>

<?php get_footer(); ?>

