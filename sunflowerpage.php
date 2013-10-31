
<?php 

	/*

		Template Name: CATEGORYPAGE

	*/
	
?>

<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
		<article class="post" id="post-<?php the_ID(); ?>">

		
			<div class="entry">

				<?php the_content(); ?>
                
                <div id="categorylinks">
        <ul>
        	<li><a href="http://www.meganelainepauly.com/category/medill-news-service/">Medill News Service</a></li>
            <li><a href="http://www.meganelainepauly.com/category/medill-justice-project/">Medill Justice Prokect</a></li>
            <li><a href="http://www.meganelainepauly.com/sunflower/">The Sunflower</a></li>
            <li><a href="http://www.meganelainepauly.com/category/multimedia/">Multimedia</a></li>
            </ul>
        </div>

				<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>

			</div>
            </div>

		</article>

		<?php endwhile; endif; ?>

<hr />
<?php get_footer(); ?>