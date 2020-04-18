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
    <title>Feed | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css') ?>">
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= site_url('User/load_feed') ?>">
                <img src="<?= base_url('assets/images/logo.png') ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <!-- Search Caption -->
            <form action="<?= site_url('User/load_feed') ?>" method="get">
                <i class="fa fa-search"></i>
                <?php
                if (array_key_exists("caption", $_GET)) {
                ?>
                    <input type="text" name="caption" placeholder="Search Caption" value="<?= $_GET["caption"] ?>">
                <?php
                } else {
                ?>
                    <input type="text" name="caption" placeholder="Search Caption">
                <?php
                }
                ?>
            </form>
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
    <main id="feed">
        <!-- Search caption -->
        <?php
        if (array_key_exists("caption", $_GET)) {
            $this->db->select('*');
            $this->db->from('photo');
            $this->db->like('caption', $_GET['caption']);
            $query_image = $this->db->get()->result_array();
        } else {
            $query_image = $this->db->get('photo')->result_array();
        }

        // Show image
        foreach ($query_image as $row) { 
        ?>
            <div class="photo">
                <header class="photo__header">
                    <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="photo__avatar" />
                    <div class="photo__user-info">
                        <span class="photo__author"><?= $this->session->userdata('username'); ?></span>
                        <span class="photo__location">Pochinki</span>
                    </div>
                </header>
                <img src="<?= base_url('assets/images/').$row['url'] ?>" />
                <div class="photo__info">
                    <div class="photo__actions">
                        <span class="photo__action">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </span>
                        <span class="photo__action">
                            <i class="fa fa-comment-o fa-lg"></i>
                        </span>
                    </div>
                    <span class="photo__likes"><?= $row["like"] ?></span>
                    <ul class="photo__comments">
                        <li class="photo__comment">
                            <span class="photo__comment-author">naufalalvinc</span> <?= $row["caption"] ?>
                        </li>
                    </ul>
                    <span class="photo__time-ago">2 hours ago</span>
                    <div class="photo__add-comment-container">
                        <textarea name="comment" placeholder="Add a comment..."></textarea>
                        <i class="fa fa-ellipsis-h"></i>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>

        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?= $this->session->userdata('username'); ?></span>
                    <span class="photo__location">Bandung</span>
                </div>
            </header>
            <img src="<?= base_url('assets/images/feedPhoto.jpg') ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">45 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">naufalalvinc</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Apink</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Naufal</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Chandra</span> love this!
                    </li>
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url('assets/images/avatar.jpg') ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?= $this->session->userdata('username'); ?></span>
                    <span class="photo__location">Bandung</span>
                </div>
            </header>
            <img src="<?= base_url('assets/images/feedPhoto.jpg') ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">45 likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">naufalalvinc</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Apink</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Naufal</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">Chandra</span> love this!
                    </li>
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
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