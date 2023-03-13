<?php

function show_account()
{
    render("account");
}


function show_change()
{
    render("changepassword");
}

function changer_pass()
{
    extract($_POST);
    if (isset($_POST['changer'])) {
        if ($passold  == $_SESSION['user']['mat_khau']) {
            if ($passnew == $repassnew) {
                $data = [
                    $passnew,
                    $makh
                ];
                up_date_pass($data);
                $dataa = [
                    $makh,
                    $passnew,
                ];
                $check = check_login($dataa);
                $_SESSION['user'] = $check;
                setcookie("oke", "Đổi mật khẩu thành công thành công !!!", time() + 2);
                header("location: index.php?ctr=account");
            } else {
                setcookie("changepass", "Mật khẩu mới không trùng khớp !", time() + 2);
                header("location: index.php?ctr=changepassword");
            }
        } else {
            setcookie("changepass", "Sai mật khẩu cũ", time() + 2);
            header("location: index.php?ctr=changepassword");
        }

        exit;
    }
}




function validate_number($phone_number)
{
    if (preg_match('/^[0-9]{11}+$/', $phone_number)) {
        // the format /^[0-9]{11}+$/ will check for phone number with 11 digits and only numbers
        return $phone_number;
    }
}

function edit_user_one()
{
    if (isset($_SESSION['useradmin'])) {
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $edit_user = user_one($id);
            renderadmin(
                "edit_user",
                [
                    'edit_user' => $edit_user
                ]
            );
        }
    } else {
        header("location: index.php?ctr=login-admin");
        exit;
    }
}

function update_account()
{
    extract($_POST);
    if (isset($_POST['update'])) {
        $data = [
            $ten,
            $email,
            $password,
            $sdt,
            $kichhoat,
            $vaitro,
            $makh

        ];
        up_date_user($data);
        $dataa = [
            $makh,
            $password,
        ];
        $check = check_login($dataa);
        $_SESSION['user'] = $check;
        setcookie("oke", "Cập nhật dữ liệu thành công !!!", time() + 2);
        header("location: index.php?ctr=account");
        exit;
    }
}
