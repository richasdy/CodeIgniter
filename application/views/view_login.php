<!DOCTYPE html>
<html>
    <head>
        <title>Vietgram</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Vietgram, like Instagram but with Pho" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/styles.css' ?>" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.min.css' ?>" />
    </head>
    <body>
       <main id="login">
            <div class="login__column">
                <img src="<?php echo base_url().'assets/images/phoneImage.png';?>" class="login__phone" />
            </div>
            <div class="login__column">
                <div class="login__box">
                    <img src="<?php echo base_url() . 'assets/images/loginLogo.png'; ?>" class="login__logo" />
                    <form action="<?= site_url('login/login') ?>" method="post" class="login__form">
                        <input type="text" name="username" placeholder="Username" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <input type="submit" value="Log in" />
                    </form>
                    <span class="login__divider">or</span>
                    <a href="#" class="login__link">
                        <i class="fa fa-money"></i>
                        Log in with Facebook
                    </a>
                    <?php if(isset($error_message)) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $error_message ?>
                    </div>
                    <?php } ?>
                    <a href="#" class="login__link login__link--small">Forgot password</a>
                </div>
                <div class="login__box">
                    <span>Don't have an account?</span> <a href="#">Sign up</a>
                </div>
                <div class="login__box--transparent">
                    <span>Get the app.</span>
                    <div class="login__appstores">
                        <img src="<?php echo base_url() . 'assets/images/ios.png' ?>" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                        <img src="<?php echo base_url() . 'assets/images/android.png' ?>" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
                    </div>
                </div>
            </div>
        </main>
    </body>