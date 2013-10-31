
<?php get_header(); ?>
<div id="main_container">
    	<p class="work">LATEST WORK</p>
    	<hr />
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
<div class="story_summary">
			<h2 class="headline"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
            
			<?php /*?><?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?><?php */?>

			<div class="summary">
				<?php the_excerpt(); ?>
			</div>

			<footer class="story_footer">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?>
			</footer>
           </div> 
            <div class="teaser">
	<?php
		if ( has_post_thumbnail() ) {
		// the current post has a thumbnail
		the_post_thumbnail();
		} else {
		// the current post lacks a thumbnail
	}
?>
</div>

		</article>

	<?php endwhile; ?>



	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>

<hr class="invisible" />
<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
<hr />
	
<?php get_footer(); ?>
