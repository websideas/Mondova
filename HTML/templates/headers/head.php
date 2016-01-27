<!DOCTYPE HTML>
<html>
<head>

    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>

    <title>Mondova - Creative Multi-Purpose eCommerce HTML5</title>

    <link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
    <?php
    global $page404;
    if(!empty($page404)){ ?>
    <link href='https://fonts.googleapis.com/css?family=Vollkorn:400,400italic' rel='stylesheet' type='text/css'>
    <?php } ?>

    <link rel="stylesheet" href="assets/libs/bootstrap/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/fonts/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="assets/fonts/elegant_font/style.css" />
    <link rel="stylesheet" href="assets/css/plugins.css" />

<?php
    global $revolution;
    if(!empty($revolution)){ ?>
    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/settings.css" />
    <!-- REVOLUTION NAVIGATION STYLES -->
    <link rel="stylesheet" type="text/css" href="assets/libs/revolution/css/navigation.css" />
    <?php } ?>
    <!-- Main Style -->
    <link rel="stylesheet" href="assets/css/style.css" />
    <!-- Responsive Styles -->
    <link rel="stylesheet" href="assets/css/responsive.css" />
    <!-- Common space -->
    <link rel="stylesheet" href="assets/css/common-space.css">

    <!-- CSS for IE -->
    <!--[if lte IE 9]>
    <link rel="stylesheet" type="text/css" href="assets/css/ie.css" />
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="assets/js/html5shiv.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->

</head>
<body class="appear-animate">


<div id="page">