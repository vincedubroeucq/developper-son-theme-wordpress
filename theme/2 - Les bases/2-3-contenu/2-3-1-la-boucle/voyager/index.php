<?php 
/**
 * Main template file.
 * Used to display the list of posts.
 */

get_header(); 
?>

<main class="site-main">
	<div class="wrapper main-wrapper maxw-xxl mx-auto py-7">
		<div class="grid posts-grid">
			<article class="post card maxw-sm bg-grey-0" v-for="post in posts">
				<div class="wrapper card-wrapper p-5">
					<a class="post-thumbnail block relative" :href="post.url">
						<img :src="post.image" />
					</a>
					<div class="post-summary">
						<h2 class="entry-title txt-6 mt-3 mb-1">{{ post.title }}</h2>
						<p class="excerpt">For those who have seen the Earth from space, <strong>and for the hundreds and perhaps thousands more who will</strong>, the experience most certainly changes your perspective.</p>
					</div>
				</div>
				<footer class="post-footer grey-3"></footer>
			</article>
		</div>
		<nav class="posts-pagination">
			Pagination goes here
		</nav>
	</div>
</main>

<?php get_footer();