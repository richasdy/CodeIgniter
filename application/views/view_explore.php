<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/styles.css">
</head>
<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url('feed');?>">
                <img src="<?php echo base_url();?>/assets/images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <form action="<?php echo base_url('explore/search');?>" method="GET">
                <input type="text" placeholder="Search" name="search">
                <input type="submit" name="submit" hidden>              
            </form>
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php echo base_url('explore');?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url('profile');?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="explore">
        <?php if (empty($users)): ?>
            <span class="photo__likes">
                Tidak ditemukan
            </span>
        <?php endif; ?>
        <ul class="explore__users">
            <?php foreach ($users as $user): ?>
            <li class="explore__user">
                <div class="explore__user-column">
                    <img src="<?php echo base_url();?>/assets/images/<?php echo $user->avatar?>" class="explore__avatar"/>
                    <div class="explore__info">
                        <span class="explore__username"><?php echo $user->username?></span>
                        <span class="explore__full-name"><?php echo $user->name?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button class="explore__button" onclick="window.location='<?php echo base_url();?>explore/add/<?php echo $user->id_user?>'">
                        Follow
                    </button>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
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
        <script>
            document.querySelectorAll('.explore__button').forEach(function(e) {
                e.addEventListener('click', function() {
                    this.style.backgroundColor = "white";
                    this.style.border = "1px solid #e6e6e6";
                    this.style.color = "#000000"
                    this.innerHTML = "Unfollow";
                })
            });
        </script>
</body>
</html>