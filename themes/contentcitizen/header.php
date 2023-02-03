<?php
wp_head();
?>
<!doctype html>
<html data-scroll-direction="vertical" data-direction="up">

<head>
    <meta charset="utf-8">
    <title>Content Citizen | Welcome</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.png" sizes="32x32" type="image/x-icon">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/contentcitizen-style.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/css/main.css">
</head>

<body>

<div class="sitePreloader active">
    <div class="loader-wrapper">
        <div class="loader-windows">
            <div class="loader__dot loader__dot--1"></div>
            <div class="loader__dot loader__dot--2"></div>
            <div class="loader__dot loader__dot--3"></div>
            <div class="loader__dot loader__dot--4"></div>
            <div class="loader__dot loader__dot--5"></div>
            <div class="loader__dot loader__dot--6"></div>
        </div>
    </div>
</div>
    <?php echo get_sidebar('header-content'); ?>