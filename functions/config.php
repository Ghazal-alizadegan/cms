<?php
function config()
{
    $server = "localhost";
    $user = "root";
    $password = '';
    $db = "cms";
    $connection = mysqli_connect($server, $user, $password, $db);
    mysqli_set_charset($connection, "utf8");
    mysqli_query($connection, "SET NAMES 'utf8 ");
    return $connection;
}

function addmenu($data)
{
    $title = $data['title'];
    $url = $data['url'];
    $status = $data['status'];
    $parent = $data['parent'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO menu_tbl(url,title,parent,status,sort) VALUES ('$url','$title','$parent','$status','$sort')";
    mysqli_query($conn, $sql1);
}

function submenu()
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE parent='0'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function listmenuadmin()
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function parentmenu($parent)
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$parent'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result['title'];
}

function deletemenu($id)
{
    $conn = config();
    $sql = "DELETE FROM menu_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}

function showedit($id)
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editmenu($data, $id)
{
    $title = $data['title'];
    $url = $data['url'];
    $status = $data['status'];
    $parent = $data['parent'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE menu_tbl SET title='$title',url='$url',status='$status',parent='$parent',sort='$sort'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}

function indexmenu()
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE parent='0' AND status='1'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function indexmenudrowpdown($id)
{
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE parent='$id' AND status='1'";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function addproductparent($data)
{
    $title = $data['title'];
    $status = $data['status'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO product_pr_tbl(title,status,sort) VALUES ('$title','$status','$sort')";
    mysqli_query($conn, $sql1);
}

function subproductparent()
{
    $conn = config();
    $sql = "SELECT * FROM product_pr_tbl";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function addproduct($data)
{
    $title = $data['title'];
    $status = $data['status'];
    $about = $data['about'];
    $parent = $data['parent'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO product_tbl(title,status,sort,parent,about) VALUES ('$title','$status','$sort','$parent','$about')";
    mysqli_query($conn, $sql1);
}

function listproductparent()
{
    $conn = config();
    $sql = "SELECT * FROM product_pr_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function listproduct()
{
    $conn = config();
    $sql = "SELECT * FROM product_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function productparent($parent)
{
    $conn = config();
    $sql = "SELECT * FROM product_pr_tbl WHERE id='$parent'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result['title'];
}

function deleteproduct($id)
{
    $conn = config();
    $sql = "DELETE FROM product_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}

function deleteproductparent($id)
{
    $conn = config();
    $sql = "DELETE FROM  product_pr_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $sql1 = "DELETE FROM product_tbl WHERE parent='$id'";
    $res1 = mysqli_query($conn, $sql1);
}

function indexproduct()
{
    $conn = config();
    $sql = "SELECT * FROM product_tbl";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function showeditproduct($id)
{
    $conn = config();
    $sql = "SELECT * FROM product_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editproduct($data, $id)
{
    $title = $data['title'];
    $about = $data['about'];
    $status = $data['status'];
    $parent = $data['parent'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE product_tbl SET title='$title',about='$about',parent='$parent',sort='$sort',status='$status'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}

function subproduct()
{
    $conn = config();
    $sql = "SELECT * FROM product_pr_tbl";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function showeditproductparent($id)
{
    $conn = config();
    $sql = "SELECT * FROM product_pr_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editproductparent($data, $id)
{
    $title = $data['title'];
    $status = $data['status'];
    $sort = $data['sort'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE product_pr_tbl SET title='$title',sort='$sort',status='$status'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}

//product end
function addnewsparent($data)
{
    $title = $data['title'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO news_pr_tbl(title) VALUES ('$title')";
    mysqli_query($conn, $sql1);
}

function addnews($data)
{
    $title = $data['title'];
    $date = $data['date'];
    $about = $data['about'];
    $parent = $data['parent'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO news_tbl(title,parent,about,date) VALUES ('$title','$parent','$about','$date')";
    mysqli_query($conn, $sql1);
}

function subnewsparent()
{
    $conn = config();
    $sql = "SELECT * FROM news_pr_tbl";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function listnewsparent()
{
    $conn = config();
    $sql = "SELECT * FROM news_pr_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function listnews()
{
    $conn = config();
    $sql = "SELECT * FROM news_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function newsparent($parent)
{
    $conn = config();
    $sql = "SELECT * FROM news_pr_tbl WHERE id='$parent'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result['title'];
}

function deletenews($id)
{
    $conn = config();
    $sql = "DELETE FROM news_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}

function deletenewsparent($id)
{
    $conn = config();
    $sql = "DELETE FROM  news_pr_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $sql1 = "DELETE FROM news_tbl WHERE parent='$id'";
    $res1 = mysqli_query($conn, $sql1);
}

function showeditnews($id)
{
    $conn = config();
    $sql = "SELECT * FROM news_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editnews($data, $id)
{
    $title = $data['title'];
    $about = $data['about'];
    $parent = $data['parent'];
    $date = $data['date'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE news_tbl SET title='$title',about='$about',parent='$parent',date='$date'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}

function subnews()
{
    $conn = config();
    $sql = "SELECT * FROM news_pr_tbl";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function showeditnewsparent($id)
{
    $conn = config();
    $sql = "SELECT * FROM news_pr_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editnewsparent($data, $id)
{
    $title = $data['title'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE news_pr_tbl SET title='$title'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}

function indexnews()
{
    $conn = config();
    $sql = "SELECT * FROM news_tbl";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

// news end
function addcontact($data)
{
    $name = $data['name'];
    $subject = $data['subject'];
    $about = $data['about'];
    $email = $data['email'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO contact_tbl(name,subject,about,email) VALUES ('$name','$subject','$about','$email')";
    mysqli_query($conn, $sql1);
}

function listncontact()
{
    $conn = config();
    $sql = "SELECT * FROM contact_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}

function deletecontact($id)
{
    $conn = config();
    $sql = "DELETE FROM contact_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}

function showcontactdetail($id)
{
    $conn = config();
    $sql = "SELECT * FROM contact_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

//contact end
function showsetting()
{
    $conn = config();
    $sql = "SELECT * FROM setting_tbl ";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editindexsetting($data)
{
    $site_title= $data['site_title'];
    $site_subject= $data['site_subject'];
    $address= $data['address'];
    $tell= $data['tell'];
    $fax= $data['fax'];
    $copyright= $data['copyright'];
    $email= $data['email'];
    $instagram= $data['instagram'];
    $banner_title= $data['banner_title'];
    $banner= $data['banner'];

    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE setting_tbl SET
    site_title= '$site_title',
    site_subject= '$site_subject',
    address= '$address',
    tell= '$tell',
    fax= '$fax',
    copyright= '$copyright',
    email= '$email',
    instagram= '$instagram',banner_title= '$banner_title',
    banner= '$banner'";
    mysqli_query($conn, $sql1);
}
function editindexsetting_welcome($data)
{
    $welcome_section= $data['welcome_section'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE setting_tbl SET welcome_section= '$welcome_section'";
    mysqli_query($conn, $sql1);
}
function editindexsetting_testimonials($data)
{
    $testimonials_text= $data['testimonials_text'];
    $testimonials_section= $data['testimonials_section'];

    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE setting_tbl SET
    testimonials_text= '$testimonials_text',
    testimonials_section= '$testimonials_section',";
    mysqli_query($conn, $sql1);
}
function editindexsetting_products($data)
{
    $products_section= $data['products_section'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE setting_tbl SET products_section= '$products_section'";
    mysqli_query($conn, $sql1);
}
function editindexsetting_news($data)
{
    $news_section= $data['news_section'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE setting_tbl SET news_section= '$news_section'";
    mysqli_query($conn, $sql1);
}
// index setting end
function addwidegt($data)
{
    $title = $data['title'];
    $about = $data['about'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO widget_tbl(title,about) VALUES ('$title','$about')";
    mysqli_query($conn, $sql1);
}
function listwidget()
{
    $conn = config();
    $sql = "SELECT * FROM widget_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }
}
function deletewidget($id)
{
    $conn = config();
    $sql = "DELETE FROM widget_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}
function showeditwidget($id)
{
    $conn = config();
    $sql = "SELECT * FROM widget_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}
function editwidget($data, $id)
{
    $title = $data['title'];
    $about = $data['about'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE widget_tbl SET title='$title',about='$about'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}
function indexwidget()
{
    $conn = config();
    $sql = "SELECT * FROM widget_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}}
// end widget
function addpage($data)
{
    $title = $data['title'];
    $keywords = $data['keywords'];
    $about = $data['about'];
    $body = $data['body'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "INSERT INTO page_tbl(title,body,about,keywords) VALUES ('$title','$body','$about','$keywords')";
    mysqli_query($conn, $sql1);
}
function listpage()
{
    $conn = config();
    $sql = "SELECT * FROM page_tbl ";
    $res = mysqli_query($conn, $sql);
    if (mysqli_num_rows($res) > 0) {
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }}
function deletepage($id)
{
    $conn = config();
    $sql = "DELETE FROM page_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}
function showeditpage($id)
{
    $conn = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}

function editpage($data, $id)
{
    $title = $data['title'];
    $keywords = $data['keywords'];
    $about = $data['about'];
    $body = $data['body'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE page_tbl SET title='$title',about='$about',keywords='$keywords',body='$body'WHERE id='$id'";
    mysqli_query($conn, $sql1);
}
function detailpage($id)
{
    $conn = config();
    $sql = "SELECT * FROM page_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    return $row;
}
function showcontactsetting()
{
    $conn = config();
    $sql = "SELECT * FROM contact_page_setting_tbl ";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}
function editcontactsetting($data)
{
    $page_title = $data['page_title'];
    $call_information= $data['call_information'];
    $sendmassage= $data['sendmassage'];
    $address= $data['address'];
    $tell= $data['tell'];
    $email= $data['email'];
    $conn = config();
    mysqli_set_charset($conn, "utf8");
    mysqli_query($conn, "SET NAMES 'utf8 ");
    $sql1 = "UPDATE contact_page_setting_tbl SET
    page_title='$page_title',
    call_information= '$call_information',
  sendmassage= '$sendmassage',
    address= '$address',
    tell= '$tell',
    email= '$email'";
    mysqli_query($conn, $sql1);
}