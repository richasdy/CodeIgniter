<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Vietgram | SIGN UP</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Vietgram, like Instagram but with Pho" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
    </head>


    <!-- =================================================================================================================================== -->



    <body>
        <main id="login">
            <div class="login__column">
                <img src="<?= base_url('assets/images/phone9.gif')?>" class="login__phone" />
            </div>
            <div class="login__column">
                <div class="login__box">
                    <img src="<?= base_url('assets/images/signup2.jpg')?>" class="login__logo" />
                    <form action="<?= base_url('controller_register'); ?>" method="post" class="login__form">
                        <input type="text" name="name" placeholder="Name" required />
                         <br> <!--pegganti css -->
                        <input type="email" name="email" placeholder="Email" required />
                        <br>
                        <input type="text" name="username" placeholder="Username" required />
                        <br>
                        <input type="password" name="password" placeholder="Password" required />
                        <input type="submit" name="signup" value="Sign Up" />
                    </form>


                    <!-- <span class="login__divider">or</span>
                    <a href="https://web.facebook.com/?stype=lo&jlou=AfcYjrQYVz18mefSt3qzBMpRoyyLFlWy5bSlogn1XhaEY3MfTT67KrTLq_VuEshsMZuf9L0Hj-HgSPk23OJOBHLOkNDxp_QqmIuO-gZ1ZmRzgg&smuh=10303&lh=Ac_hxxr6sVS5at12" class="login__link">
                        <i class="fa fa-money"></i>
                        Log in with Facebook
                    </a> -->
    
                    
                </div>
                <div class="login__box">
                    <span>Already have an account?</span> <a href="<?= base_url('controller_login'); ?>">Login</a>
                </div>
                <div class="login__box--transparent">
                    <span>Get the app.</span>
                    <div class="login__appstores">
                        <img src="<?= base_url('assets/images/ios.png')?>" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                        <img src="<?= base_url('assets/images/android.png')?>" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
                    </div>
                </div>
            </div>
        </main>


    <!-- =================================================================================================================================== -->



        <footer class="footer">
            <div class="footer__column">
                <nav class="footer__nav">
                    <ul class="footer__list">
                        <li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
                        <li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
                    </ul>
                </nav>
            </div>
            <div class="footer__column">
                <span class="footer__copyright">© 2017 Vietgram</span>
            </div>
        </footer>
    </body>
</html>