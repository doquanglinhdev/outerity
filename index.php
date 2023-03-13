<?php
session_start();
require_once "models/connect.php";
require_once "models/category.php";
require_once "models/product.php";
require_once "models/register.php";
require_once "models/login.php";
require_once "models/logout.php";
require_once "models/user.php";
require_once "models/recovery.php";
require_once "models/comment.php";

require_once "controller/user_controller.php";
require_once "controller/controller.php";
require_once "controller/error_controller.php";
require_once "controller/home_controller.php";
require_once "controller/category_controller.php";
require_once "controller/product_controller.php";
require_once "controller/contact_controller.php";
require_once "controller/about_controller.php";
require_once "controller/register_controller.php";
require_once "controller/login_controller.php";
require_once "controller/account_controller.php";
require_once "controller/recover_controller.php";
require_once "controller/comment_controller.php";

//Lấy dữ liệu từ GET
//lấy yêu cầu ctr

$ctr = isset($_GET['ctr']) ? $_GET['ctr'] : '/';

//Xử lý màn hình của người dùng
switch ($ctr) {
    case '/':
    case 'home':
        show_home();
        break;

    case 'contact':
        show_contact();
        break;

    case 'about':
        show_about();
        break;

    case 'register':
        if (isset($_POST['register']) && ($_POST['register'])) {
            register();
        };
        show_register();
        break;

    case 'login':
        if (isset($_POST['login']) && ($_POST['login'])) {
            login();
        };
        show_login();
        break;

    case 'search':
        if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
            search_product();
        };
        break;

    case 'changepassword':
        if (isset($_POST['changer']) && ($_POST['changer'])) {
            changer_pass();
        };
        show_change();
        break;

    case 'account':
        if (isset($_POST['update']) && ($_POST['update'])) {
            update_account();
        };
        show_account();
        break;

    case 'logout':
        logout();
        break;

    case 'list-category':
        list_category();
        break;

    case 'add-category':
        add_category();
        break;

    case 'save-category':
        save_category();
        break;

    case 'list-product':
        list_product();
        break;

    case 'add-product':
        add_product();
        break;

    case 'save-add-product':
        save_product();
        break;

    case 'delete-category':
        delete_category();
        break;

    case 'delete-product':
        delete_product();
        break;

    case 'delete-user':
        delete_user();
        break;

    case 'delete-cmt':
        delete_cmt();
        break;

    case 'comment':
        commentt();
        break;

    case 'recover':
        if (isset($_POST['recoverypass']) && ($_POST['recoverypass'])) {
            recovery();
        };
        show_recover();
        break;

    case 'product':
        productone();
        break;

    case 'admin':
        show_homeadmin();
        break;

    case 'edit-category':
        if (isset($_POST['btn_edit']) && ($_POST['btn_edit'])) {
            xuly_edit();
        };
        edit_category();
        break;

    case 'edit-product':
        if (isset($_POST['btn_editt']) && ($_POST['btn_editt'])) {
            xuly_edit_product();
        };
        edit_product();
        break;

    case 'create-user':
        if (isset($_POST['create']) && ($_POST['create'])) {
            create_user_admin();
        };
        create_user();
        break;

    case 'list-user':
        admin_user();
        break;

    case 'edit-user':
        if (isset($_POST['update']) && ($_POST['update'])) {
            update_user();
        };
        edit_user_one();
        break;

    case 'category':
        product_category();
        break;

    case 'login-admin':
        if (isset($_SESSION['useradmin'])) {
            add_category();
        } else {
            if (isset($_POST['loginadmin']) && ($_POST['loginadmin'])) {
                loginadmin();
            };
            show_loginadmin();
        }

        break;
    default:
        show_error();
}
