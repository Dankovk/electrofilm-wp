<?php
get_header(); ?>


<div class="layout-content">
    <div class="single-header">
        <div class="layout-container">
            <div class="row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <a href="/movies" class="back-arrow">
                        <span class="aw-long-arrow-left"></span>
                    </a>
                    <h2 class="single-head-heder"><? echo get_the_title() ?></h2>
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
            <div class="row film-iframe-row">
                <div class="col-xs-2"></div>
                <div class="col-xs-8">
                    <?
                    $post_id = get_the_ID();
                    $post_itself = get_post();
                    $content = $post_itself -> post_content;
                    $content_formatted = apply_filters('the_content', $content);
                    $thumbnail = get_the_post_thumbnail($post_id, array(170,170));
                    ?>
                    <? echo $content_formatted?>
                </div>
                <div class="col-xs-2"></div>
            </div>

                <div class="tabs-film">
                   <div class="row">
                       <div class="col-xs-2"></div>
                       <div class="col-xs-8">
                           <div class="film-tabs" role="tabpanel">
                               <ul role="tablist">
                                   <li role="presentation" class="active">
                                       <a data-target="#title1" aria-controls="title1" role="tab" data-toggle="tab" href="#">
                                           Опис
                                       </a>
                                   </li>

                                   <li role="presentation" class="">
                                       <a data-target="#title2" aria-controls="title2" role="tab" data-toggle="tab" href="#">
                                           Інфо
                                       </a>
                                   </li>

                                   <li role="presentation" class="">
                                       <a data-target="#title3" aria-controls="title3" role="tab" data-toggle="tab" href="#">
                                           Рецензії
                                       </a>
                                   </li>
                                   <li role="presentation" class="">
                                       <a data-target="#title4" aria-controls="title4" role="tab" data-toggle="tab" href="#">
                                           Фестивалі
                                       </a>
                                   </li>
                                   <li role="presentation" class="">
                                       <a style="float: right;margin-right: 0;" data-target="#title5" aria-controls="title5" role="tab" data-toggle="tab" href="#">
                                           Більше фільмів
                                       </a>
                                   </li>

                               </ul>
                           </div>
                       </div>
                       <div class="col-xs-2">

                       </div>

                   </div>



                        <!--========================================-->

                        <div class="main-tabs tab-content movie-tab-content">

                            <div class="tab-pane fade in active" role="tabpanel" id="title1">
                                <div class="row">
                                    <div class="col-xs-2">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="tab-cont-abs">
                                            <p><? echo the_field('description') ?></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>

                            <div class="tab-pane fade" role="tabpanel" id="title2">
                                <div class="row">
                                    <div class="col-xs-2">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="tab-cont-abs">
                                            <p><? echo the_field('info') ?></p>
                                        </div>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>

                            <div class="tab-pane fade" role="tabpanel" id="title3">
                                <div class="row">
                                    <div class="col-xs-2">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="tab-cont-abs">
                                            <?
                                            $id = get_the_ID();
                                            $posts = get_posts(array('post_type'=> 'reviews', 'meta_key' => 'movie', 'meta_value' => $id));
                                            foreach ($posts as $post){
                                                $IDrev = $post -> ID;
                                                $review = get_post($IDrev);
                                                $title = $post -> post_title;
                                                $excerpt = $post -> post_excerpt;
                                                $thumbnail = get_the_post_thumbnail($post -> ID);

                                                ?>
                                                <div class="row review-row movie-rev">
                                                    <div class="col-xs-2 review-thumbnail">
                                                        <? echo $thumbnail ?>
                                                    </div>
                                                    <div class="col-xs-1"></div>
                                                    <div class="col-xs-9">
                                                        <p><? echo $excerpt ?></p>
                                                    </div>
                                                </div>
                                            <?} ?>
                                        </div>
<!--                                        --><?php //while( have_rows('reviews') ): the_row();
//                                        $review = get_sub_field('review_text');
//                                        $reviewLink = get_sub_field('review_link');
//                                        ?>
<!--                                        <a class="no-decoration-link" href="--><?// echo $reviewLink ?><!--">-->
<!--                                            <p>--><?// echo $review ?><!--</p>-->
<!--                                        </a>-->
<!--                                        --><?// endwhile; ?>

                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="title4">
                                <div class="row">
                                    <div class="col-xs-2">
                                    </div>
                                    <div class="col-xs-8">
                                        <div class="tab-cont-abs">
                                            <?php while( have_rows('fests') ): the_row();
                                                $fest = get_sub_field('fest');
                                                $festLink = get_sub_field('fest_link');
                                                ?>
                                                <a class="no-decoration-link" href="<? echo $festLink ?>">
                                                    <p><? echo $fest ?></p>
                                                </a>
                                            <? endwhile; ?>
                                        </div>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>
                            <div class="tab-pane fade" role="tabpanel" id="title5">
                                <div class="row">
                                    <div class="col-xs-2"></div>
                                    <div class="tab-cont-abs">
                                        <?php $posts = get_posts( array(
                                            'orderby' => 'rand',
                                            'numberposts' => 8,
                                            'post_type' => 'movies'
                                        ) );
                                        foreach($posts as $post) : ?>
                                            <div class="col-xs-1">
                                                <a href="<? the_permalink() ?>" class="linked-film">
                                                    <? the_post_thumbnail(70,113) ?>
                                                </a>
                                            </div>
                                        <?php endforeach; ?>
                                    </div>
                                    <div class="col-xs-2"></div>
                                </div>
                            </div>

                        </div>
                </div>


        </div>
    </div>

</div>


<? get_footer() ?>
