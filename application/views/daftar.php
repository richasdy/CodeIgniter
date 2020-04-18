<!DOCTYPE html>
<html>   
    <head> 
        <title>Vietgram | SignUp</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content="Vietgram, like Instagram but with Pho" />
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    </head>
    <style>
        input[type],input[text]{
            margin-bottom: 10px;
        }
    </style>
    <body>
        <main id="login">
        
            <div class="login__column">
            <img src="<?php echo site_url('assets/images/phoneImage.png'); ?>" class="login__phone" />
            </div>
            <div class="login__column">
                <div class="login__box">
                <img src="<?php echo site_url('assets/images/loginLogo.png');?>" class="login__logo" />
                    <?php if(isset($error_message)) { ?>
                        <div class="alert alert-danger" role="alert">
                            <?= $error_message ?>
                        </div>
                    <?php } ?>
                    <form action="<?php echo site_url('daftar/aksi_daftar'); ?>" method="post" class="login__form">
                        <input type="text" name="username" placeholder="Username" required />
                        <input type="password" name="password" placeholder="Password" required />
                        <input type="text" name="name" placeholder="Name" required />
                        <input type="text" name="website" placeholder="Website" required />
                        <input type="text" name="bio" placeholder="Bio" required />
                        <input type="text" name="email" placeholder="Email" required />
                        <input type="text" name="nohp" placeholder="Nohp" required />
                        <select name="gender" required />
                            <option>Jenis Kelamin</option>
                            <option value="1">Laki Laki</option>
                            <option value="0">Perempuan</option>                    
                        </select>
                        <input type="submit" value="Sign Up" />                        
                    </form>
                    
                </div>
                <div class="login__box">
                        <span>You have an account?</span> <a href="<?= site_url()?>login">Login</a>
                    </div>
                <div class="login__box--transparent">
                    <span>Get the app.</span>
                    <div class="login__appstores">
                    <img src="<?php echo base_url('assets/images/ios.png')?>" class="login__appstore" alt="Apple appstore logo" title="Apple appstore logo" />
                    <img src="<?php echo base_url('assets/images/android.png')?>" class="login__appstore" alt="Android appstore logo" title="Android appstore logo" />
                    </div>
                </div>
            </div>
        </main>
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