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
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <!--//end-animate-->

    <!---webfont--->
    <link href='//fonts.googleapis.com/css?family=Ubuntu+Condensed' rel='stylesheet' type='text/css'>
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
          rel='stylesheet' type='text/css'>
    <!---webfont--->
    <link rel="stylesheet" type="text/css" href="css/style_common.css"/>
    <link rel="stylesheet" type="text/css" href="css/style9.css"/>
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
<link href="css/navstyle.css" rel='stylesheet' type='text/css'/>

<div class="banner">
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="menu" style="text-align: center">
                    <?php
                    $menu = indexmenu();
                    if ($menu){
                    foreach ($menu as $indexmenu){
                    ?>
                    <li><a href="">امکانات</a>
                        <?php
                        $drowpdownmenu = indexmenudrowpdown($indexmenu['id']);
                        if ($drowpdownmenu){
                        ?>
                        <ul>
                            <?php
                            foreach ($drowpdownmenu as $drowpdown) {
                            ?>
                            <li><a href="">آیتم شماره 1</a></li>
                        <?php}}?>
                        </ul>
                    </li>
                    <?php}}?>
                </ul>

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>

        </nav>


        <div class="banner-center">
            <marquee><h3>
                    <?php echo $show['banner_title'] ?></h3></marquee>
        </div>

    </div>
</div>
<!---banner-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!---welcome-->
<div class="content">
    <div class="welcome-section">
        <div class="container">
            <div class="banner-bottom">
                <div class="banner-grids">
                    <?php
                    $indexwidget = indexwidget();
                    if ($indexwidget) {
                        foreach ($indexwidget as $widget) {
                            ?>
                            <div class="col-md-4 banner-grid wow fadeInRight animated" data-wow-delay=".5s">

                                <h4>
                                    <?php echo $widget['title'] ?> </h4>
                                <div class="ban1">
                                    <div class="ban-images  view fourth-effect">
                                        <img src="images/b1.jpg" class="img-responsive" alt=""/>
                                        <div class="mask"></div>
                                    </div>
                                    <p><?php echo $widget['about'] ?></p>
                                    <a href="about.html" class="button hvr-wobble-bottom">اطلاعات بیشتر</a>
                                </div>

                            </div>
                            <?php
                        }
                    } ?>
                    <div class="clearfix"></div>

                </div>

            </div>
            <h2><?php echo $show['welcome_section'] ?> </h2>
            <div class="welcome-grids">
                <div class="col-md-3 welcome-grid wow fadeInRight animated" data-wow-delay=".5s">
                    <div class="welcome-text">
                        <h4>

                            لورم ایپسوم </h4>
                        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است</p>
                    </div>
                    <div class="welcome-icon">
                        <img src="images/i1.png">
                    </div>
                </div>
                <div class="col-md-3 welcome-grid wow fadeInDownBig animated" data-wow-delay=".5s">
                    <div class="welcome-text">
                        <h4>

                            لورم ایپسوم </h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است</p>
                    </div>
                    <div class="welcome-icon">
                        <img src="images/i2.png">
                    </div>
                </div>
                <div class="col-md-3 welcome-grid wow fadeInUpBig animated" data-wow-delay=".5s">
                    <div class="welcome-text">
                        <h4>

                            لورم ایپسوم </h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است</p>
                    </div>
                    <div class="welcome-icon">
                        <img src="images/i3.png">
                    </div>
                </div>
                <div class="col-md-3 welcome-grid wow fadeInLeft animated" data-wow-delay=".5s">
                    <div class="welcome-text">
                        <h4>

                            لورم ایپسوم </h4>
                        <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک
                            است</p>
                    </div>
                    <div class="welcome-icon">
                        <img src="images/i4.png">
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>
    <!---welcome-->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
    <!---product-->
    <div class="product-section">
        <div class="container">
            <h3><?php echo $show['products_section'] ?></h3>
            <div class="product-grids">
                <?php
                $indexproduct = indexproduct();
                if ($indexproduct) {
                    foreach ($indexproduct as $product) {

                        ?>
                        <div class="col-md-6 product-grid wow fadeInRight animated" data-wow-delay=".5s">
                            <div class="product-right">
                                <img src="images/p.jpg" class="img-responsive" alt=""/>
                            </div>
                            <div class="product-left">
                                <h4><?php echo $product['title'] ?></h4>
                                <p><?php echo $product['about'] ?> </p>
                                <a href="gallery.html"><i class="glyphicon glyphicon-circle-arrow-left"
                                                          aria-hidden="true"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
        <!---product-->
        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
        <!---news--->
        <div class="news-section">
            <div class="container">
                <h3><?php echo $show['news_section'] ?></h3>
                <?php
                $indexnews = indexnews();
                if ($indexnews) {
                    foreach ($indexnews as $product) {
                        ?>
                        <div class="news-grids wow fadeInLeft animated" data-wow-delay=".5s">
                            <div class="col-md-4 new-grid">
                                <div id="box" class="burst-circle teal">
                                    <div class="caption"></div>
                                    <img src="images/n1.jpg" class="img-responsive"/>
                                    <h4> طرح‌نما </h4>
                                </div>
                            </div>
                            <div class="col-md-8 new-grid1 hvr-bounce-to-left">
                                <h5><i class="glyphicon glyphicon-calendar"
                                       aria-hidden="true"></i> <?php echo $product['date'] ?></h5>
                                <h4><?php echo $product['title'] ?></h4>
                                <p><?php echo $product['about'] ?> </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <?php
                    }
                } ?>
            </div>
        </div>
        <!---news--->
        <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
        <!---Testimonials--->
        <div class="testimonials-section">
            <div class="container">
                <h3><?php echo $show['testimonials_section'] ?></h3>
                <div class="testimonials-grids">
                    <div class="col-md-2 testimonials-grid1 wow fadeInLeft animated" data-wow-delay=".5s">
                        <img src="images/t1.png" class="img-responsive" alt=""/>
                    </div>
                    <div class="col-md-10 testimonials-grid wow fadeInRight animated" data-wow-delay=".5s">
                        <p><?php echo $show['testimonials_text'] ?></p>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!---Testimonials--->
    </div>
    <!---footer--->
    <!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
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
</marquee>
</body>
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
</html>