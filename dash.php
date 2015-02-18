<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no, minimal-ui">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <title>Incentive Mobile</title>
        <!-- Path to Framework7 Library CSS-->
        <link rel="stylesheet" href="css/framework7.min.css">
        <!-- Path to your custom app styles-->
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/my-app.css">
    </head>
    <body>
        <!-- Status bar overlay for fullscreen mode-->
        <div class="statusbar-overlay"></div>
        <!-- Panels overlay-->
        <div class="panel-overlay"></div>
        <!-- Left panel with reveal effect-->
        <div class="panel panel-left panel-reveal">
            <div class="content-block">
                <p>Menu Lateral</p>
                <p><a href="#" class="close-panel">Fechar</a></p>
            </div>
        </div>
        <!-- Views-->
        <div class="views">
            <!-- Your main view, should have "view-main" class-->
            <div class="view view-main">
                <!-- Top Navbar-->
                <div class="navbar no-border bg-blue">
                    <div class="navbar-inner">
                        <!-- We have home navbar without left link-->
                        <div class="left">
                            <!-- Right link contains only icon - additional "icon-only" class--><a href="#" class="link icon-only open-panel color-white"> <i class="icon icon-bars color-white"></i></a>
                        </div>
                        <div class="center sliding color-white title"><strong><?php echo "LLSLSLALAL"; ?></strong></div>
                    </div>
                </div>
                <!-- Pages, because we need fixed-through navbar and toolbar, it has additional appropriate classes-->
                <div class="pages navbar-through toolbar-through">
                    <!-- Page, data-page contains page name-->
                    <div data-page="index" class="page">
                        <!-- Scrollable page content-->
                        <div class="page-content">
                            <div style='margin-top: 0px; margin-bottom: 0px;' class="content-block">
                                <div class="content-block-inner intro-point">

                                    <h1 style='margin-bottom: 0px;' class="color-white title-points">3580</h1>
                                    <small class="color-white">PONTOS</small><br>

                                    <img style="margin-right: 10px;" width="30" src="img/1.png" alt=""/>
                                    <img style="margin-right: 10px;" width="30" src="img/3.png" alt=""/>
                                    <img style="margin-right: 10px;" width="30" src="img/4.png" alt=""/>
                                    <img style="margin-right: 10px;" width="30" src="img/5.png" alt=""/>

                                </div>

                            </div>
                            <div class="content-block-title color-white division">Extrato</div>
                            <div style="margin-top: 0px;" class="list-block">
                                <ul>
                                    <li class="item-content">
                                        <div class="item-media">
                                            <img class="list-img" src="img/plus.png" alt=""/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Credito Distribuidos</div>
                                            <div class="item-after">3.000</div>
                                        </div>
                                    </li>
                                    <li class="item-content">
                                        <div class="item-media">
                                            <img class="list-img" src="img/plus.png" alt=""/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Credito Promo</div>
                                            <div class="item-after">500</div>
                                        </div>
                                    </li>
                                    <li class="item-content">
                                        <div class="item-media">
                                            <img class="list-img" src="img/minus.png" alt=""/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Resgate REF. 4587</div>
                                            <div class="item-after color-red">-10.000</div>
                                        </div>
                                    </li>
                                    <li class="item-content">
                                        <div class="item-media">
                                            <img class="list-img" src="img/plus.png" alt=""/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Credito Distribuidos</div>
                                            <div class="item-after">3.000</div>
                                        </div>
                                    </li>
                                    <li class="item-content">
                                        <div class="item-media">
                                            <img class="list-img" src="img/plus.png" alt=""/>
                                        </div>
                                        <div class="item-inner">
                                            <div class="item-title">Credito Distribuidos</div>
                                            <div class="item-after">3.000</div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Path to Framework7 Library JS-->
        <script type="text/javascript" src="js/framework7.min.js"></script>
        <!-- Path to your app js-->
        <script type="text/javascript" src="js/my-app.js"></script>
    </body>
</html>