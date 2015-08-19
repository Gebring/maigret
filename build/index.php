<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * e.g., it puts together the home page when no home.php file exists.
 *
 * Learn more: {@link https://codex.wordpress.org/Template_Hierarchy}
 *
 * @package Gebring.se
 * @subpackage Maigret2
 * @since Maigret 1.1
 */

get_header(); ?>


<section style="background-image: url('<?php the_field('header-background'); ?>');" class="o-pageSection one">
	<article class="l-gutter">
		<h2 class="a-header__h2--header"><?php the_field('h2'); ?></h2>		
	</article>
</section>
<section class="o-pageSection two">
	<article class="l-gutter">
		<h3 class="a-section__h3 two"><?php the_field('h3'); ?></h3>
		<p class="a-section__p two"><?php the_field('header-text'); ?>     
			<a class="a-section__a link" href="<?php the_field('read-more-link'); ?>"><?php the_field('read-more-text'); ?></a></p>
		

		<div class="o-section__frame">
			<div class="m-section__smoke"><?php require "smoke.php"; ?></div>
			<img src="<?php the_field('header-image'); ?>" class="a-section__img two"/>
		</div>
	</article>
</section>
<section class="o-pageSection three">
	<article class="l-gutter l-container">
		<a class="a-section__a" href="<?php the_field('section-three-link'); ?>">
			<div class="text l-span-A12 l-pre-C1 l-span-C7">
				<h3 class="a-section__h3 three"><?php the_field('section-three-headline'); ?></h3>
				<p class="a-section__p three"><?php the_field('section-three-text'); ?></p>
			</div>
			<div class="l-span-A12 l-span-C4">
				<img src="<?php the_field('section-three-image'); ?>" class="a-section__img three" />
				<div class="white-circle"></div>
			</div>
		</a>	
	</article>
</section>

<section class="o-pageSection four">
	<article class="l-gutter l-container">
		<a class="a-section__a" href="<?php the_field('section-four-link'); ?>">
			<h3 class="a-section__h3 four"><?php the_field('section-four-headline'); ?></h3>
			<p class="a-section__p four"><?php the_field('section-four-text'); ?></p>
			<div class="l-span-A8 l-pre-A2">
				<img src="<?php the_field('section-four-image'); ?>" class=" a-section__img four" />
			</div>
		</a>
	</article>
</section>


<?php get_footer(); ?>