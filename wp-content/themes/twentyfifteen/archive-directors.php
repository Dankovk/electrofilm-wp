<?php
get_header(); ?>



    <div class="layout-content">
        <div class="single-header">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-2"></div>
                    <div class="col-xs-8">
                        <a href="/#directors" class="back-arrow">
                            <span class="aw-long-arrow-left"></span>
                        </a>
                        <h2 class="single-head-heder">Режисери</h2>
                        <div class="find">
                            <span class="aw-search"></span>
                            <form role="search" method="get" class="search-form" action="http://electrofilm22.esy.es/">
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
                        <div class="row">

                            <? while ( have_posts() ) : the_post(); ?>
                             <? $id = get_the_ID();
                                $post = get_post($id);
                                ?>
                                <? if($post->post_parent == 0){?>
                                    <div class="col-xs-3">
                                        <a href="<? the_permalink() ?>" class="director-arc">
                                            <? the_post_thumbnail( array(170, 180)); ?>
                                            <span class="director-name"><? the_title() ?></span>
                                        </a>
                                    </div>
                                <? } ?>

                            <? endwhile; ?>

                        </div>
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
