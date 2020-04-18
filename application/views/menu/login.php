<main id="login">
    <div class="login__column">
        <img src="<?= base_url('assets/') ?>images/phoneImage.png" class="login__phone" />
    </div>
    <div class="login__column">
        <div class="login__box">
            <img src="<?= base_url('assets/') ?>images/loginLogo.png" class="login__logo" />
            <form action="<?= base_url('C_login/verify'); ?>" method="post" class="login__form">
                <input type="text" name="username" placeholder="Username" required value="<?= set_value('username'); ?>" />
                <input type="password" name="password" placeholder="Password" required />
                <?php if (isset($error_message)) { ?>
                    <br>
                    <div class="alert alert-danger" role="alert">
                        <?= $error_message ?>
                    </div>
                <?php } ?>
                <input type="submit" value="Log in" />
            </form>
            <span class="login__divider">or</span>
            <a href="#" class="login__link">
                <i class="fa fa-money"></i>
                Log in with Facebook
            </a>
            <a href="#" class="login__link login__link--small">Forgot password</a>
        </div>
        <div class="login__box">
            <span>Don't have an account?</span> <a href="#">Sign up</a>
        </div>
        <div class="login__box--transparent">
            <span>Get the app.</span>
            <div class="login__appstores">
                <img src="<?= base_url('assets/') ?>images/ios.png" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                <img src="<?= base_url('assets/') ?>images/android.png" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
            </div>
        </div>
    </div>
</main>