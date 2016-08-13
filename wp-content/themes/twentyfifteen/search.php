<?php
/**
 * The template for displaying search results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */

get_header(); ?>



<div class="layout-content">
	<div class="single-header">
		<div class="layout-container">
			<div class="row">
				<div class="col-xs-2"></div>
				<div class="col-xs-8">
					<a href="#" class="back-arrow">
						<span class="aw-long-arrow-left"></span>
					</a>
					<h2 class="single-head-heder">Пошук</h2>
					<div class="find">
						<span class="aw-search"></span>
						<form role="search" method="get" class="search-form" action="http://localhost:8888/">
							<input type="search" class="search-field"  value="" name="s">
							<input class="hidden" type="submit" class="search-submit screen-reader-text">
						</form>
					</div>
				</div>
				<div class="col-xs-2">
				</div>
			</div>
		</div>
	</div>
	<div class="archive-content-wrap search-wrap">
		<div class="layout-container">
			<div class="row">
				<div class="col-xs-2">

				</div>
				<div class="col-xs-8">
					<?php
					// Start the loop.
					while ( have_posts() ) : the_post(); ?>
						<div class="search-item">
							<a class="wrapping-link" href="<? the_permalink() ?>">
								<div class="row">

									<div class="col-xs-3">
										<? the_post_thumbnail(array(170, 200)) ?>
									</div>
									<div class="col-xs-9">
										<? the_excerpt() ?>
									</div>

								</div>
							</a>
						</div>
					<? endwhile; ?>

				</div>
				<div class="col-xs-2"></div>
			</div>
			<div class="row">
				<div class="col-xs-9"></div>
				<div class="col-xs-1">
					<h2 class="single-head-heder fin" title="ФИН ПАРНИШКА">fin</h2>
				</div>
				<div class="col-xs-2"></div>
			</div>

		</div>
	</div>

</div>








<?php get_footer(); ?>
