<div class="row">
    <div class="col-lg-12">
        <section class="panel">
            <header class="panel-heading">
                لیست اخبار
            </header>
            <table class="table table-striped table-advance table-hover">
                <thead>
                <tr>
                    <th> نام </th>
                    <th> ایمیل</th>
                    <th> موضوع</th>
                    <th> توضیحات</th>
                    <th>جزییات</th>
                    <th>حذف</th>
                </tr>
                </thead>
                <tbody>
                <?php
                $listcontact=listncontact();
                if($listcontact){
                foreach ($listcontact as $news){?>
                    <tr>
                        <td><?php echo $news['name']; ?></td>
                        <td><?php echo $news['email']; ?></td>
                        <td><?php echo $news['subject']; ?></td>
                        <td><?php echo $news['about']; ?></td>

                        <td><a class="btn btn-primary btn-xs"href="dashbord.php?m=contact&p=detail&id=<?php echo $news['id']; ?>"><i class="icon-pencil"></i></a></td>
                        <td><a href="dashbord.php?m=contact&p=delete&id=<?php echo $news['id']; ?>" class="btn btn-danger btn-xs"><i class="icon-trash "></i></a></td>
                    </tr>
                <?php
                }}?>

                </tbody>
            </table>
        </section>
    </div>
</div>

