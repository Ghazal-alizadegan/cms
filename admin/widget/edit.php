<?php
$id=$_GET['id'];
$show=showeditwidget($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editwidget($data,$id);
    header("location:dashbord.php?m=widget&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش ویجت
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">توضیحات</label>
                        <textarea class="form-control" name="about" placeholder="توضیحات" id="editor1"> <?php echo $show['about']?></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">Submit</button>
                </form>

            </div>
        </section>
    </div>
</div>
