<?php $title = "Khôi phục mật khẩu" ?>

<?php include_once "header.php" ?>
<main class="mainContent-theme ">
    <div class="layout-account">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-xs-12 wrapbox-heading-account">
                    <div class="header-page clearfix">
                        <h1>Khôi phục mật khẩu</h1>
                    </div>
                </div>
                <div class="col-md-6 col-xs-12 wrapbox-content-account ">
                    <div class="userbox">
                        <!-- <p class="site_account_legend">Nhập tài khoản và mật khẩu của
                            bạn:</p> -->
                        <form accept-charset='UTF-8' action='?ctr=recover' method='post'>

                            <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input required type="text" value="<?php if (isset($_COOKIE['use'])) {
                                                                        echo $_COOKIE['use'];
                                                                    }; ?>" placeholder="Nhập Username" name="user" style="<?php if (isset($_COOKIE['style'])) {
                                                                                                                            echo $_COOKIE['style'];
                                                                                                                        }; ?>" class="text" />
                            </div>
                            <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input required type="text" value="<?php if (isset($_COOKIE['mail'])) {
                                                                        echo $_COOKIE['mail'];
                                                                    }; ?>" placeholder="Nhập Email" name="mail" style="<?php if (isset($_COOKIE['style'])) {
                                                                                                                            echo $_COOKIE['style'];
                                                                                                                        }; ?>" class="text" />
                            </div>
                            <div id="form-email" class="clearfix large_form">
                                <label  class="label icon-field"><i class="icon-login icon-envelope "></i></label>
                                <input type="text" value="<?php if (isset($_COOKIE['successmail'])) {
                                                                echo $_COOKIE['successmail'];
                                                            }; ?>" style="<?php if (isset($_COOKIE['style'])) {
                                                                                echo $_COOKIE['style'];
                                                                            }; ?>" placeholder="Pass sẽ hiện ở đây" class="text" disabled />
                            </div>
                            <!-- <?php if (isset($_COOKIE['falsemail'])) : ?>
                                <p style="color: red">
                                    <?= $_COOKIE['falsemail'] ?>
                                </p>
                            <?php endif ?> -->
                            <div class="clearfix action_account_custommer">
                                <div class="action_bottom button dark">
                                    <input class="btn" type="submit" value="Khôi phục mật khẩu" name="recoverypass" />
                                </div>
                            </div>

                            <div class="clearfix req_pass">
                                <a class="come-back" href="?ctr=login"><i class="fa fa-long-arrow-left"></i> Quay lại đăng nhập</a>
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