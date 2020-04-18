<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// $result = mysqli_query($conn, "SELECT count(url) FROM photo");
// $postCount = mysqli_fetch_row($result);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
</head>


    <!-- =================================================================================================================================== -->


<body>
    <nav class="navigation">
    <div class="navigation__column">
            <a href="<?= base_url('controller_feed')?>">
                <img src="<?= base_url('assets/images/logo.png')?>" />
            </a>
        </div>
        <form action="<?= base_url('controller_feed/cari'); ?>" method="get">
            <div class="navigation__column">
                <i class="fa fa-search"></i>
                <input type="text" name="cari" placeholder="Search">
            </div>
        </form>

        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= base_url('controller_upload'); ?>" class="navigation__link">
                        <!-- <i class="fa fa-compass fa-lg"></i> -->
                        <img src="<?= base_url('assets/images/upload1.png')?>" width="22" height="22">
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('controller_profile'); ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="<?= base_url("assets/images/").$profile['photo_profile']; ?>" width="150" height="150" />
            </div>

            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?= $profile['username']; ?></h3>
                        <div class="verified">
                            <img src="<?= base_url('assets/images/verified.png') ?>"/>
                        </div>
                    <a href="<?= base_url('controller_edit'); ?>">Edit profile</a>
                    <a href="<?= base_url('controller_login/logout')?>">Logout</a>
                    <!-- <i class="fa fa-cog fa-lg"></i> -->
                </div>

                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?= $this->session->userdata('jumlahPost'); ?></span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">9872</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1</span> following
                    </li>
                </ul>

                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?= $profile['name'] ?><br>
                    </span> <?= $profile['bio'] ?>
                    <a href="<?= $profile['website'] ?>"><?= $profile['website'] ?></a>
                </p>
            </div>
        </header>

        <section class="profile__photos">
            <?php
                foreach ($posting as $photo) :?>
                    <div class="profile__photo">
                        <img src="<?= base_url("assets/images/").$photo['url']; ?>" />
                        <div class="profile__photo-overlay">
                            <span class="overlay__item">
                                <i class="fa fa-heart"></i>
                                <?= $photo['like']; ?>
                            </span>
                            <!-- <span class="overlay__item">
                                <i class="fa fa-comment"></i>
                                344
                            </span> -->
                        </div>
                    </div>

            <?php endforeach; ?>
        </section>
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