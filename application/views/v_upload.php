<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?= base_url('assets/css/styles.css')?>">
</head>

<body>
<nav class="navigation">
        <div class="navigation__column">
            <a href="<?= base_url('c_feed')?>">
                <img src="<?= base_url('assets/images/logo.png')?>" />
            </a>
        </div>
        <form action="<?= base_url('c_feed/search'); ?>" method="get">
            <div class="navigation__column">
                <i class="fa fa-search"></i>
                <input type="text" name="search" placeholder="Search">
            </div>
        </form>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= base_url('c_upload'); ?>" class="navigation__link">
                        <!-- <i class="fa fa-compass fa-lg"></i> -->
                        <img src="<?= base_url('assets/images/upload.png')?>" width="22" height="22">
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('c_profile'); ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="edit-profile">
    	<div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="<?= base_url("assets/images/").$profile['photo_profile']; ?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?= $profile['username']?></h4>
            </header>

            <?php if ($this->session->flashdata('flash')) : ?>
                <p style="color:red;">
                        <?= $this->session->flashdata('flash'); ?>
                </p>
            <?php endif; ?>

            <form action="<?= base_url('c_upload'); ?>" method="post" class="edit-profile__form">
                <div class="form__row">
                    <label class="form__label">Select image :</label>
                    <input type="file" name="url" class="form__input" />
                </div>
                
                <div class="form__row">
                    <label class="form__label">Caption :</label>
                    <textarea name="caption"></textarea>
                </div>
                <div class="form__row">
                    <label class="form__label">Location :</label>
                    <input type="text" name="location" class="form__input" />
                </div>
                <input type="submit" name="upload" value="Upload">
            </form>
        </div>
    </main>

</body>


</html>