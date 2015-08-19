<?php
/**
* Template Name: Vad hände var
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
					<h3 class="a-section__h3"><?php echo the_title(); ?></h3>
					
					<div class="l-span-A12 l-pre-C2  l-span-C8">
						<div class="o-section__frame">
							<div class="m-section__search">
								<p><span class="icon-search"></span>boktitel/mordplats</p>
								<div class="arrondissements-list__cover">
									<ul class="arrondissements-list">
										<li value="crack" id="a-one" class="list-item one">Maigret o den ensamma mannen</li>
										<li id="a-one" class="list-item two">Maigret o oskulden</li>
										<li id="a-one" class="list-item three">Maigrets jul</li>
										<li id="a-two" class="list-item three">Maigret och den stolliga damen</li>
										<li id="a-three" class="list-item three">Maigret o den dödsdömde</li>
										<li id="a-three" class="list-item three">Maigret o mannen på bänken</li>
										<li id="a-four" class="list-item three">Maigret o clocharden</li>
										<li id="a-four" class="list-item three">Madame Maigrets väninna</li>
										<li id="a-four" class="list-item three">Maigret o den försynte tjuven</li>
										<li id="a-sex" class="list-item three">Maigret bland hyggligt folk</li>
										<li id="a-seven" class="list-item three">Maigret i fina världen</li>
										<li id="a-eight" class="list-item three">Maigret tvekar</li>
										<li id="a-eight" class="list-item three">Maigret på hotell Majestic</li>
										<li id="a-eight" class="list-item three">Maigret på resa</li>
										<li id="a-eight" class="list-item three">Maigret har roligt</li>
										<li id="a-eight" class="list-item three">Maigret på fel spår</li>
										<li id="a-eight" class="list-item three">Maigret och monsieur Charles</li>
										<li id="a-nine" class="list-item three">Maigret på nattklubb</li>
										<li id="a-nine" class="list-item three">Maigrets barndomsvän</li>
										<li id="a-nine" class="list-item three">Maigret o den unga döda</li>
										<li id="a-nine" class="check list-item three">Maigrets första fall</li>
										<li id="a-nine" class="list-item three">Maigret i rätten</li>
										<li id="a-nine" class="list-item three">Maigret Lognon o proffsen</li>
										<li id="a-nine" class="list-item three">Maigret 1934 Rue Fontaine</li>
										<li id="a-ten" class="list-item three">Maigret o kroppen utan huvud</li>
										<li id="a-ten" class="list-item three">Maigret och det ljuva livet</li>
										<li id="a-eleven" class="list-item three">Maigret o hans revolver</li>
										<li id="a-eleven" class="list-item three">Maigret o mannen som måste döda</li>
										<li id="a-thirtteen" class="list-item three">Maigret o de motsträviga vittnena</li>
										<li id="a-fourteen" class="list-item three">Maigrets onda aningar</li>
										<li id="a-fourteen" class="list-item three">Maigret o miss Europa</li>
										<li id="a-fifteen" class="list-item three">Maigret o hans tjuv</li>
										<li id="a-fifteen" class="list-item three">Maigret hos ministern</li>
										<li id="a-sixteen" class="list-item three">Maigret anförtror sig</li>
										<li id="a-seventeen" class="list-item three">Maigrets tålamod</li>
										<li id="a-seventeen" class="list-item three">Maigret tar miste</li>
										<li id="a-seventeen" class="list-item three">Maigret o vinhandlaren</li>
										<li id="a-seventeen" class="list-item three">Maigret flyttar hemifrån</li>
										<li id="a-eighteen" class="list-item three">Maigret o spöket</li>
										<li id="a-eighteen" class="list-item three">Maigret o lördagsklienten</li>
										<li id="a-eighteen" class="list-item three">Maigret blir sannspådd</li>
										<li id="a-eighteen" class="list-item three">Maigret o tjallaren</li>
										<li id="a-eighteen" class="list-item three">Maigret gillrar en fälla</li>
										<li id="a-twenty" class="list-item three">Maigret blir arg</li>
									</ul>
								</div>
							</div>

							<div class="o-arrondissements one">
								<p class="m-arron-num one m-arron-num-highlighted">1</p>
								<div class="m-crime-text one">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-one');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-one'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements two">
								<p class="m-arron-num two m-arron-num-highlighted">2</p>
								<div class="m-crime-text two">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-two');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-two'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements three">
								<p class="m-arron-num three m-arron-num-highlighted">3</p>
								<div class="m-crime-text three">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-three');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-three'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements four">
								<p class="m-arron-num four m-arron-num-highlighted">4</p>
								<div class="m-crime-text four">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-four');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-four'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements five">
								<p class="m-arron-num five m-arron-num-highlighted">5</p>
								<div class="m-crime-text five">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-five');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-five'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements six">
								<p class="m-arron-num six m-arron-num-highlighted">6</p>
								<div class="m-crime-text six">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-six');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-six'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements seven">
								<p class="m-arron-num seven m-arron-num-highlighted">7</p>
								<div class="m-crime-text seven">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-seven');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-seven'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements eight">
								<p class="m-arron-num eight m-arron-num-highlighted">8</p>
								<div class="m-crime-text eight">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-eight');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-eight'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements nine">
								<p class="m-arron-num nine m-arron-num-highlighted">9</p>
								<div class="m-crime-text nine">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-nine');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-nine'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements ten">
								<p class="m-arron-num ten plus-ten m-arron-num-highlighted">10</p>
								<div class="m-crime-text ten">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-ten');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-ten'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements eleven">
								<p class="m-arron-num eleven plus-ten m-arron-num-highlighted">11</p>
								<div class="m-crime-text eleven">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-eleven');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-eleven'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements twelve">
								<p class="m-arron-num twelve plus-ten m-arron-num-highlighted">12</p>
								<div class="m-crime-text twelve">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-twelve');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-twelve'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements thirteen">
								<p class="m-arron-num thirteen plus-ten m-arron-num-highlighted">13</p>
								<div class="m-crime-text thirteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-thirteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-thirteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements fourteen">
								<p class="m-arron-num fourteen plus-ten m-arron-num-highlighted">14</p>
								<div class="m-crime-text fourteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-fourteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-fourteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements fifteen">
								<p class="m-arron-num fifteen plus-ten m-arron-num-highlighted">15</p>
								<div class="m-crime-text fifteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-fifteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-fifteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements sixteen">
								<p class="m-arron-num sixteen plus-ten m-arron-num-highlighted">16</p>
								<div class="m-crime-text sixteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-sixteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-sixteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements seventeen">
								<p class="m-arron-num seventeen plus-ten m-arron-num-highlighted">17</p>
								<div class="m-crime-text seventeen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-seventeen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-seventeen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements eighteen">
								<p class="m-arron-num eighteen plus-ten m-arron-num-highlighted">18</p>
								<div class="m-crime-text eighteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-eighteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-eighteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements nineteen">
								<p class="m-arron-num nineteen plus-ten m-arron-num-highlighted">19</p>
								<div class="m-crime-text nineteen">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-nineteen');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-nineteen'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>

							<div class="o-arrondissements twenty">
								<p class="m-arron-num twenty plus-ten m-arron-num-highlighted">20</p>
								<div class="m-crime-text twenty">
									<p class="close icon-cross"></p>
									<?php 

									$post_object = get_field('arrondissement-twenty');

									if( $post_object ): 

										// override $post
										$post = $post_object;
										setup_postdata( $post ); 

										?>
									    <div>
									    	<h3><?php the_title(); ?></h3>
									    	<p><?php the_content(); ?></p>
									    	<?php the_field('arrondissement-twenty'); ?>
									    </div>
									    <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
									<?php endif; ?>
								</div>
							</div>
							

							<p><?php echo the_content(); ?></p>	
							</hr>

						</div>
					</div>
				</article>
				<?php	
			}
	endif
	?>
</section>

	<?php get_footer();?>