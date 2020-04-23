<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/styles.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script type="text/javascript">
        function search() {
            var input = document.getElementById("search");
            var filter = input.value.toLowerCase();
            var target = document.getElementsByClassName('photo');
            var key = document.getElementsByClassName('caption');

            for (i = 0; i < target.length; i++) {
                if (key[i].innerText.toLowerCase().includes(filter)) {
                    target[i].style.display = "block";
                } else {
                    target[i].style.display = "none";
                }
            }
        }
    </script>

</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?= base_url('feed') ?>">
                <!-- Master branch comment -->
                <img src="<?= base_url() ?>assets/images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input id="search" class="form-control" type="text" placeholder="Search" onkeyup="search()">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?= base_url('upload_photo') ?>" class="navigation__link">
                        <i class="fa fa-camera-retro" style="font-size:23px" aria-hidden="true"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('explore') ?>" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('home/logout') ?>" class="navigation__link">
                        <i class="fa fa-power-off" style="font-size:25px"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?= base_url('profile') ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>