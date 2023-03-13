<?php
function add_category()
{

    if (isset($_SESSION['useradmin'])) {
        $loai = loai_all();
        renderadmin(
            "add_category",
            ['loai' => $loai]
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}
function list_category()
{
    if (isset($_SESSION['useradmin'])) {
        $loai = loai_all();
        renderadmin(
            "list_category",
            ['loai' => $loai]
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}
function save_category()
{
    extract($_POST);
    if (isset($_POST['btn_insert'])) {
        $data = [
            $ten_loai,
        ];
        loai_insert($data);
        setcookie("success", "Thêm dữ liệu thành công", time() + 2);
        header("location: index.php?ctr=add-category");
        exit;
    }
}
function edit_category()
{
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        $loai = category_one($id);
        renderadmin(
            "edit_category",
            ['loai' => $loai]
        );
    } else {
        header("location: index.php?ctr=list-category");
        exit;
    }
}
function xuly_edit()
{
    $id = $_GET['id'];
    extract($_POST);
    $data = [
        $name_category,
        $hien_thi,
        $id
    ];
    update_category($data);
    header("location: index.php?ctr=list-category");
    die;
}

function product_category()
{
    if (isset($_GET['idcategory']) && ($_GET['idcategory'] > 0)) {
        $id = $_GET['idcategory'];
        $cate = product_list($id);
        $namecate = category_one($id);
        render(
            "category",
            [
                'cate' => $cate,
                'namecate' => $namecate
            ]
        );
    } else {
        $cate = hang_hoa_all();
        // $namecate = category_one($id);
        render(
            "category",
            [
                'cate' => $cate
            ]
        );
    }
}
