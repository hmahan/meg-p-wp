
<?php 

	/*

		Template Name: CONTACTPAGE

	*/
	
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
<div class="contact">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
            </div>

		</article>

		<?php endwhile; endif; ?>

<hr />
<?php get_footer(); ?>