<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/styles.css">
</head>
<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url('feed');?>">
                <img src="<?php echo base_url();?>assets/images/logo.png" />
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
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="<?php echo base_url();?>assets/images/<?php echo $profile->avatar;?>"style="width:150px;height:200px"/>
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?php echo $profile->username;?></h3>
                    <a href="<?php echo base_url('Edit_Profile');?>">Edit profile</a>
                    <a href="<?php echo base_url('profile/logout');?>"><i class="fa fa-cog fa-lg"></i></a>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?php echo $post;?></span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number"><?php echo $followers;?></span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number"><?php echo $following;?></span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?php echo $profile->name;?>
                    <br>
                    </span> <?php echo $profile->bio;?>
                    <a href="#"><?php echo $profile->website;?></a>
                </p>
            </div>
        </header>
        <?php if (empty($allPost)) : ?>
        <div class="photo__likes" role="alert">
            <span class="photo__likes">
                Tidak ada post
            </span>
        </div>
        <?php endif; ?>
        <section class="profile__photos">
            <?php foreach ($allPost as $post) : ?>
            <div class="profile__photo">
            <img src="<?php echo base_url();?>assets/images/<?php echo $post->pict;?>"/>
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        <?php echo $post->likes;?>
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
            <?php endforeach ?>
        </section>
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