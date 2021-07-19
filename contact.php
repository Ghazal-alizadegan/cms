<?php
include_once 'functions/config.php';
if (isset($_POST['btn'])){
    addcontact($_POST);

}
$showsetting=showcontactsetting();
$show = showsetting();
?>
<!DOCTYPE HTML>
<html>
<head>
    <title><?php echo $show['site_title']." "."-"." ".$showsetting['page_title'] ?></title>
<!---css--->
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/styles_2.css" rel='stylesheet' type='text/css' />
    <link href="css/navstyle.css" rel='stylesheet' type='text/css'/>
<!---css--->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Agrox Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
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
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
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
		<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
		<!---banner--->
		<div style="background: #e4e4e4;">
			<div class="container">
				<nav class="navbar navbar-default">
					<div class="container-fluid">
					<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							 <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
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
				</nav>
			</div>
		</div>
<!---banner-->
<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
	<!---welcome-->
	<div class="content">
	<div class="mail">
		<div class="container">
			<h2>تماس با ما</h2>
			<div class="mail-grids">
				<div class="col-md-6 mail-right wow fadeInLeft animated" data-wow-delay=".5s">
					<h4>اطلاعات تماس</h4>
					<p><?php echo $showsetting['call_information'] ?></p>
					<ul>
						<li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>تلفن<span><?php echo $showsetting['tell'] ?></span></li>
						<li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i>ایمیل<a href="<?php echo $showsetting['email'] ?>"><?php echo $showsetting['email'] ?></a></li>
					</ul>
					<ul>
						<li><i class="glyphicon glyphicon-map-marker" aria-hidden="true"></i>آدرس<span><?php echo $showsetting['address'] ?></span></li>
					</ul>
				</div>
				<div class="col-md-6 mail-right wow fadeInRight animated" data-wow-delay=".5s">
					<h4>ارسال پیام</h4>
					<p><?php echo $showsetting['sendmassage'] ?> </p>
					<form method="post">
						<input type="text" placeholder="نام" required=" " name="name">
						<input type="email" placeholder="ایمیل" required=" "name="email">
						<div class="clearfix"> </div>
						<input type="text" placeholder="موضوع" required=" " name="subject">
						<textarea placeholder="
نوع متن خود را در اینجا ...." required=" " name="about"></textarea>
						<input type="submit" value="ارسال" name="btn">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--ترجمه شده توسط مرجع تخصصی برنامه نویسان-->
<!--	<div class="map wow fadeInDownBig animated" data-wow-delay=".5s">-->
<!--		<div class="container">-->
<!--			<h4>مکان بر روی نقشه</h4>-->
<!--		</div>-->
<!--		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26359195.17562375!2d-113.7156245614499!3d36.2473834534249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited+States!5e0!3m2!1sen!2sin!4v1452332634941" frameborder="0" style="border:0" allowfullscreen></iframe>-->
<!--	</div>-->
<!--	-->
<!--	</div>-->
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
