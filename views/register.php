<?php $title = "Register" ?>

<?php include_once "header.php" ?>

<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Tạo tài khoản</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <div class="thongbao">
                            <?php if (isset($_COOKIE['oke'])) : ?>
                                <p>
                                    <?= $_COOKIE['oke'] ?>
                                </p>
                            <?php endif ?>
                        </div>
                        <form accept-charset='UTF-8' action='?ctr=register' method='post'>
                        <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input type="text" value="" placeholder="Họ và tên" name="hoten" class="text" size="30" required />
                            </div>
                            <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input type="email" value="" placeholder="Email" name="email" class="text" size="30" required />
                            </div>
                            <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input type="text" value="" placeholder="Số điện thoại" name="sdt" class="text" size="30" required />
                            </div>
                            <div id="form-first_name" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-user "></i></label>
                                <input type="text" value="" name="usename" placeholder="User Name" class="text" size="30" required />
                            </div>
                            <div id="form-password" class="clearfix large_form large_form-mr10">
                                <label class="label icon-field"><i class="icon-login icon-shield "></i></label>
                                <input type="password" value="" placeholder="Mật khẩu" name="password" class="password text" size="30" required />
                            </div>
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" name="register" type="submit" value="Đăng kí" />
                                </div>
                                <div class="action_bottom button dark">
                                    <input class="btn" name="" type="" value="Nhập lại" />
                                </div>
                            </div>
                            <div class="clearfix req_pass site_account_secondary-action ">
                                <p>Bạn đã có tài khoản?
                                    <a class="link mt-2" href="?ctr=login">Đăng nhập</a>
                                </p>
                            </div>
                            <div class="clearfix req_pass">
                                <a class="come-back" href="index.php"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php include_once "footer.php" ?>