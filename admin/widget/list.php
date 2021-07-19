
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست ویجت
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان ویجت</th>
                    <th> توضیحات</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listwidget=listwidget();
                if($listwidget){
                foreach ($listwidget as $widget){?>
                    <tr>
                        <td><?php echo $widget['title']; ?></td>
                        <td><?php echo $widget['about']; ?></td>
                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=widget&p=edit&id=<?php echo $widget['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=widget&p=delete&id=<?php echo $widget['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

