<?php
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
    if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }}

function parentmenu($parent){
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$parent'";
    $res = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result['title'];
}
function deletemenu($id){
    $conn = config();
    $sql = "DELETE FROM menu_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);
}
function showedit($id){
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE id='$id'";
    $res = mysqli_query($conn, $sql);

    $row = mysqli_fetch_assoc($res);
    $result = $row;
    return $result;
}
function editmenu($data,$id)
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
function indexmenu(){
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE parent='0' AND status='1'";
    $res = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($res)) {
        $result[] = $row;
    }
    return $result;
}

function indexmenudrowpdown($id){
    $conn = config();
    $sql = "SELECT * FROM menu_tbl WHERE parent='$id' AND status='1'";
    $res = mysqli_query($conn, $sql);
    if(mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)) {
            $result[] = $row;
        }
        return $result;
    }}
