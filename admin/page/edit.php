<?php
$id=$_GET['id'];
$show=showeditpage($id);
if (isset($_POST['btn'])){
    $data=$_POST;
    editpage($data,$id);
    header("location:dashbord.php?m=page&p=list");
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                ویرایش صفحه
            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان" value="<?php echo $show['title']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">کلمات کلیدی صفحه </label>
                        <input type="text" class="form-control" name="keywords" value="<?php echo $show['keywords']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات صفحه </label>
                        <input type="text" class="form-control" name="about" value="<?php echo $show['about']?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea class="form-control" name="body" placeholder="توضیحات" id="editor1"> <?php echo $show['body']?></textarea>
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
