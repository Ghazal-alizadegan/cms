<?php
$show=showcontactsetting();
if (isset($_POST['btn'])){
    $data=$_POST;
    editcontactsetting($data);
    header("location:dashbord.php?m=setting&p=editcontact");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش تنظیمات صفحه تماس با ما
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input type="text" class="form-control" name="page_title" placeholder="عنوان" value="<?php echo $show['page_title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> اطلاعات تماس</label>
                        <textarea class="form-control" name="call_information" ><?php echo $show['call_information']?></textarea>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">تلفن</label>
                        <input type="text" class="form-control" name="tell" value="<?php echo $show['tell']?>">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">ایمیل</label>
                        <input type="email" class="form-control" name="email" value="<?php echo $show['email']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ادرس  شرکت</label>
                        <textarea class="form-control" name="address"><?php echo $show['address']?></textarea>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ارسال پیام</label>
                        <textarea class="form-control" name="sendmassage" ><?php echo $show['sendmassage']?></textarea>
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">ویرایش</button>
                </form>

            </div>
        </section>
    </div>
</div>


