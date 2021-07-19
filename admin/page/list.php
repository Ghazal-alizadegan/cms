
<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست صفحات
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان صفحه</th>
                    <th> توضیحات صفحه</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listpage=listpage();
                if($listpage){
                foreach ($listpage as $page){?>
                    <tr>
                        <td><?php echo $page['title']; ?></td>
                        <td><?php echo $page['about']; ?></td>
                        <td><input type="text" style="direction: rtl" value="/cms/page.php?id=<?php echo $page['id']; ?>"></td>
                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=page&p=edit&id=<?php echo $page['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=page&p=delete&id=<?php echo $page['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

