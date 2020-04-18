<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=base_url()?>assets/css/styles.css">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= base_url().'C_feed'?>">
                <img src="assets/images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= base_url().'C_explore'?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url().'C_upload'?>" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url().'C_profile'?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="assets/images/<?= $profile['dp'] ?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"></h3>
                    <h3 class="profile__username"><?= $profile['username'] ?></h3>
                    <a href="<?= base_url().'C_editprofile'?>">Edit profile</a>                 
                    <a href="<?= base_url() ?>C_profile/logout">Log Out     
                        <!--
                        <i class="fa fa-cog fa-lg"></i>
                        -->
                    </a>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?= count($photo)?></span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1234</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">36</span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?= $profile['name'] ?>
                    </span> <?= $profile['bio'] ?>
                    <a href="#"><?= $profile['website'] ?></a>
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <?php foreach($photo as $p) { ?>
            <div class="profile__photo">
                <img src="assets/images/<?=$p['photoname']?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        <?=$p['likes']?>
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        <?=$p['comment']?>
                    </span>
                </div>
            </div>
            <?php } ?>
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