<?php $title = "Change Password" ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">

    <div class="layout-info-account">
        <div class="title-infor-account text-center">
            <h1>Tài khoản của bạn </h1>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-3 sidebar-account">
                    <div class="AccountSidebar">
                        <h3 class="AccountTitle titleSidebar">Tài khoản</h3>
                        <div class="AccountContent">
                            <div class="AccountList">
                                <ul class="list-unstyled">
                                    <li class="current"><a href="?ctr=account">Thông tin tài khoản</a></li>
                                    <li class="current"><a href="?ctr=changepassword">Đổi mật khẩu</a></li>
                                    <li><a href="/account/addresses">Danh sách địa chỉ</a></li>
                                    <?php
                                    if (isset($_SESSION['user']) && ($_SESSION['user']['vai_tro'] == 1)) {

                                    ?>
                                        <li><a href="?ctr=admin" style="color: red">Đăng nhập ADMIN</a></li>
                                    <?php } ?>
                                    <li class="last"><a href="?ctr=logout">Đăng xuất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-9">
                    <div class="row">
                        <div class="col-xs-12" id="customer_sidebar">
                            <p class="title-detail">Đổi mật khẩu</p>
                            <div class="userbox">
                                <?php
                                if (isset($_SESSION['user'])) {

                                ?>
                                    <form accept-charset='UTF-8' action='?ctr=changepassword' id='create_customer' method='post'>
                                        <input type="hidden" value="<?= $_SESSION['user']['ma_kh'] ?>" name="makh">
                                        <div id="form-email" class="clearfix large_form">
                                            <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i>Họ tên</label>
                                            <input type="text" value="" name="passold" class="text" size="30" required placeholder="Nhập mật khẩu cũ" />
                                        </div>
                                        <div id="form-email" class="clearfix large_form">
                                            <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                            <input type="text" value="" name="passnew" class="text" size="30" required placeholder="Nhập mật khẩu mới"/>
                                        </div>

                                        <div id="form-password" class="clearfix large_form">
                                            <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                                            <input type="password" value="" name="repassnew" class="password text" size="30" required placeholder="Nhập lại mật khẩu mới" />
                                        </div>
                                        <?php if (isset($_COOKIE['changepass'])) : ?>
                                            <p style="color: red; font-weight: 700;">
                                                <?= $_COOKIE['changepass'] ?>
                                            </p>
                                        <?php endif ?>
                                        <div class="clearfix action_account_custommer">
                                            <div class="action_bottom button dark">
                                                <input class="btn" name="changer" type="submit" value="Cập nhật" />
                                            </div>
                                        </div>
                                        <div class="clearfix req_pass">
                                            <a class="come-back" href="index.php"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                                        </div>
                                    </form>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</main>
<?php include_once "footer.php" ?>