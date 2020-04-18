<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add photo | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css') ?>">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
</head>
<style>
#image-preview{
    display:none;
    width : 250px;
    height : 300px;
}
</style>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.html">
                <img src="<?php echo base_url('assets/images/logo.png')?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="explore.html" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="profile.html" class="navigation__link">
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
                    <img src="<?php echo base_url('assets/images/avatar.jpg')?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $this->session->userdata('username'); ?></h4>
            </header>
            <form action="<?php echo base_url('user/addPhotoAction')?>" method="post" class="edit-profile__form" enctype="multipart/form-data">
                <input type="hidden" id="id" value="1">
                <div class="form__row">
                    <label for="caption" class="form__label">Caption:</label>
                    <textarea name="caption" id="caption"></textarea>
                </div>
                <div class="form__row">
                    <label for="photo" class="form__label">Photo:</label>
                    <input type="file" id="image-source" name="file" onchange="previewImage();"/>
                </div>
                <div class="form__row">
                    <label for="preview" id="preview" class="form__label"></label>
                    <img id="image-preview" alt="image preview"/>
                </div>
                <input type="submit" id="submit" name="submit" value="Submit">
                <?php echo $this->session->flashdata('success'); ?>
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
<script>
<script>
function previewImage() {
    document.getElementById("image-preview").style.display = "block";
    var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById("image-source").files[0]);
    oFReader.onload = function(oFREvent) {
        document.getElementById("image-preview").src = oFREvent.target.result;
    };
    $("#preview").text('Preview:');
};
</html>