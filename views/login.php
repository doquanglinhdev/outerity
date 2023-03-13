<?php $title = "Login" ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Đăng nhập tài khoản</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <!-- <p class="site_account_legend">Nhập tài khoản và mật khẩu của
                            bạn:</p> -->
                        <form accept-charset='UTF-8' action='?ctr=login' method='post'>
                            <?php if (isset($_COOKIE['success'])) : ?>
                                <p style="color: red">
                                    <?= $_COOKIE['success'] ?>
                                </p>
                            <?php endif ?>
                            <div id="form-email" class="clearfix large_form">
                                <label for="email" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input required type="text" value="" placeholder="User name" name="username" class="text" size="30" />
                            </div>
                            <div id="form-password" class="clearfix large_form large_form-mr10">
                                <label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
                                <input required type="password" value="" placeholder="Mật khẩu" name="password" id="password" class="password text" size="30" />
                            </div>
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Đăng nhập" name="login" />
                                </div>
                            </div>
                            <div class="clearfix req_pass site_account_secondary-action ">
                                <p>Khách hàng mới?
                                    <a class="link mt-2" href="?ctr=register">Tạo
                                        tài khoản</a>
                                </p>
                                <p>Bạn quên mật khẩu?
                                    <a class="link mt-2" href="?ctr=recover">Khôi phục tài khoản</a>
                                </p>
                            </div>
                            <div class="clearfix req_pass">
                                <a class="come-back" href="?ctr=home"><i class="fa fa-long-arrow-left"></i> Quay lại trang chủ</a>
                            </div>
                        </form>
                    </div>

                </div><!-- #register -->
                <!-- #customer-register -->
            </div>
        </div>
    </div>
</main>
<?php include_once "footer.php" ?>