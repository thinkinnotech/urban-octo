<?php
/**
 * Created by PhpStorm.
 * User: dj
 * Date: 6/16/2017
 * Time: 10:05 AM
 */
?>
        <!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>CitiJobs | Job Portal</title>
    <meta name="description" content="company is a free job board template">
    <meta name="author" content="Ohidul">
    <meta name="keyword" content="html, css, bootstrap, job-board">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,700,800' rel='stylesheet' type='text/css'>

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.ico" type="image/x-icon">

    <link rel="stylesheet" href="{{ URL::asset('css/normalize.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontello.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.transitions.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
    <style>

        button.btn.searchBtn {
            background: #00AEEF;
            color: #fff;
            height: 40px;
            width: 48px;
            border-radius: 1px;
            font-weight: bold;
            font-size: 16px;
            -webkit-transition: all 0.4s ease;
            -moz-transition: all 0.4s ease;
            -ms-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }
        .form-inline .form-control, .form-inline .form-control
        {
            background-color: white!important;
            font-weight:bold;
            font-style: normal;
        }

        .search_logo
        {
            height: 24px;
        }
        .search-form
        {
            padding: 15px 0;
        }
        .table tr.even {
            background: #f1f1f1;
        }
        .panel-body { padding:0px; }
        .panel-body table tr td { padding-left: 15px }
        .panel-body .table {margin-bottom: 0px; }
    </style>
    @yield('style')
    <script src="{{ URL::asset('js/vendor/modernizr-2.6.2.min.js') }}"></script>
</head>
<body>

<div id="preloader">
    <div id="status">&nbsp;</div>
</div>
<!-- Body content -->
@include('header')
@yield('content')
@include('footer')
<!-- Modal -->

@include('sigin_signup_box')

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="{{ URL::asset('js/vendor/jquery-1.10.2.min.js') }}"><\/script>')</script>
<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
<script src="{{ URL::asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ URL::asset('js/wow.js') }}"></script>
<script src="{{ URL::asset('js/main.js') }}"></script>
<script>
    function submitSearch(form) {

        $keyword = slugify($('#query').val());
     //   alert($keyword);

        $('#search_form').attr('action','/job/'+$keyword);
        $('#search_form').submit();
        return false;

    }
    function slugify(string) {
        return string
            .toString()
            .trim()
            .toLowerCase()
            .replace(/\s+/g, "-")
            .replace(/[^\w\-]+/g, "")
            .replace(/\-\-+/g, "-")
            .replace(/^-+/, "")
            .replace(/-+$/, "");
    }
</script>
</body>
</html>
