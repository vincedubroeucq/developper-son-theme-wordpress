<?php 
/**
 * Main template file.
 * Used to display the list of posts.
 */

get_header(); ?>

<main class="site-main">
	<?php if( have_posts() ) : ?>
		<div class="wrapper main-wrapper maxw-xxl mx-auto py-7">
			<div class="grid posts-grid">
				<?php 
					while( have_posts() ) : the_post();
						get_template_part( 'template-parts/card' );
					endwhile;
				?>
			</div>
			<?php the_posts_pagination(); ?>
		</div>
	<?php else : ?>
		<div class="wrapper main-wrapper maxw-mlg mx-auto py-7">
			<?php get_template_part( 'template-parts/content-none' ); ?>
		</div>
	<?php endif; ?>
</main>

<?php get_footer();