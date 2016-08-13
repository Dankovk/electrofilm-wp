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
                        <h2 class="single-head-heder">Яна Антонец</h2>
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
                    <?
                    $post_id = get_the_ID();
                    $post_itself = get_post();
                    $content = $post_itself -> post_content;
                    $content_formatted = apply_filters('the_content', $content);
                    $thumbnail = get_the_post_thumbnail($post_id, array(170,170));
                    ?>
                    <div class="col-xs-2"></div>
                    <div class="col-xs-2">
                        <div class="single-dir-photo">
                            <? echo $thumbnail?>
                        </div>
                    </div>
                    <div class="col-xs-6">
                        <div class="single-dir-text">

                            <? echo $content_formatted ?>
                        </div>

                    </div>
                    <div class="col-xs2"></div>
                </div>
                        <?
                            $id = get_the_ID();
                            $posts = get_posts(array('post_type'=> 'movies', 'meta_key' => 'director', 'meta_value' => $id));
                            foreach ($posts as $post){
                                $ID = $post -> ID;
                                $movie = get_post($ID);
                                $title = $post -> post_title;
                                $excerpt = $post -> post_excerpt;
                                $gif = get_field('gif', $movie);
                                $preview = get_field('gif_preview', $movie);
                                $permalink = get_the_permalink($ID);
                        ?>

                                <div class="row director-film">
                                    <a href="<? echo $permalink?>">
                                        <div class="col-xs-2"></div>
                                        <div class="col-xs-4">
                                            <div class="dir-film-header">
                                                <h2><?  echo $title?></h2>
                                                <p>
                                                    <? echo $excerpt ?>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                        <div class="col-xs-4">
                                            <div class="dir-film-gif">
                                                <img class="animated-gif" data-src="<? echo $gif ?>" src="<? echo $preview ?>" alt="">
                                            </div>
                                        </div>


                                </div>
                                <? }?>



        </div>

    </div>

<? get_footer() ?>