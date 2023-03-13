<?php
function show_login()
{
    if (isset($_SESSION['user'])) {
        header("location: index.php");
        exit;
    } else {
        render("login");
    }
    
}
function show_loginadmin()
{
    renderadmin("login");
}

function login(){
    extract($_POST);
    if(isset($_POST['login'])){
        $data = [
            $username,
            $password
        ];
        $check = check_login($data);
        if(is_array($check)){
            $_SESSION['user'] = $check;
            header("location: index.php");
        } else {
            setcookie("success", "Tài khoản hoặc mật khẩu không chính sác !!!", time() + 2);
            header("location: index.php?ctr=login");
        }
        exit;
        
    } 
}
function loginadmin(){
    extract($_POST);
    if(isset($_POST['loginadmin'])){
        $data = [
            $username,
            $password,
            $vaitro
        ];
        $checkadmin = check_loginadmin($data);
        if(is_array($checkadmin)){
            $_SESSION['useradmin'] = $checkadmin;
            header("location: index.php?ctr=admin");
        } else {
            setcookie("false", "Login false !!!", time() + 2);
            header("location: index.php?ctr=login-admin");
        }
        exit;
        
    } 
}