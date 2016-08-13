<?php
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
                    <h2 class="single-head-heder">Рецензії</h2>
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
    <div class="archive-content-wrap">
        <div class="layout-container">
            <div class="row">
                <div class="col-xs-2">

                </div>
                <div class="col-xs-8">
                    
                        <? while ( have_posts() ) : the_post(); ?>
                            <?
                                $id = get_the_ID();
                                $movie_obj = get_field('movie', $id);
                                $movie_link =get_permalink($movie_obj -> ID);
                            ?>
                                <div class="row review-row">
                                       <div class="col-xs-2 review-thumbnail">
                                           <? the_post_thumbnail(array(300, 79)) ?>
                                       </div>
                                    <div class="col-xs-1"></div>
                                    <div class="col-xs-9">
                                        <h1><a href="<? echo $movie_link?>"><? the_title() ?></a></h1>
                                        <p><? the_content() ?></p>
                                    </div>
                                    <div class="col-xs-9"></div>
                                    <div class="col-xs-3">
                                        <a href="<? the_field('link', $id)?>" class="btn">Читати</a>
                                        <a href="<? echo $movie_link ?>" style="margin-right: 20px" class="btn">Дивитись</a>
                                    </div>
                                </div>
                        <? endwhile; ?>

                    
                </div>
                <div class="col-xs-2"></div>
            </div>
            <div class="row">
                <div class="col-xs-9"></div>
                <div class="col-xs-1">
                    <h2 class="single-head-heder fin">fin</h2>
                </div>
                <div class="col-xs-2"></div>
            </div>

        </div>
    </div>

</div>




<? get_footer() ?>
