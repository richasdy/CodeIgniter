<!DOCTYPE html>
<html lang="en">
    <?php 

    ?>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Explore | Vietgram</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php base_url()?>assets/css/styles.css">
    </head>
    <body>
        <nav class="navigation">
            <div class="navigation__column">
                <a href="<?php base_url()?>Controller_feed">
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
                        <a href="<?php base_url()?>Controller_feed/logout" class="navigation__link">
                            <i class="fa fa-sign-out"></i>
                        </a>
                    </li>
                    <li class="navigation__list-item">
                        <a href="<?php base_url()?>Controller_explore" class="navigation__link">
                            <i class="fa fa-compass fa-lg"></i>
                        </a>
                    </li>
                    <li class="navigation__list-item">
                        <a href="#" class="navigation__link">
                            <i class="fa fa-heart-o fa-lg"></i>
                        </a>
                    </li>
                    <li class="navigation__list-item">
                        <a href="<?php base_url()?>Controller_profile" class="navigation__link">
                            <i class="fa fa-user-o fa-lg"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <main id="explore">
            <ul class="explore__users">
                <li class="explore__user">
                    
                    <div class="explore__user-column">
                        <img src="<?php base_url()?>assets/images/anya.jpg" class="explore__avatar"/>
                        <div class="explore__info">
                            <span class="explore__username">AnyaGerald</span>
                            <span class="explore__full-name">Anya Geraldine</span>
                        </div>
                    </div>
                    <div class="explore__user-column">
                        <button>Follow</button>
                    </div>
                </li>
                <li class="explore__user">
                        
                        <div class="explore__user-column">
                            <img src="<?php base_url()?>assets/images/indah.jfif" class="explore__avatar"/>
                            <div class="explore__info">
                                <span class="explore__username">Indahpwtsr</span>
                                <span class="explore__full-name">Indah Permatasari</span>
                            </div>
                        </div>
                        <div class="explore__user-column">
                            <button>Follow</button>
                        </div>
                    </li>
                    <li class="explore__user">
                            
                            <div class="explore__user-column">
                                <img src="<?php base_url()?>assets/images/pevita.jpg" class="explore__avatar"/>
                                <div class="explore__info">
                                    <span class="explore__username">pevpearce</span>
                                    <span class="explore__full-name">Pevita Pearce</span>
                                </div>
                            </div>
                            <div class="explore__user-column">
                                <button>Follow</button>
                            </div>
                        </li>
            </ul>
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