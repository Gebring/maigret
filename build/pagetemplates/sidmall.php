<?php
/**
* Template Name: Sidmall	
*/


get_header();
?>
<section class="o-pageSection o-section__frame">
	<?php
	if(have_posts()):
			while ( have_posts() ) {
				the_post();
				?>
				<article class="l-container">
					
					<div class="l-span-A10 l-pre-A1 l-span-B10">
						<h3 class="a-section__h3"><?php echo the_title(); ?></h3>	
						<span class="a-section__p"><?php
						$getContent = get_the_content();
						$contentWithBreaks = wpautop( $getContent, true );
						echo $contentWithBreaks;
						?>
						</span>
					</div>	
					</hr>

				</article>
				<?php	
			}
	endif
	?>
	<img src="<?php the_field('sidmall-image'); ?>" class="a-section__img--skugga" />
</section>

<?php get_footer();?>