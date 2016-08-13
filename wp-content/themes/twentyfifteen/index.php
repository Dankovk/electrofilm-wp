<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ELECTRO.FILM</title>
    <meta name="description" content="ELECTRO.FILM>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon block -->
    <!-- Images generated from a single 260x260 image by http://realfavicongenerator.net/ -->
    <link rel="shortcut icon" href="<? echo get_template_directory_uri() ?>/favicon.ico">


    <meta name="msapplication-TileColor" content="#d10d3f">
    <meta name="msapplication-TileImage" content="mstile-144x144.png">
    <meta name="msapplication-config" content="browserconfig.xml">
    <!-- / Favicon block -->

    <link rel="stylesheet" href="<? echo get_template_directory_uri() ?>/styles/main.css">


    <!-- Rebuilt -->
    <script src="<? echo get_template_directory_uri() ?>/scripts/vendor/modernizr-2.8.3.min.js"></script>
    <!-- /



    <!-- -->
    <style>
        #loader-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1000;
        }
        #loader {
            display: block;
            position: relative;
            left: 50%;
            top: 50%;
            width: 150px;
            height: 150px;
            margin: -75px 0 0 -75px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #fff!important;

            -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
            animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */

            z-index: 1001;
        }

        #loader:before {
            content: "";
            position: absolute;
            top: 5px;
            left: 5px;
            right: 5px;
            bottom: 5px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #fff!important;

            -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
            animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
        }

        #loader:after {
            content: "";
            position: absolute;
            top: 15px;
            left: 15px;
            right: 15px;
            bottom: 15px;
            border-radius: 50%;
            border: 3px solid transparent;
            border-top-color: #fff!important;

            -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */
            animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */
        }

        @-webkit-keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);  /* IE 9 */
                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
            }
            100% {
                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);  /* IE 9 */
                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
            }
        }
        @keyframes spin {
            0%   {
                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(0deg);  /* IE 9 */
                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */
            }
            100% {
                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */
                -ms-transform: rotate(360deg);  /* IE 9 */
                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */
            }
        }

        #loader-wrapper .loader-section {
            position: fixed;
            width: 100%;
            height: 51%;
            left: 0;
            right: 0;
            background: #222222;
            z-index: 1000;
            -webkit-transform: translateY(0);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateY(0);  /* IE 9 */
            transform: translateY(0);  /* Firefox 16+, IE 10+, Opera */
        }

        #loader-wrapper .loader-section.section-left {
            top:0;
        }

        #loader-wrapper .loader-section.section-right {
            bottom:0;
        }

        /* Loaded */
        .loaded #loader-wrapper .loader-section.section-left {
            -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateY(-100%);  /* IE 9 */
            transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */

            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        }

        .loaded #loader-wrapper .loader-section.section-right {
            -webkit-transform: translateY(100%);  /* Chrome, Opera 15+, Safari 3.1+ */
            -ms-transform: translateY(100%);  /* IE 9 */
            transform: translateY(100%);  /* Firefox 16+, IE 10+, Opera */

            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);
        }
        .svg-cont{
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }
        .loaded .svg-cont{
            opacity: 0;
        }
        .loaded #loader {
            opacity: 0;
            -webkit-transition: all 0.3s ease-out;
            transition: all 0.3s ease-out;
        }
        .loaded #loader-wrapper {
            visibility: hidden;

            /*-webkit-transform: translateY(-100%);  !* Chrome, Opera 15+, Safari 3.1+ *!*/
            /*-ms-transform: translateY(-100%);  !* IE 9 *!*/
            /*transform: translateY(-100%);  !* Firefox 16+, IE 10+, Opera *!*/

            -webkit-transition: all 0.3s 1s ease-out;
            transition: all 0.3s 1s ease-out;
        }

        /* JavaScript Turned Off */
        .no-js #loader-wrapper {
            display: none;
        }
        .no-js h1 {
            color: #222222;
        }

        #content {
            margin: 0 auto;
            padding-bottom: 50px;
            width: 80%;
            max-width: 978px;
        }






        /* ==========================================================================
           Helper classes
           ========================================================================== */

        /*
         * Image replacement
         */

        .ir {
            background-color: transparent;
            border: 0;
            overflow: hidden;
            /* IE 6/7 fallback */
            *text-indent: -9999px;
        }

        .ir:before {
            content: "";
            display: block;
            width: 0;
            height: 150%;
        }

        /*
         * Hide from both screenreaders and browsers: h5bp.com/u
         */

        .hidden {
            display: none !important;
            visibility: hidden;
        }

        /*
         * Hide only visually, but have it available for screenreaders: h5bp.com/v
         */

        .visuallyhidden {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px;
        }

        /*
         * Extends the .visuallyhidden class to allow the element to be focusable
         * when navigated to via the keyboard: h5bp.com/p
         */

        .visuallyhidden.focusable:active,
        .visuallyhidden.focusable:focus {
            clip: auto;
            height: auto;
            margin: 0;
            overflow: visible;
            position: static;
            width: auto;
        }

        /*
         * Hide visually and from screenreaders, but maintain layout
         */

        .invisible {
            visibility: hidden;
        }

        /*
         * Clearfix: contain floats
         *
         * For modern browsers
         * 1. The space content is one way to avoid an Opera bug when the
         *    `contenteditable` attribute is included anywhere else in the document.
         *    Otherwise it causes space to appear at the top and bottom of elements
         *    that receive the `clearfix` class.
         * 2. The use of `table` rather than `block` is only necessary if using
         *    `:before` to contain the top-margins of child elements.
         */
        #loader-wrapper .loader-section{
            background: #000!important;
        }
        #loader-wrapper{
            z-index: 99999999;
        }

    </style>
</head>
<body>
<div id="loader-wrapper">
    <div class="svg-cont">
        <svg version="1.1" id="Контакти" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
             y="0px" viewBox="0 0 1280 667" style="enable-background:new 0 0 1280 667;" xml:space="preserve">
<style type="text/css">
    .st0{fill:#FAFAFA;}
</style>
            <g id="XMLID_1_">
                <path id="XMLID_3_" class="st0 preload-letter pl1" d="M551.8,342v-18.4h11.8v2.8h-8.5v4.5h7.5v2.8h-7.5v5.4h9.1v2.8H551.8z"/>
                <path id="XMLID_5_" class="st0 preload-letter pl2" d="M578.9,339.1v2.9h-11.6v-18.4h3.3v15.5H578.9z"/>
                <path id="XMLID_43_" class="st0 preload-letter pl3" d="M581.4,342v-18.4h11.8v2.8h-8.5v4.5h7.5v2.8h-7.5v5.4h9.1v2.8H581.4z"/>
                <path id="XMLID_58_" class="st0 preload-letter pl4" d="M604.5,342.4c-1.4,0-2.6-0.2-3.7-0.6c-1.1-0.4-2-1-2.8-1.9c-0.8-0.8-1.3-1.8-1.7-3
		c-0.4-1.2-0.6-2.5-0.6-4.1c0-1.5,0.2-2.9,0.7-4.1c0.5-1.2,1.1-2.2,1.9-3c0.8-0.8,1.8-1.4,2.9-1.9c1.1-0.4,2.3-0.6,3.5-0.6
		c0.8,0,1.4,0.1,2.1,0.2s1.2,0.2,1.6,0.4c0.5,0.1,0.8,0.3,1.1,0.5c0.3,0.2,0.5,0.3,0.6,0.3l-1,2.7c-0.4-0.3-1-0.5-1.8-0.8
		c-0.8-0.2-1.6-0.4-2.6-0.4c-0.8,0-1.5,0.1-2.2,0.4c-0.7,0.3-1.3,0.7-1.8,1.2c-0.5,0.5-0.9,1.2-1.2,2.1c-0.3,0.8-0.4,1.8-0.4,2.9
		c0,1,0.1,1.9,0.3,2.7c0.2,0.8,0.6,1.5,1,2.1c0.5,0.6,1,1.1,1.7,1.4c0.7,0.3,1.6,0.5,2.5,0.5c1.2,0,2.1-0.1,2.9-0.4
		c0.7-0.2,1.3-0.5,1.7-0.7l0.9,2.7c-0.2,0.1-0.5,0.3-0.9,0.4c-0.4,0.1-0.8,0.3-1.3,0.4c-0.5,0.1-1.1,0.2-1.7,0.3
		C605.8,342.4,605.2,342.4,604.5,342.4z"/>
                <path id="XMLID_60_" class="st0 preload-letter pl5" d="M626.4,323.6v2.9h-5.6V342h-3.4v-15.5h-5.6v-2.9H626.4z"/>
                <path id="XMLID_63_" class="st0 preload-letter pl6" d="M634,323.4c2.7,0,4.7,0.5,6.1,1.5s2.1,2.5,2.1,4.5c0,2.5-1.2,4.2-3.7,5.1
		c0.3,0.4,0.7,0.9,1.1,1.5c0.4,0.6,0.9,1.2,1.3,1.9c0.4,0.7,0.9,1.4,1.3,2.1c0.4,0.7,0.8,1.4,1.1,2.1h-3.7c-0.3-0.6-0.7-1.3-1.1-1.9
		c-0.4-0.6-0.8-1.3-1.2-1.9c-0.4-0.6-0.8-1.2-1.2-1.7c-0.4-0.5-0.8-1-1.1-1.4c-0.2,0-0.5,0-0.6,0c-0.2,0-0.3,0-0.5,0h-1.6v6.9H629
		v-18.1c0.8-0.2,1.7-0.3,2.6-0.4C632.5,323.5,633.3,323.4,634,323.4z M634.3,326.3c-0.7,0-1.4,0-2,0.1v5.9h1.5c0.8,0,1.5,0,2.1-0.1
		c0.6-0.1,1.1-0.2,1.6-0.5c0.4-0.2,0.7-0.5,0.9-0.9c0.2-0.4,0.3-0.9,0.3-1.5c0-0.6-0.1-1-0.3-1.4s-0.5-0.7-0.9-0.9s-0.9-0.4-1.4-0.5
		C635.5,326.4,634.9,326.3,634.3,326.3z"/>
                <path id="XMLID_67_" class="st0 preload-letter pl7" d="M662.8,332.8c0,1.6-0.2,3-0.7,4.2c-0.5,1.2-1.1,2.2-1.9,3c-0.8,0.8-1.7,1.4-2.8,1.8
		c-1.1,0.4-2.2,0.6-3.4,0.6c-1.2,0-2.4-0.2-3.5-0.6s-2-1-2.8-1.8c-0.8-0.8-1.4-1.8-1.9-3c-0.5-1.2-0.7-2.6-0.7-4.2
		c0-1.6,0.2-3,0.7-4.1c0.5-1.2,1.1-2.2,1.9-3c0.8-0.8,1.8-1.4,2.8-1.8c1.1-0.4,2.2-0.6,3.4-0.6s2.3,0.2,3.4,0.6c1.1,0.4,2,1,2.8,1.8
		c0.8,0.8,1.4,1.8,1.9,3C662.5,329.8,662.8,331.2,662.8,332.8z M648.4,332.8c0,1,0.1,1.9,0.4,2.7c0.2,0.8,0.6,1.5,1.1,2.1
		c0.5,0.6,1,1,1.7,1.3c0.7,0.3,1.4,0.5,2.3,0.5c0.8,0,1.6-0.2,2.3-0.5c0.7-0.3,1.2-0.8,1.7-1.3c0.5-0.6,0.8-1.3,1.1-2.1
		c0.2-0.8,0.4-1.7,0.4-2.7c0-1-0.1-1.9-0.4-2.7c-0.2-0.8-0.6-1.5-1.1-2.1c-0.5-0.6-1-1-1.7-1.3s-1.4-0.5-2.3-0.5
		c-0.8,0-1.6,0.2-2.3,0.5c-0.7,0.3-1.2,0.8-1.7,1.4c-0.5,0.6-0.8,1.3-1.1,2.1C648.6,330.9,648.4,331.8,648.4,332.8z"/>
                <path id="XMLID_70_" class="st0 preload-letter pl8" d="M669.1,340.3c0,0.6-0.2,1.1-0.6,1.5c-0.4,0.4-0.9,0.6-1.5,0.6c-0.6,0-1.1-0.2-1.5-0.6
		c-0.4-0.4-0.6-0.9-0.6-1.5c0-0.6,0.2-1.1,0.6-1.5c0.4-0.4,0.9-0.6,1.5-0.6c0.6,0,1.1,0.2,1.5,0.6
		C668.9,339.1,669.1,339.6,669.1,340.3z"/>
                <path id="XMLID_72_" class="st0 preload-letter pl9" d="M672.7,342v-18.4h11.6v2.8H676v4.7h7.3v2.8H676v8H672.7z"/>
                <path id="XMLID_74_" class="st0 preload-letter pl10" d="M687.3,323.6h3.3V342h-3.3V323.6z"/>
                <path id="XMLID_76_" class="st0 preload-letter pl11" d="M706.7,339.1v2.9h-11.6v-18.4h3.3v15.5H706.7z"/>
                <path id="XMLID_78_" class="st0 preload-letter pl12" d="M713.2,323.6c0.4,0.7,0.8,1.5,1.3,2.5c0.5,1,1,2,1.5,3.1c0.5,1.1,1,2.2,1.5,3.3
		c0.5,1.1,0.9,2.1,1.3,3.1c0.4-0.9,0.8-2,1.3-3.1c0.5-1.1,1-2.2,1.5-3.3s1-2.1,1.5-3.1c0.5-1,0.9-1.8,1.3-2.5h3
		c0.2,1.3,0.3,2.8,0.5,4.3c0.1,1.5,0.3,3.1,0.4,4.6c0.1,1.6,0.2,3.2,0.3,4.8c0.1,1.6,0.2,3.2,0.3,4.7h-3.3c-0.1-2.1-0.2-4.3-0.3-6.6
		c-0.1-2.3-0.2-4.5-0.4-6.6c-0.2,0.4-0.4,0.9-0.7,1.5c-0.3,0.6-0.5,1.2-0.8,1.8c-0.3,0.7-0.6,1.3-0.9,2.1c-0.3,0.7-0.6,1.4-0.9,2.1
		c-0.3,0.7-0.6,1.3-0.8,1.9c-0.2,0.6-0.5,1.1-0.6,1.5h-2.5c-0.2-0.4-0.4-0.9-0.6-1.5c-0.2-0.6-0.5-1.2-0.8-1.9
		c-0.3-0.7-0.6-1.3-0.9-2.1c-0.3-0.7-0.6-1.4-0.9-2c-0.3-0.7-0.6-1.3-0.8-1.8s-0.5-1.1-0.7-1.4c-0.2,2.1-0.3,4.3-0.4,6.6
		c-0.1,2.3-0.2,4.5-0.3,6.6h-3.3c0.1-1.5,0.2-3.1,0.3-4.7c0.1-1.6,0.2-3.2,0.3-4.8c0.1-1.6,0.2-3.2,0.4-4.7s0.3-2.9,0.5-4.2H713.2z"
                />
            </g>
</svg>

    </div>

    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>

</div>

<div class="layout-content">
    <div id="fullpage">
        <div class="section" data-anchor="directors">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="review-wrap directors-wrap">
                            <div class="row">
                                <div class="col-xs-12">

                                    <?php while( have_rows('three_directors_to_display', 'option') ): the_row();
                                        $firstID = get_sub_field('first_dir')-> ID;
                                        $secondID = get_sub_field('second_dir') ->ID;
                                        $thirdID = get_sub_field('third_dir')-> ID;
                                        $first = get_post($firstID);
                                        $second = get_post($secondID);
                                        $third = get_post($thirdID);
                                        $dir_array = array($first, $second, $third);
                                    ?>

                                        <? foreach ($dir_array as $dir){ ?>
                                                <a class="director" href="<? echo get_the_permalink($dir -> ID) ?>">
                                                    <? echo get_the_post_thumbnail($dir -> ID,array(170, 180) ) ?>
                                                    <span class="director-name"><? echo get_the_title($dir -> ID) ?></span>
                                                </a>
                                        <? } ?>

                                    <? endwhile; ?>

                                    <?
                                        $my_query = new WP_Query(array(
                                        'showposts' => 5,
                                        'orderby' => 'rand',
                                        'post_type' => 'directors',
                                        'post__not_in' => array($firstID, $secondID, $thirdID)
                                    ));

                                    while ($my_query->have_posts()) : $my_query->the_post(); ?>

                                        <a class="director" href="<? the_permalink() ?>">
                                            <? the_post_thumbnail(array(170, 180)) ?>
                                            <span class="director-name"><? the_title() ?></span>
                                        </a>

                                    <? endwhile; ?>

                                </div>

                            </div>
                            <div class="films-link">
                                <a href="/directors" class="btn">Всі режисери</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1" style="height:100vh;">
                        <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                            <span class="aw-long-arrow-down"></span>
                        </a>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a class="active current-link" href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section" data-anchor="reviews">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                        <a href="#" class="screen-nav-arrow nav-up-arrow">
                            <span class="aw-long-arrow-up"></span>
                        </a>
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="review-wrap">
                            <div class="row">

                                <?php while( have_rows('reviews', 'option') ): the_row();
                                    $image = get_sub_field('poster');
                                    $gif = get_sub_field('gif');
                                    $header = get_sub_field('header');
                                    $review = get_sub_field('review');
                                    $movieLink = get_sub_field('movie_link');
                                    $reviewLink = get_sub_field('review_link');
                                    ?>

                                    <div class="col-xs-6" style="position: static;">
                                        <div class="review">
                                            <a href="<? echo $movieLink ."#title3" ?>" class="inherit">
                                                <h1><? echo $header ?></h1>
                                            </a>
                                            <a class="review-image" href="#">
                                                <img class="animated-gif"  src="<? echo $image ?>" alt="">
                                            </a>
                                            <a href="<? echo $reviewLink ."#title3" ?>">
                                                <p class="rewiev-part">
                                                    <? echo $review ?>
                                                </p>
                                            </a>
                                        </div>
                                    </div>

                                <?php endwhile; ?>

                            </div>
                            <div class="films-link">
                                <a href="/reviews" class="btn">Всі рецензії</a>
                            </div>
                        </div>

                    </div>

                    <div class="col-xs-1" style="height:100vh;">
                        <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                            <span class="aw-long-arrow-down"></span>
                        </a>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a  href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a  class="active current-link" href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section" data-anchor="movies">

            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                        <a href="#" class="screen-nav-arrow nav-up-arrow">
                            <span class="aw-long-arrow-up"></span>
                        </a>
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="posters">

                            <?php while( have_rows('movies', 'option') ): the_row();

                                $image = get_sub_field('poster');
                                $link = get_sub_field('link');
                                ?>
                                <a href="<? echo $link?>" class="poster">
                                     <span class="poster-caption">
                                     <span class="poster-text">
                                        <span class="title">Белые Слоны (2014)</span>
                                        <span class="dir">Яна Антонец</span>
                                    </span>
                                </span>
                                    <img src="<? echo $image ?>" alt="">
                                </a>

                            <?php endwhile; ?>

                            <div class="films-link">
                                <a href="/movies" class="btn">Все фильмы</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1" style="height:100vh;">
                        <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                            <span class="aw-long-arrow-down"></span>
                        </a>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a  href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a class="active current-link" href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div data-anchor="headSection" class="section active main_screen">
            <div class="header">
                <div class="layout-container">
                    <div class="row">
                        <div class="col-xs-2">
                        </div>
                        <div class="col-xs-8">
                            <div class="find">
                                <span class="aw-search"></span>
                                <form role="search" method="get" class="search-form" action="http://localhost:8888/">
                                    <input type="search" class="search-field"  value="" name="s">
                                    <input class="hidden" type="submit" class="search-submit screen-reader-text">
                                </form>
                            </div>
                            <div class="social">
                                <a href="#"class="social-link facebook" ><span class="aw-facebook"></span></a>
                                <a href="#"class="social-link vk" > <span class="aw-vk"></span></a>
                                <a href="#"class="social-link youtube" > <span class="aw-youtube-play"></span></a>
                                <a href="#"class="social-link vimeo" ><span class="aw-vimeo"></span></a>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
            <div class="layout-container">
                <div class="row" style="overflow: visible">
                    <div class="col-xs-12">
                        <div class="row" style="overflow: visible">
                            <div class="col-xs-1"></div>
                            <div class="col-xs-1">
                                <a href="#" class="screen-nav-arrow nav-up-arrow">
                                    <span class="aw-long-arrow-up"></span>
                                </a>
                            </div>
                            <div class="col-xs-8">
                                <div class="content main-screen">
                                    <ul class="bxslider main-slider">

                                        <?php while( have_rows('main_slider', 'option') ): the_row();

                                            $image = get_sub_field('poster');
                                            ?>
                                            <li class="slide"><img src="<? echo $image ?>" /></li>

                                        <?php endwhile; ?>

                                    </ul>
                                </div>
                            </div>
                            <div class="col-xs-1" style="height:100vh;">
                                <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                                    <span class="aw-long-arrow-down"></span>
                                </a>
                            </div>
                            <div class="col-xs-1"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a  href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a   class="active active current-link" href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section" data-anchor="about">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                        <a href="#" class="screen-nav-arrow nav-up-arrow">
                            <span class="aw-long-arrow-up"></span>
                        </a>
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="review-wrap about-wrap">
                            <div class="row">
                                <div class="col-xs-3">
                                    <h2 style="display: none" class="about-head">Про проект</h2>
                                </div>
                                <div class="col-xs-9" style="background: #fff;">
                                    <p>
                                        <? the_field('about_text', 'option') ?>
                                    </p>
                                </div>
                            </div>
                            <div class="films-link">
                                <a href="/" class="btn">Допомогти проекту</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-1" style="height:100vh;">
                        <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                            <span class="aw-long-arrow-down"></span>
                        </a>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a class="active current-link"  href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section" data-anchor="events">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                        <a href="#" class="screen-nav-arrow nav-up-arrow">
                            <span class="aw-long-arrow-up"></span>
                        </a>
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="review-wrap events-wrap">
                            <div class="row">

                                <?php while( have_rows('events', 'option') ): the_row();

                                    $image = get_sub_field('event_image');
                                    $link = get_sub_field('event_link');
                                    $text = get_sub_field('event_text');

                                    ?>

                                <div class="col-xs-6">
                                    <div class="box">
                                        <a href="#" class="event-link" style="background-image: url('<? echo $image ?>')">

                                        </a>
                                        <a href="<? echo $link?>" class="event-text">
                                        <span class="event-span-text">
                                            <? echo $text?>
                                        </span>
                                        </a>
                                    </div>
                                  </div>

                                <?php endwhile; ?>

                            </div>
                            <div class="films-link">
                                <a href="/events" class="btn">Всі події</a>
                            </div>
                        </div>
                    </div>

                    <div class="col-xs-1" style="height:100vh;">
                        <a href="#" class="screen-nav-arrow nav-down-arrow down-arrow">
                            <span class="aw-long-arrow-down"></span>
                        </a>
                    </div>
                    <div class="col-xs-1"></div>
                </div>
            </div>
            <div class="nav">
                <ul>
                    <li>
                        <a  href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a class="active current-link" href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="section" data-anchor="contacts">
            <div class="layout-container">
                <div class="row">
                    <div class="col-xs-1"></div>
                    <div class="col-xs-1">
                        <a href="#" class="screen-nav-arrow nav-up-arrow">
                            <span class="aw-long-arrow-up"></span>
                        </a>
                    </div>
                    <div class="col-xs-8" style="position: static;">
                        <div class="review-wrap footer-wrap">
                            <div class="row">
                                    <div class="col-xs-12 footer-col">
                                        <p style="font-weight: bold">+380 (96) 312 18 98</p>
                                        <p style="font-weight: bold">+380 (93) 453 52 14 </p>
                                        <p style="font-weight: bold">info@electro.film</p>

                                    </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-xs-1" style="height:100vh;">

                    </div>
                    <div class="col-xs-1"></div>
                </div>
<!--                        <div class="social footer-social">-->
<!--                            <span class="aw-facebook"></span>-->
<!--                            <span class="aw-vk"></span>-->
<!--                            <span class="aw-youtube-play"></span>-->
<!--                            <span class="aw-vimeo"></span>-->
<!--                        </div>-->

            </div>
            <div class="nav footer-nav">
                <ul>
                    <li>
                        <a  href="#directors">
                            Режисери
                        </a>
                    </li>
                    <li>
                        <a   href="#reviews">
                            Рецензії
                        </a>
                    </li>
                    <li>
                        <a href="#movies">
                            Фільми
                        </a>
                    </li>
                    <li>
                        <a  href="#mainPage">
                            Electro.Film
                        </a>
                    </li>
                    <li>
                        <a href="#about">
                            Про проект
                        </a>
                    </li>
                    <li>
                        <a href="#events">
                            Афіша
                        </a>
                    </li>
                    <li>
                        <a class="active active current-link" href="#contacts">
                            Контакти
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

</div>

<?php get_footer(); ?>
