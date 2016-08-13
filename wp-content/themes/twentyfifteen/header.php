<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
            <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>ELECTRO.FILM</title>
    <meta name="description" content="ELECTRO.FILM>
        <meta name="viewport" content="width=1170, minimal-ui">

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

<!--    <style>-->
<!--        #loader-wrapper {-->
<!--            position: fixed;-->
<!--            top: 0;-->
<!--            left: 0;-->
<!--            width: 100%;-->
<!--            height: 100%;-->
<!--            z-index: 1000;-->
<!--        }-->
<!--        #loader {-->
<!--            display: block;-->
<!--            position: relative;-->
<!--            left: 50%;-->
<!--            top: 50%;-->
<!--            width: 110px;-->
<!--            height: 110px;-->
<!--            margin: -75px 0 0 -75px;-->
<!--            border-radius: 50%;-->
<!--            border: 1.5px solid transparent;-->
<!--            border-top-color: #fff!important;-->
<!---->
<!--            -webkit-animation: spin 2s linear infinite; /* Chrome, Opera 15+, Safari 5+ */-->
<!--            animation: spin 2s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */-->
<!---->
<!--            z-index: 1001;-->
<!--        }-->
<!---->
<!--        #loader:before {-->
<!--            content: "";-->
<!--            position: absolute;-->
<!--            top: 5px;-->
<!--            left: 5px;-->
<!--            right: 5px;-->
<!--            bottom: 5px;-->
<!--            border-radius: 50%;-->
<!--            border: 1.5px solid transparent;-->
<!--            border-top-color: #fff!important;-->
<!---->
<!--            -webkit-animation: spin 3s linear infinite; /* Chrome, Opera 15+, Safari 5+ */-->
<!--            animation: spin 3s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */-->
<!--        }-->
<!---->
<!--        #loader:after {-->
<!--            content: "";-->
<!--            position: absolute;-->
<!--            top: 15px;-->
<!--            left: 15px;-->
<!--            right: 15px;-->
<!--            bottom: 15px;-->
<!--            border-radius: 50%;-->
<!--            border: 1.5px solid transparent;-->
<!--            border-top-color: #fff!important;-->
<!---->
<!--            -webkit-animation: spin 1.5s linear infinite; /* Chrome, Opera 15+, Safari 5+ */-->
<!--            animation: spin 1.5s linear infinite; /* Chrome, Firefox 16+, IE 10+, Opera */-->
<!--        }-->
<!---->
<!--        @-webkit-keyframes spin {-->
<!--            0%   {-->
<!--                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--                -ms-transform: rotate(0deg);  /* IE 9 */-->
<!--                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */-->
<!--            }-->
<!--            100% {-->
<!--                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--                -ms-transform: rotate(360deg);  /* IE 9 */-->
<!--                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */-->
<!--            }-->
<!--        }-->
<!--        @keyframes spin {-->
<!--            0%   {-->
<!--                -webkit-transform: rotate(0deg);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--                -ms-transform: rotate(0deg);  /* IE 9 */-->
<!--                transform: rotate(0deg);  /* Firefox 16+, IE 10+, Opera */-->
<!--            }-->
<!--            100% {-->
<!--                -webkit-transform: rotate(360deg);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--                -ms-transform: rotate(360deg);  /* IE 9 */-->
<!--                transform: rotate(360deg);  /* Firefox 16+, IE 10+, Opera */-->
<!--            }-->
<!--        }-->
<!---->
<!--        #loader-wrapper .loader-section {-->
<!--            position: fixed;-->
<!--            width: 100%;-->
<!--            height: 51%;-->
<!--            left: 0;-->
<!--            right: 0;-->
<!--            background: #222222;-->
<!--            z-index: 1000;-->
<!--            -webkit-transform: translateY(0);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--            -ms-transform: translateY(0);  /* IE 9 */-->
<!--            transform: translateY(0);  /* Firefox 16+, IE 10+, Opera */-->
<!--        }-->
<!---->
<!--        #loader-wrapper .loader-section.section-left {-->
<!--            top:0;-->
<!--        }-->
<!---->
<!--        #loader-wrapper .loader-section.section-right {-->
<!--            bottom:0;-->
<!--        }-->
<!---->
<!--        /* Loaded */-->
<!--        .loaded #loader-wrapper .loader-section.section-left {-->
<!--            -webkit-transform: translateY(-100%);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--            -ms-transform: translateY(-100%);  /* IE 9 */-->
<!--            transform: translateY(-100%);  /* Firefox 16+, IE 10+, Opera */-->
<!---->
<!--            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);-->
<!--            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);-->
<!--        }-->
<!---->
<!--        .loaded #loader-wrapper .loader-section.section-right {-->
<!--            -webkit-transform: translateY(100%);  /* Chrome, Opera 15+, Safari 3.1+ */-->
<!--            -ms-transform: translateY(100%);  /* IE 9 */-->
<!--            transform: translateY(100%);  /* Firefox 16+, IE 10+, Opera */-->
<!---->
<!--            -webkit-transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);-->
<!--            transition: all 0.7s 0.3s cubic-bezier(0.645, 0.045, 0.355, 1.000);-->
<!--        }-->
<!---->
<!--        .loaded #loader {-->
<!--            opacity: 0;-->
<!--            -webkit-transition: all 0.3s ease-out;-->
<!--            transition: all 0.3s ease-out;-->
<!--        }-->
<!--        .loaded #loader-wrapper {-->
<!--            visibility: hidden;-->
<!---->
<!--            /*-webkit-transform: translateY(-100%);  !* Chrome, Opera 15+, Safari 3.1+ *!*/-->
<!--            /*-ms-transform: translateY(-100%);  !* IE 9 *!*/-->
<!--            /*transform: translateY(-100%);  !* Firefox 16+, IE 10+, Opera *!*/-->
<!---->
<!--            -webkit-transition: all 0.3s 1s ease-out;-->
<!--            transition: all 0.3s 1s ease-out;-->
<!--        }-->
<!---->
<!--        /* JavaScript Turned Off */-->
<!--        .no-js #loader-wrapper {-->
<!--            display: none;-->
<!--        }-->
<!--        .no-js h1 {-->
<!--            color: #222222;-->
<!--        }-->
<!---->
<!--        #content {-->
<!--            margin: 0 auto;-->
<!--            padding-bottom: 50px;-->
<!--            width: 80%;-->
<!--            max-width: 978px;-->
<!--        }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--        /* ==========================================================================-->
<!--           Helper classes-->
<!--           ========================================================================== */-->
<!---->
<!--        /*-->
<!--         * Image replacement-->
<!--         */-->
<!---->
<!--        .ir {-->
<!--            background-color: transparent;-->
<!--            border: 0;-->
<!--            overflow: hidden;-->
<!--            /* IE 6/7 fallback */-->
<!--            *text-indent: -9999px;-->
<!--        }-->
<!---->
<!--        .ir:before {-->
<!--            content: "";-->
<!--            display: block;-->
<!--            width: 0;-->
<!--            height: 150%;-->
<!--        }-->
<!---->
<!--        /*-->
<!--         * Hide from both screenreaders and browsers: h5bp.com/u-->
<!--         */-->
<!---->
<!--        .hidden {-->
<!--            display: none !important;-->
<!--            visibility: hidden;-->
<!--        }-->
<!---->
<!--        /*-->
<!--         * Hide only visually, but have it available for screenreaders: h5bp.com/v-->
<!--         */-->
<!---->
<!--        .visuallyhidden {-->
<!--            border: 0;-->
<!--            clip: rect(0 0 0 0);-->
<!--            height: 1px;-->
<!--            margin: -1px;-->
<!--            overflow: hidden;-->
<!--            padding: 0;-->
<!--            position: absolute;-->
<!--            width: 1px;-->
<!--        }-->
<!---->
<!--        /*-->
<!--         * Extends the .visuallyhidden class to allow the element to be focusable-->
<!--         * when navigated to via the keyboard: h5bp.com/p-->
<!--         */-->
<!---->
<!--        .visuallyhidden.focusable:active,-->
<!--        .visuallyhidden.focusable:focus {-->
<!--            clip: auto;-->
<!--            height: auto;-->
<!--            margin: 0;-->
<!--            overflow: visible;-->
<!--            position: static;-->
<!--            width: auto;-->
<!--        }-->
<!---->
<!--        /*-->
<!--         * Hide visually and from screenreaders, but maintain layout-->
<!--         */-->
<!---->
<!--        .invisible {-->
<!--            visibility: hidden;-->
<!--        }-->
<!---->
<!--        /*-->
<!--         * Clearfix: contain floats-->
<!--         *-->
<!--         * For modern browsers-->
<!--         * 1. The space content is one way to avoid an Opera bug when the-->
<!--         *    `contenteditable` attribute is included anywhere else in the document.-->
<!--         *    Otherwise it causes space to appear at the top and bottom of elements-->
<!--         *    that receive the `clearfix` class.-->
<!--         * 2. The use of `table` rather than `block` is only necessary if using-->
<!--         *    `:before` to contain the top-margins of child elements.-->
<!--         */-->
<!--        #loader-wrapper .loader-section{-->
<!--            background: #000!important;-->
<!--        }-->
<!--        #loader-wrapper{-->
<!--            z-index: 99999999;-->
<!--        }-->
<!---->
<!--    </style>-->
</head>
<body>
<div id="loader-wrapper">
<!--    <div id="loader"></div>-->
<!---->
<!--    <div class="loader-section section-left"></div>-->
<!--    <div class="loader-section section-right"></div>-->

</div>