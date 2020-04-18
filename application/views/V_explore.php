<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!DOCTYPE html>
<!-- Nama: Naufal Alvin Chandrasa
NIM: 1301180214
Kelas: IF-42-11 -->
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Explore | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= site_url('User/load_feed'); ?>">
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
    <main id="explore">
        <ul class="explore__users">
            <li class="explore__user">

                <div class="explore__user-column">
                    <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username"><?= $this->session->userdata('username'); ?></span>
                        <span class="explore__full-name"><?= $this->session->userdata('name') ?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <li class="explore__user">

                <div class="explore__user-column">
                    <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username"><?= $this->session->userdata('username') ?></span>
                        <span class="explore__full-name"><?= $this->session->userdata('name') ?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
            <li class="explore__user">

                <div class="explore__user-column">
                    <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="explore__avatar" />
                    <div class="explore__info">
                        <span class="explore__username"><?= $this->session->userdata('username') ?></span>
                        <span class="explore__full-name"><?= $this->session->userdata('name') ?></span>
                    </div>
                </div>
                <div class="explore__user-column">
                    <button>Follow</button>
                </div>
            </li>
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
</body>

</html>