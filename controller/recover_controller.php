<?php

function show_recover()
{
    render("recover");
}
function recovery()
{
    extract($_POST);
    if (isset($_POST['recoverypass'])) {
        $data = [
            $user,
            $mail
        ];
        $checkmail = checkmail($data);
        if(is_array($checkmail)){
            $pas = $checkmail['mat_khau'];
            setcookie("use", "$user", time() + 2);
            setcookie("successmail", "$pas", time() + 2);
            setcookie("mail", "$mail", time() + 2);
            setcookie("style", "color:green;font-weight:700", time() + 2);
            header("location: index.php?ctr=recover");
        } else {
            setcookie("use", "$user", time() + 2);
            setcookie("successmail", "Thông tin không chính xác", time() + 2);
            setcookie("mail", "$mail", time() + 2);
            setcookie("style", "color:red;font-weight:700", time() + 2);
            header("location: index.php?ctr=recover");
        }
        exit;
    }
}
