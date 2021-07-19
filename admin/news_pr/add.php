<?php
if (isset($_POST['btn'])){
    addnewsparent($_POST);
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
                    <button type="submit" class="btn btn-info" name="btn">افزودن</button>
                </form>
            </div>
        </section>
    </div>
</div>
