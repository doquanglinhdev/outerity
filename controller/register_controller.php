<?php

function show_register()
{
    render("register");
}


function register(){
    extract($_POST);
    if(isset($_POST['register'])){
        $vt= 0;
        $data = [
            $usename,
            $email,
            $password,
            $hoten,
            $sdt,
            $vt
        ];
        register_add($data);
        setcookie("oke", "Đăng kí thành công !!!", time() + 2);
        header("location: index.php?ctr=register");
        exit;
        
    }  
}