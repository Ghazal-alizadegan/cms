<?php

if (isset($_POST['btn'])){
    addpage($_POST);

}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن صفحه جدید            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان صفحه</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان">
                    </div>
                    <div class="form-group">
                    <label for="exampleInputEmail1">کلمات کلیدی صفحه</label>
                    <input type="text" class="form-control" name="keywords" placeholder="کلمات کلیدی صفحه">
            </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">توضیحات صفحه</label>
                        <input type="text" class="form-control" name="about" placeholder="توضیحات صفحه">
                    </div>
                    <div class="form-group" >
                        <label for="exampleInputPassword1">محتویات صفحه</label>
                        <textarea class="form-control" name="body" placeholder="محتویات صفحه" id="editor1"></textarea>
                        <script>
                            CKEDITOR.replace( 'editor1' );
                        </script>
                    </div>

                    <button type="submit" class="btn btn-info" name="btn">افزودن</button>
                </form>

            </div>
        </section>
    </div>
</div>
