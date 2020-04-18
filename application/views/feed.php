<html>
<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url() . 'viet/feed' ?>">
                <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <?= form_open('viet/search') ?>
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'viet/feed' ?>">
                        <i class="fa fa-home fa-lg"></i>
                    </a>
                </li>
                <!-- <li class="navigation__list-item">
                    <a href="explore.html" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li> -->
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <a href="<?php echo base_url() . 'viet/logout' ?>" class="navigation__link">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'viet/profile' ?>" class="navigation__link">
                        <i class="fa fa-user-circle-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url() . 'assets/images/riz.jpg' ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">rzkoctav</span>
                    <span class="photo__location">서울</span>
                </div>
            </header>
            <img src="<?= base_url() . 'assets/images/exploration.jpg' ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">1M likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">oohsehun</span> love
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">ersarahr</span> cantik 
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">ersarahr</span> bangett
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">ersarahr</span> subhanallah
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
                <img src="<?= base_url() . 'assets/images/riz.jpg' ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">rzkoctav</span>
                    <span class="photo__location">Carat Cafe</span>
                </div>
            </header>
            <img src="<?= base_url() . 'assets/images/migu.jpg' ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes">1M likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">min9yu_k</span> thank you!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">saythename_17</span> gyu
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">zoctv</span> cute
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">sindyo</span> rizka's
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