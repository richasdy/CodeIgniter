<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!-- Nama: Haris Subekti
NIM: 1301183323
Kelas: IF-42-11 -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css'); ?>">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= site_url('User/load_feed') ?>">
                <img src="<?= base_url('assets/images/logo.png'); ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= site_url('User/load_explore') ?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= site_url('User') ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="<?= base_url('assets/images/haris.jpg'); ?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?= $this->session->userdata('username'); ?></h3>
                    <a href="<?= site_url('User/load_editProfile'); ?>">Edit profile</a>
                    <a href="<?= site_url('User/load_uploadPhoto'); ?>">Upload photo</a>
                    <a href="<?= site_url('Auth/do_logout') ?>">Logout</a>
                    <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number">6</span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">435</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">479</span> following
                    </li>
                </ul>
                <!-- Profile -->
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?= $this->session->userdata('name'); ?>
                        <br>
                    </span>
                    <?= $this->session->userdata('bio'); ?>
                    <a href="#"><?= $this->session->userdata('website'); ?></a>
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <!-- Feed Photo -->
            <?php
            $query_image = $this->db->get('photo')->result_array();
            foreach ($query_image as $row) { ?>
                <div class="profile__photo">
                    <img src="<?= base_url('assets/images/').$row["url"] ?>" />
                    <div class="profile__photo-overlay">
                        <span class="overlay__item">
                            <i class="fa fa-heart"></i>
                            <?= $row["like"] ?>
                        </span>
                        <span class="overlay__item">
                            <i class="fa fa-comment"></i>
                            344
                        </span>
                    </div>
                </div>
            <?php
            }
            ?>
            <div class="profile__photo">
                <img src="<?= base_url('assets/images/feedPhoto.jpg'); ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        486
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="<?= base_url('assets/images/feedPhoto.jpg'); ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        486
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="<?= base_url('assets/images/feedPhoto.jpg'); ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        486
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="<?= base_url('assets/images/feedPhoto.jpg'); ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        486
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
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