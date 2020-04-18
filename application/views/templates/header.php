<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="Vietgram, like Instagram but with Pho" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/styles.css' ?>" />
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() . 'assets/css/bootstrap.min.css' ?>" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>
        Vietgram
    </title>

</head>
<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= site_url('feed/index') ?>">
                <!-- Master branch comment -->
                <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <form method="post" action="<?= site_url('feed/search/') ?>">
                <input type="text" name="keyword" class="form-control" placeholder="Search">
            </form>
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= site_url('feed/index') ?>" class="navigation__link">
                        <i class="fa fa-home fa-lg" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= site_url('upload/index') ?>" class="navigation__link">
                        <i class="fa fa-camera fa-lg" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= site_url('explore/index') ?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= site_url('profile/index') ?>" class="navigation__link">
                        <i class="fa fa-user-circle fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= site_url('logout/index') ?>" class="navigation__link">
                        <i class="fa fa-sign-out fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>