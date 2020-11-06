<?php
include_once 'includes/functions.php';
sec_session_start();



?>

<!DOCTYPE html>
<!--[if IE]><![endif]-->
<!--[if IE 8 ]><html dir="ltr" lang="en" class="ie8"><![endif]-->
<!--[if IE 9 ]><html dir="ltr" lang="en" class="ie9"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->

<html dir="ltr" lang="en" class="">
<!--<![endif]-->

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Аквилон</title>


    <meta name="description" content="Аквилон" />



    <link href="//fonts.googleapis.com/css?family=Ubuntu:300,400,500,700&amp;subset=cyrillic" rel="stylesheet">

    <link href="/catalog/view/javascript/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/catalog/view/theme/zemez894/stylesheet/material-icons.css" rel="stylesheet">

    <link href="/catalog/view/javascript/bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen" />
    <link href="/catalog/view/theme/zemez894/stylesheet/photoswipe.css" rel="stylesheet">
    <link href="/catalog/view/theme/zemez894/stylesheet/stylesheet.css" rel="stylesheet">

    <link href="/catalog/view/theme/zemez894/js/fancybox/jquery.fancybox.css" rel="stylesheet">
    <link href="/catalog/view/theme/zemez894/stylesheet/homebuilder.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/catalog/view/javascript/jquery/swiper/css/swiper.min.css" type="text/css" rel="stylesheet" media="screen" />
    <link href="/catalog/view/javascript/jquery/swiper/css/opencart.css" type="text/css" rel="stylesheet" media="screen" />

    <link href="https://livedemo00-opencart.template-help.com/opencart_prod-23526/image/catalog/favicon.png" rel="icon" />

    <script src="/catalog/view/javascript/jquery/jquery-2.1.1.min.js" type="text/javascript"></script>
    <script src="/catalog/view/javascript/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

    <!--script src="/catalog/view/theme/zemez894/js/zemez_megamenu/superfish.min.js" type="text/javascript"></script-->
    <!--script src="/js/superfish.js" type="text/javascript"></script-->

    <!--script src="/catalog/view/theme/zemez894/js/zemez_megamenu/jquery.rd-navbar.min.js" type="text/javascript"></script-->
    <!--script src="/js/jquery.rd-navbar.js" type="text/javascript"></script-->
    
    
    
    <script src="/catalog/view/javascript/zemez894/swiper/swmin.js" type="text/javascript"></script>
    <script src="/catalog/view/javascript/jquery/swiper/js/swiper.jquery.js" type="text/javascript"></script>
    <script src="/catalog/view/theme/zemez894/js/zemez_single_category/bootstrap-tabcollapse.js" type="text/javascript"></script>


    <script src="/js/react_init/react.production.min.js" crossorigin></script>
    <script src="/js/react_init/react-dom.production.min.js" crossorigin></script>
    <link href="/style.css" rel="stylesheet" type="text/css" />
    


</head>

<body>
<p id="gl_path" class="hidden">zemez894</p>
    <div id="page">
        <div id="page-preloader" class="visible"><span class="preloader"></span></div>
        <div class="ie-warning">
            <a href="//windows.microsoft.com/en-us/internet-explorer/download-ie">
                <img src="/catalog/view/theme/zemez894/image/warning_bar_0000_us.jpg" height="75" width="1170" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
            </a>
        </div>
    <header>

        <div class="homebuilder clearfix header-top">
            <div class="tm-container ">
                <div class="tm-inner">

                    <div class="row row-level-1 ">
                        <div class="row-inner  clearfix">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                <div class="col-inner container">



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="stuck-menu">
            <div class="navigation">

                <div class="homebuilder clearfix ">
                    <div class="tm-container ">
                        <div class="tm-inner">

                            <div class="row row-level-1 ">
                                <div class="row-inner  clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="col-inner container">
                                            <h1 class="logo">

                                                <a href="/">
                                                    <img src="/img/logo.png" title="Аквилон" alt="Аквилон" class="img-responsive">
                                                </a>

                                            </h1>
                                            <span class="header-wishlist pull-right">

                                                <a href="/cart">
                                                    <i class="material-icons-local_grocery_store"></i>
                                                    <strong>Корзина</strong><br>
                                                    <span id="cart-total3" class="cart-total2"><?= getCartDataCount() ?></span>
                                                </a>


                                            </span>

                                            <span class="header-wishlist pull-right">
                                                <a href="/favor">
                                                    <i class="material-icons-favorite_border"></i>
                                                    <strong>Избранное</strong><br>
                                                    <span id="wishlist-total3"><?= getFavouritetDataCount() ?></span>
                                                </a>
                                            </span>
                                            <div id="search" class="search pull-right">
                                                <input type="text" name="search" value="" placeholder="поиск по наименованию">
                                                <button type="button" class="button-search">Поиск</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tm-container ">
                        <div class="tm-inner">

                            <div class="row row-level-1 ">
                                <div class="row-inner menu-line clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 ">
                                        <div class="col-inner container">
                                            <nav id="top-links" class="nav toggle-wrap pull-left">
                                                <a class="toggle material-icons-person_outline" href="#"></a>
                                                <ul class="toggle_cont">
                                                    <li><a href="/about">О нас</a></li>
                                                    <li><a href="/">Каталог</a></li>
                                                    <li><a href="/sale">Оплата и доставка</a></li>
                                                    <li><a href="/contact">Контакты</a></li>
                                                    <li class="pull-right"><a href="/login"><i class="material-icons-vpn_key"></i><span>Вход</span></a></li>

                                                </ul>
                                            </nav>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </header>