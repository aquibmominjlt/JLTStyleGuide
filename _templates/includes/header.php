<!DOCTYPE html>
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 8]><html class="no-js is-ie lt-ie9 lt-ie10" lang="en"> <![endif]-->
<!--[if IE 9]><html class="no-js is-ie lt-ie10" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
        <meta name="description" content="">

        <title>StyleGuide</title>

        <meta name="robots" content="follow">
        <meta name="author" content="">
        <meta name="copyright" content="">
        <meta name="description" content="">
        <meta name="keywords" content="" />

        <meta property="og:title" content="">
        <meta property="og:type" content="">
        <meta property="og:url" content="">
        <meta property="og:image" content="">
        <meta property="og:description" content="">
        <meta property="og:site_name" content="">

        <meta name="twitter:card" content="summary"/>
        <meta name="twitter:creator" content=""/>
        <meta name="twitter:url" content=""/>

        <meta name="twitter:title" content=""/>
        <meta name="twitter:description" content=""/>
        <meta name="twitter:image" content="" />

        <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
        <meta name="msapplication-TileColor" content="#cc0000">
        <meta name="theme-color" content="#cc0000">


        <!-- build:css /assets/StyleGuide/css/main.min.css -->
        <link href="/assets/StyleGuide/css/main.css" rel="stylesheet">
        <!-- /build -->

        <?php if(!isset($is_table_preview)): ?>
            <!-- build:css /assets/StyleGuide/css/responsive.min.css -->
            <link href="/assets/StyleGuide/css/responsive.css" rel="stylesheet">
            <!-- /build -->
        <?php endif; ?>

        <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet" type="text/css">

        <!--[if lt IE 9]>
            <link rel="stylesheet" href = "/assets/StyleGuide/css/ie.css">
            <script src="//cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
            <script src="//cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
        <![endif]-->

        <script src="/assets/StyleGuide/js/vendor/modernizr.js"></script>
    </head>
    <body>
        <?php if(!isset($is_table_preview)): ?>
        <header class="header">
            <div class="logo">
                <a href="/">JLT Branding Guidelines</a>
            </div>
            <div class="search-bar">
                <input type="text" placeholder="Search..." name="search-item" />
            </div>

            <?php include('primary-nav.php'); ?>
            <?php include('side-bar.php'); ?>

        </header>
        <?php endif; ?>