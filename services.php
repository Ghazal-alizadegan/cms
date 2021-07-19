<?php
include_once 'functions/config.php';
$show = showsetting();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $show['site_title'] ?></title>
    <!---css--->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/styles_2.css" rel='stylesheet' type='text/css'/>
    <link href="css/navstyle.css" rel='stylesheet' type='text/css'/>
    <!---css--->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design"/>
    <script type="application/x-javascript"> addEventListener("load", function () {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        } </script>
    <!---js--->
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <!---js--->
    <!--JS for animate-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!---webfont--->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!---webfont--->
</head>
<body>
<!---header--->
<div class="header-section">
    <div class="container">
        <div class="head-bottom">
            <div class="logo  wow fadeInDownBig animated animated" data-wow-delay="0.4s">
                <h1><a href="index.php"><?php echo $show['site_title'] ?>
                        <span><?php echo $show['site_subject'] ?></span></a></h1>
            </div>
        </div>
    </div>
</div>
<!---header--->
<!---banner--->
<div class=" ">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>

                <div class=" ">
                    <div class="container">
                        <nav class="navbar navbar-default">
                            <div class="container-fluid">
                                <!-- Brand and toggle get grouped for better mobile display -->
                                <div class="">
                                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                    </button>
                                </div>
                                <ul class="menu" style="text-align: center">
                                <?php
                                $showmenu=indexmenu();
                                if ($showmenu){
                                    foreach ($showmenu as $menu){
                                ?>

                                    <li><a href=""><?php echo $menu['title']?></a>
                                        <?php
                                        $showdrowpdown=indexmenudrowpdown($menu['id']);
                                        if ($showdrowpdown){
                                        foreach ($showdrowpdown as $drowpdown){
                                        ?>
                                        <ul>
                                            <li><a href=""><?php echo $drowpdown['title']?></a></li>
                                        </ul>
                                        <?php
                                        }}
                                        ?>
                                    </li>

                                <?php
                                    }}
                                ?>
                                </ul>

                            </div>
            </div>
        </nav>
    </div>
</div>
<!---banner-->
<!---welcome-->
<!--<div class="content">-->
    <!-- services -->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <div class="overview">
        <div class="container">
            <h3>خدمات کلی</h3>
            <div class="overview-grids">
                <?php
                $indexproduct = indexproduct();
                if ($indexproduct) {
                foreach ($indexproduct as $product) {
                ?>
                <div class="col-md-3 list-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="list-img">
                        <img src="images/n1.jpg" alt=" "/>
                        <div class="textbox"></div>
                    </div>
                    <h4><?php echo $product['title'] ?></h4>
                    <p><?php echo $product['about'] ?></p>
                </div>
<?php
                } }?>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!-- //services -->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!--</div>-->
<!---footer--->
<div class="footer-section">
    <div class="container">
        <div class="footer-grids">
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>درباره ما</h4>
                <ul>
                    <li>
                        تمرکز بر مشتری
                    </li>
                    <li>

                        لورم ایپسوم یا طرح‌نما
                    </li>
                    <li>

                        لورم ایپسوم یا طرح‌نما
                    </li>
                    <li>عملکردها</li>
                    <li>نوآوری</li>
                    <li>
                        مسئوليت ها
                    </li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInDownBig animated" data-wow-delay=".5s">
                <h4>راه حل ها</h4>
                <ul>
                    <li>
                        مرکز تماس
                    </li>
                    <li>پشتیبانی مشتریان</li>
                    <li>

                        لورم ایپسوم یا طرح‌نما
                    </li>
                    <li>طرح‌نما</li>
                    <li>
                        وب سلف سرویس
                    </li>
                    <li>معیارهای عملکرد</li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInUpBig animated" data-wow-delay=".5s">
                <h4>کارها</h4>
                <ul>
                    <li>
                        پشتیبانی مشتریان
                    </li>
                    <li>
                        پشتیبانی پلاتین
                    </li>
                    <li>پشتیبانی طلا</li>
                    <li>آموزش</li>
                    <li>کارگاه های آموزشی</li>
                    <li>
                        آموزش آنلاین
                    </li>
                </ul>
            </div>
            <div class="col-md-3 footer-grid wow fadeInLeft animated" data-wow-delay=".5s">
                <h4>تماس با ما</h4>
                <p><?php echo $show['address'] ?></p>
                <p>
                    تلفن: <?php echo $show['tell'] ?></p>
                <p>فکس: <?php echo $show['fax'] ?></p>
                <a href="<?php echo $show['email'] ?>"> <?php echo $show['email'] ?></a>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!---footer--->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!--copy-->
<div class="copy-section wow fadeInLeft animated" data-wow-delay=".5s"
">
<div class="container">
    <div class="social-icons">
        <a href="<?php echo $show['email'] ?>"><i class="icon2"></i></a>
        <a href="<?php echo $show['instagram'] ?>"><i class="icon3"></i></a>
    </div>
    <p><?php echo $show['copyright'] ?></p>
</div>
</div>
<!--copy-->
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>
