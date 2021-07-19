<?php
if (isset($_POST['btn'])){
    addproductparent($_POST);
}
?>
<div class="row">
    <div class="col-lg-8 col-lg-offset-2">
        <section class="panel">
            <header class="panel-heading">
                افزودن سرگروه جدید            </header>
            <div class="panel-body">
                <form role="form" method="post">
                    <div class="form-group">
                        <label for="exampleInputEmail1">عنوان سرگروه</label>
                        <input type="text" class="form-control" name="title" placeholder="عنوان">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">وضیعت</label>
                    <div class="radio">

                        <label>
                            <input type="radio" name="status"value="1" checked>
                            فعال
                        </label>
                    </div>
                    <div class="radio">
                        <label>
                            <input type="radio" name="status" value="0">
                            غیر فعال
                        </label>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">ترتیب</label>
                        <input type="" class="form-control" name="sort" placeholder="ترتیب">
                    </div>
                    <button type="submit" class="btn btn-info" name="btn">افزودن</button>
                </form>
            </div>
        </section>
    </div>
</div>
