<?php
/**
* Template Name: Mail
*/


get_header();
?>
<section class="o-pageSection">
	<?php
	if(have_posts()):
			while ( have_posts() ) {
				the_post();
				?>
				<article class="l-gutter l-container">
					
					<div class="l-span-A10 l-pre-A1 l-span-B8 l-pre-B2">
						<h3 class="a-section__h3"><?php echo the_title(); ?></h3>	
						<p><?php echo the_content(); ?></p>
					</div>	
					</hr>

				</article>
				<?php	
			}
	endif
	?>
</section>
<?php get_footer();?>