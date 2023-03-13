<?php
function admin_user()
{
    if (isset($_SESSION['useradmin'])) {
        $user = user_all();
        renderadmin(
            "list_user",
            ['user' => $user]
        );
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}


function create_user(){
    renderadmin(
        "create_user"
    );
}
function update_user()
{
    extract($_POST);
    if (isset($_POST['update'])) {
        $data = [
            $hoten,
            $email,
            $pass,
            $sdtt,
            $kichhoat,
            $vaitro,
            $makh
            
        ];
        up_date_user($data);
        setcookie("updatedone", "Cập nhật dữ liệu thành công !!!", time() + 2);
        header("location: index.php?ctr=edit-user&id=$makh");
        exit;
    }
}

function create_user_admin(){
    extract($_POST);
    if (isset($_POST['create'])) {
        $data = [
            $makh,
            $email,
            $pass,
            $hoten,
            $sdtt,
            $kichhoat,
            $vaitro
        ];
        register_add($data);
        setcookie("create", "Tạo tài khoản thành công !!!", time() + 2);
        header("location: index.php?ctr=list-user");
        exit;
    }
}