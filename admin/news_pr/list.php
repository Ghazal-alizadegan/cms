<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست سرگروه اخبار
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> عنوان سرگروه</th>
                    <th>ویرایش</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listparent=listnewsparent();
                if($listparent){
                foreach ($listparent as $parent){?>
                    <tr>
                        <td><?php echo $parent['title']; ?></td>
                        <td><a class="btn btn-primary btn-xs" href="dashbord.php?m=news_pr&p=edit&id=<?php echo $parent['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=news_pr&p=delete&id=<?php echo $parent['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

