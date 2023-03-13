<?php

function add_product()
{
    if (isset($_SESSION['useradmin'])) {
        $loai = loai_all();
        renderadmin(
            "add_product",
            ['loai' => $loai],
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}

function list_product()
{
    if (isset($_SESSION['useradmin'])) {
        $product = hang_hoa_all();
        renderadmin(
            "list_product",
            ['product' => $product]
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}

function productone()
{
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        $product = product_one($id);
        $product_list = product_one_list($product['ma_loai']);
        $cmt = cmt_view($id);
        if (isset($_POST['comment'])) {
            $kh =  $_SESSION['user']['ma_kh'];
            extract($_POST);
            $now = new DateTime();
            $date = $now->format('Y-m-d');

            $data = [
                $kh,
                $id,
                $inputcmt,
                $date
            ];
            cmt_insert($data);
            unset($_POST['comment']);
            header("location: ?ctr=product&id=$id");
        }
        render(
            "product",
            [
                'product' => $product,
                'product_list' => $product_list,
                'cmt' => $cmt
            ]
        );
        $sessionKey = 'post' . $id;
        $sessionView = $_SESSION[$sessionKey];
        // if (!$sessionView) { // nếu chưa có session

        // } 
        if (empty($sessionView)) {
            $_SESSION[$sessionKey] = "Linh Đẹp Trai"; //set giá trị cho session
            update_view($id);
        }
    } else {
        render("home");
    }
}

function save_product()
{
    extract($_POST);
    $image = $_FILES['hinh'];
    $hinh = $image['name'];
    $data = [
        $ten_hh,
        $don_gia,
        $giam_gia,
        $hinh,
        $ma_loai,
        $mo_ta
    ];
    // var_dump($data);
    // die;
    hang_hoa_insert($data);
    move_uploaded_file($image['tmp_name'], "public/images/" . $hinh);
    setcookie("success", "Thêm dữ liệu thành công", time() + 2);
    header("location: index.php?ctr=add-product");
    exit;
}

function edit_product()
{
    if (isset($_GET['id']) && ($_GET['id'] > 0)) {
        $id = $_GET['id'];
        $loai = loai_all($id);
        $hanghoa = product_one($id);
        renderadmin(
            "edit_product",
            ['hanghoa' => $hanghoa, 'loai' => $loai],
        );
    } else {
        header("location: index.php?ctr=list-product");
        exit;
    }
}
function xuly_edit_product()
{
    $id = $_GET['id'];
    $hh = product_one($id);
    $hinh = $hh['hinh'];
    $image = $_FILES['hinh'];
    //Kiểm tra nếu người dùng có cập nhật hình thì lấy hình mới, còn không thì vẫn lưu hình cũ
    if ($image['size'] > 0) {
        $hinh = $image['name'];
        //upload
        move_uploaded_file($image['tmp_name'], "public/images/" . $hinh);
    }

    extract($_POST);
    $data = [
        $ten_loai,
        $price,
        $discoust,
        $hinh,
        $ma_loai,
        $describe,
        $id
    ];
    update_product($data);
    header("location: index.php?ctr=list-product");
    die;
}

function search_product()
{
    extract($_POST);
    $seacher = product_seacher($seacher);
    render(
        "search",
        [
            'seacher' => $seacher
        ]
        );

}