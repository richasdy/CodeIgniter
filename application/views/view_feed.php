<body>
    
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php echo base_url() . 'halaman/feed' ?>">
                <!-- Master branch comment -->
                <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
            </a>
        </div>
        <div class="navigation__column">
            <?= form_open('halaman/search') ?>
            <i class="fa fa-search"></i>
            <input type="text" placeholder="Search" id="search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'halaman/feed' ?>">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'halaman/logout' ?>" class="navigation__link">
                            <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php echo base_url() . 'halaman/profile' ?>" class="navigation__link">
                        <i class="fa fa-user-circle-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url() . 'assets/images/avatarr.jpg' ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">sindifatikas</span>
                    <span class="photo__location">Korea</span>
                </div>
            </header>
            <img src="<?= base_url() . 'assets/images/feedPhoto1.jpg' ?>" />
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
                        <span class="photo__comment-author">scoups</span> my love
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">yoona_lim</span> cute
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">rizkaaeri</span> hi scoups
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">mingyuu</span> bro!
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
                <img src="<?= base_url() . 'assets/images/avatarr.jpg' ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author">inthetiger</span>
                    <span class="photo__location">Bestechung</span>
                </div>
            </header>
            <img src="<?= base_url() . 'assets/images/feedPhoto2.jpg' ?>" />
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
                        <span class="photo__comment-author">ksoodandanie</span> love u
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">real_pcy</span> dasar bucin
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">baekhyunee</span> idih cimol
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">oohsehun</span> kayak kenal
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