<?php
$show=showsetting();
if (isset($_POST['btn_index'])){
    $data=$_POST;
    editindexsetting($data);
    header("location:dashbord.php?m=setting&p=editindex");
}
if (isset($_POST['btn_welcome'])){
    $data=$_POST;
    editindexsetting_welcome($data);
    header("location:dashbord.php?m=setting&p=editindex");
}
if (isset($_POST['btn_products'])){
    $data=$_POST;
    editindexsetting_products($data);
    header("location:dashbord.php?m=setting&p=editindex");
}
if (isset($_POST['btn_news'])){
    $data=$_POST;
    editindexsetting_news($data);
    header("location:dashbord.php?m=setting&p=editindex");
}
if (isset($_POST['btn_testimonials'])){
    $data=$_POST;
    editindexsetting_testimonials($data);
    header("location:dashbord.php?m=setting&p=editindex");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش تنظیمات سایت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سایت</label>
                        <input type="text" class="form-control" name="site_title"  value="<?php echo $show['site_title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">موضوع سایت</label>
                        <input type="text" class="form-control" name="site_subject"  value="<?php echo $show['site_subject']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان بنر</label>
                        <input type="text" class="form-control" name="banner_title"  value="<?php echo $show['banner_title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1"> بنر</label>
                        <input type="file" class="form-control" name="banner"  value="<?php echo $show['banner']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">تلفن</label>
                        <input type="text" class="form-control" name="tell" value="<?php echo $show['tell']?>">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">فکس</label>
                    <input type="text" class="form-control" name="fax" value="<?php echo $show['fax']?>">
            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ایمیل</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $show['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">ادرس اینستاگرام </label>
                        <input type="text" class="form-control" name="instagram" value="<?php echo $show['instagram']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ادرس  شرکت</label>
                        <textarea class="form-control" name="address" id="editor1"> <?php echo $show['address']?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
            <div class="form-group">
                <label for="exampleInputPassword1">کپی رایت</label>
                <textarea class="form-control" name="copyright" id="editor1" > <?php echo $show['copyright']?></textarea>
                <script>
                    CKEDITOR.replace( 'editor1' );
                </script>
            </div>
                    <button type="submit" class="btn btn-info" name="btn_index">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>

<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش بخش خوش آمدید
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان بخش</label>
                        <input type="text" class="form-control" name="welcome_section"  value="<?php echo $show['welcome_section']?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn_welcome">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش بخش محصولات
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان بخش</label>
                        <input type="text" class="form-control" name="products_section"  value="<?php echo $show['products_section']?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn_products">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش بخش اخبار
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان بخش</label>
                        <input type="text" class="form-control" name="news_section"  value="<?php echo $show['news_section']?>">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn_news">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش بخش گواهی
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان بخش</label>
                        <input type="text" class="form-control" name="testimonials_section"  value="<?php echo $show['testimonials_section']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">گواهی نامه</label>
                        <textarea class="form-control" name="testimonials_text" id="editor1"> <?php echo $show['testimonials_text']?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <button type="submit" class="btn btn-info" name="btn_testimonials">ویرایش</button>
                </form>

            </div>
        </section>
    </div>

</div>
