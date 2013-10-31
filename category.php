<?php /* Template Name: CATEGORYPAGE */ ?>
<?php get_header(); ?>
<div class="category_nav">
<ul>
    		<li><a href="http://meganelainepauly.com/category/medill-news-service/">MEDILL NEWS SERVICE</a></li>
    		<li><a href="http://meganelainepauly.com/category/multimedia/">MULTIMEDIA</a></li>
    		<li><a href="http://meganelainepauly.com/category/the-sunflower/">THE SUNFLOWER</a></li>
            <li><a href="http://meganelainepauly.com/category/upi-com/">UPI.com</a></li>
        </ul>
        </div>
<div id="main_container">
		<?php if (have_posts()) : ?>

 			<?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
            
			<?php /* If this is a category archive */ if (is_category()) { ?>
				<p class="work">Archive for the &#8216;<?php single_cat_title(); ?>&#8217; Category</p>
<hr />
			<?php } ?>

			<?php while (have_posts()) : the_post(); ?>
			
				<article <?php post_class() ?>>
				
						<h2 class="post-<?php the_ID(); ?>"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>
					
						
						<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>
                        

						<div class="summary">
							<?php the_excerpt(); ?>
						</div>

				</article>

			<?php endwhile; ?>

			<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>
			
	<?php else : ?>

		<h2>Nothing found</h2>

	<?php endif; ?>
    </div>
    
    <hr />

<?php get_footer(); ?>
