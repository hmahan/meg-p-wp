
<?php 

	/*

		Template Name: ABOUTPAGE

	*/
	
?>

<?php get_header(); ?>

<div id="pictures">
    <ul>
	<li><img class="about_pictures" src="http://www.meganelainepauly.com/images/about1.jpg" /></li>
    <li><img class="about_pictures" src="http://www.meganelainepauly.com/images/about2.jpg" /></li>
    <li><img class="about_pictures" src="http://www.meganelainepauly.com/images/about3.jpg" /></li>
    </ul>
</div>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

			<div class="entry">
<div id="about">
				<?php the_content(); ?>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
            </div>

		</article>

		<?php endwhile; endif; ?>

<hr />
<?php get_footer(); ?>