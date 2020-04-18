<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" />
    <script src="<?php echo base_url() . 'assets/js/jquery-3.1.0.min.js' ?>"></script>
    <script src="<?php echo base_url() . 'assets/js/e-search.js' ?>"></script>
</head>

<nav class="navigation">
    <div class="navigation__column">
        <a href="<?php echo base_url() . 'page/feed' ?>">
            <!-- Master branch comment -->
            <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
        </a>
    </div>
    <div class="navigation__column">
        <?= form_open('page/search') ?>
        <i class="fa fa-search"></i>
        <input type="text" name="keyword" class="form-control  caption" placeholder="Search" data-toggle="modal" data-target="#modalForm">
    </div>
    <div class="navigation__column">
        <ul class="navigations__links">
            <li class="navigation__list-item">
                <a href="explore.html" class="navigation__link">
                    <i class="fa fa-camera-retro" aria-hidden="true"></i>
                </a>
            </li>
            <li class="navigation__list-item">
                <a href="<?= base_url() . 'page/explore/' ?>" class="navigation__link">
                    <i class="fa fa-compass fa-lg"></i>
                </a>
            </li>
            <li class="navigation__list-item">
                <a href="<?php echo base_url() . 'page/logout' ?>" class="navigation__link">
                    <i class="fa fa-heart-o fa-lg"></i>
                </a>
            </li>
            <li class="navigation__list-item">
                <a href="<?php echo base_url() . 'page/profile' ?>" class="navigation__link">
                    <i class="fa fa-user-o fa-lg"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>

<body>
    <main id="feed">
        <div class="photo">
            <div class="row containerItems">
                <div data-search="cek lucu! bagus deh! suka banget! hh kamu tuh yaa!">
                    <div class="photo">
                        <header class="photo__header">
                            <img src="<?= base_url() . 'assets/images/andre.jpg' ?>" class="photo__avatar" />
                            <div class="photo__user-info">
                                <span class="photo__author">Andrea Rahmadanisya</span>
                                <span class="photo__location">Madinah</span>
                            </div>
                        </header>
                        <img src="<?= base_url() . 'assets/images/feedPhoto.jpg' ?>" />
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
                                    <span class="photo__comment-author">Rizka Nur Octaviani</span> lucu!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">chrishemswort</span> good picture!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">alif</span> suka banget!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">chris evan</span> Ih kamu tuh yaa!
                                </li>
                            </ul>
                            <span class="photo__time-ago">2 hours ago</span>
                            <div class="photo__add-comment-container">
                                <textarea name="comment" placeholder="Add a comment..."></textarea>
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-search="cek2 Cool! edan! nice! great!">
                    <div class="photo">
                        <header class="photo__header">
                            <img src="<?= base_url() . 'assets/images/avatar.jpg' ?>" class="photo__avatar" />
                            <div class="photo__user-info">
                                <span class="photo__author">inthetiger</span>
                                <span class="photo__location">Bestechung</span>
                            </div>
                        </header>
                        <img src="<?= base_url() . 'assets/images/feedPhoto.jpg' ?>" />
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
                                    <span class="photo__comment-author">Adam Levine 5</span> Cool!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Adambah Dukun</span> Edan!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Marvin Gaye</span> nice!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Charlie Puth</span> great Photo!
                                </li>
                            </ul>
                            <span class="photo__time-ago">2 hours ago</span>
                            <div class="photo__add-comment-container">
                                <textarea name="comment" placeholder="Add a comment..."></textarea>
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-search="cek3 love this! love you! beautifull! ayeaye!">
                    <div class="photo">
                        <header class="photo__header">
                            <img src="<?= base_url() . 'assets/images/avatar.jpg' ?>" class="photo__avatar" />
                            <div class="photo__user-info">
                                <span class="photo__author">inthetiger</span>
                                <span class="photo__location">Bestechung</span>
                            </div>
                        </header>
                        <img src="<?= base_url() . 'assets/images/feedPhoto.jpg' ?>" />
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
                                    <span class="photo__comment-author">Cara Delevigne</span> love this!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Margot Robie</span> love you!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Kendall</span> beauti!
                                </li>
                                <li class="photo__comment">
                                    <span class="photo__comment-author">Lalisa Manoban</span> ayeaye!
                                </li>
                            </ul>
                            <span class="photo__time-ago">2 hours ago</span>
                            <div class="photo__add-comment-container">
                                <textarea name="comment" placeholder="Add a comment..."></textarea>
                                <i class="fa fa-ellipsis-h"></i>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        </script>
    </main>
</body>