<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url() . 'halaman/feed' ?>">
                <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'halaman/feed' ?>">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'halaman/profile' ?>" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="<?php echo base_url() . 'assets/images/avatarr.jpg' ?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <?php foreach ($profile as $usr) { ?>
                        <h3 class="profile__username"><?= $usr->username ?></h3>
                        <a href="<?= base_url() . 'halaman/edit/' . $usr->id ?>">Edit profile</a>
                        <a href="<?php echo base_url() . 'halaman/logout' ?>" class="navigation__link">
                            <i class="fa fa-cog fa-lg"></i>
                        </a>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number">4</span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1234</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">1</span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <?= $usr->name ?>
                    </span> <?= $usr->bio ?>
                    <a href="<?= $usr->website ?>"><?= $usr->website ?></a>
                </p>
            </div>
        </header>
        <section class="profile__photos">
            <div class="profile__photo">
                <img src="<?php echo base_url() . 'assets/images/feedPhoto1.jpg' ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        1020
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        3
                    </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="<?php echo base_url() . 'assets/images/feedPhoto2.jpg' ?>" />
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
                <img src="<?php echo base_url() . 'assets/images/feedPhoto3.jpg' ?>" />
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
                <img src="<?php echo base_url() . 'assets/images/feedPhoto4.jpg' ?>" />
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