<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Photo | Vietgram</title>
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

    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="<?= base_url()?>assets/images/<?=$profile['dp']?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?= $profile['username'] ?></h4>
            </header>
            <?php echo form_open_multipart('C_upload/do_upload') ?>
            <form action="" method="post" class="upload-photo__form">

                <!-- upload failed alert -->
                <?php if ($this->session->flashdata('flash')) { ?>
                    <div class="alert alert-danger" role="alert">
                        <?= $this->session->flashdata('flash') ?>
                    </div>
                <?php } ?>
                <!-- ------------------- -->

                <!-- <div class="form__row">
                    <img id="img-upload" class="center" />
                </div> -->
                <div class="form__row">
                    <label for="file" class="form__label">Select Photo:</label>
                    <label class="custom-file">
                        <input type="file" class="form__input custom-file-input" id="imgInp" name="userfile">
                        <span class="custom-file-control" id="btn-file" name="file_name"></span>
                    </label>
                </input>
                </div>
                <div class="form__row">
                    <label for="caption" class="form__label">Caption:</label>
                    <input id="caption" type="text" class="form__input" name="caption" /> 
                </div>
                <div class="form__row">
                    <label for="location" class="form__label">Location:</label>
                    <input id="location" type="text" class="form__input" name="location" />
                </div>
                <input type="submit" value="Submit">
            </form>
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