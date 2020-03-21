<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo isset($_GET['search']) ? $_GET['search'] . " " : "Feed " ?>| Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <?php
        session_start();
        if (!isset($_SESSION['username']))
            header('location:index.php');
    ?>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="feed.php">
                <!-- Master branch comment -->
                <img src="images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>
            <form action="feed.php" method="get">
                <input type="text" placeholder="Search" name="search">
            </form>
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
                    <a href="profile.php" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="logout.php" class="navigation__link">
                        <i class="fa fa-sign-out fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <main id="feed">
        <?php 
            if (isset($_GET['search'])) {
                include 'connection.php';
                $search = $_GET['search'];
                $query = mysqli_query($conn, "SELECT * FROM PHOTOS JOIN USERS USING(USERNAME) WHERE CAPTION LIKE '%$search%'");
                $result = mysqli_num_rows($query);
                if ($result > 0) {
                    while ($res = mysqli_fetch_array($query)) { ?>
                        <div class="photo">
                            <header class="photo__header">
                                <img src="images/ya.jpg" class="photo__avatar" />
                                <div class="photo__user-info">
                                    <span class="photo__author"><?php echo $res['username'] ?></span>
                                    <span class="photo__location">Bestechung</span>
                                </div>
                            </header>
                            <img src="<?php echo $res['url'] ?>" style="width: 100%" />
                            <div class="photo__info">
                                <div class="photo__actions">
                                    <span class="photo__action">
                                        <i class="fa fa-heart-o fa-lg"></i>
                                    </span>
                                    <span class="photo__action">
                                        <i class="fa fa-comment-o fa-lg"></i>
                                    </span>
                                </div>
                                <span class="photo__likes"><?php echo $res['likes'] ?> likes</span>
                                <!-- photo caption -->
                                <ul class="photo__comments"> 
                                    <li class="photo__comment">
                                        <span class="photo__comment-author"><?php echo $res['username'] ?></span> <?php echo $res['caption'] ?>
                                    </li>
                                </ul>
                                <ul class="photo__comments photo__add-comment-container">
                                    <li class="photo__comment">
                                        <span class="photo__comment-author">serranoarevalo</span> love this!
                                    </li>
                                </ul>
                                <span class="photo__time-ago">2 hours ago</span>
                                <div class="photo__add-comment-container">
                                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                                    <i class="fa fa-ellipsis-h"></i>
                                </div>
                            </div>
                        </div> <?php
                    }
                } else
                    echo "<h6 class='lead'>No result for ". $_GET['search'] . "</h6>";
            } else { ?>
                <div class="photo">
                    <header class="photo__header">
                        <img src="images/ya.jpg" class="photo__avatar" />
                        <div class="photo__user-info">
                            <span class="photo__author">fajarnoorilham</span>
                            <span class="photo__location">Telkom University</span>
                        </div>
                    </header>
                    <img src="images/zayn.jpg" />
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
                        <!-- photo caption -->
                        <ul class="photo__comments"> 
                            <li class="photo__comment">
                                <span class="photo__comment-author">Nissa Sabyan</span> Subhanalloh calon Imanku
                            </li>
                        </ul>
                        <ul class="photo__comments photo__add-comment-container">
                            <li class="photo__comment">
                                <span class="photo__comment-author">Pevita Pearce</span> love you
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
                        <img src="images/avatar.jpg" class="photo__avatar" />
                        <div class="photo__user-info">
                            <span class="photo__author">ilham</span>
                            <span class="photo__location">Pulau Kucing</span>
                        </div>
                    </header>
                    <img src="images/kucing.jpg" />
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
                                <span class="photo__comment-author">mamang racing</span> Lucu
                            </li>
                        </ul>
                        <span class="photo__time-ago">2 hours ago</span>
                        <div class="photo__add-comment-container">
                            <textarea name="comment" placeholder="Add a comment..."></textarea>
                            <i class="fa fa-ellipsis-h"></i>
                        </div>
                    </div>
                </div> <?php
            }
        ?>
    </main>
    <footer class="footer" id="footer">
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
    <style>
        .not_found {
            position: fixed;
            width: 100%;
            bottom: 0;
            left: 16%;
        }
    </style>
</body>
<script>
    <?php 
        if (isset($_GET['search']) && $result == 0) { ?>
            $('.footer').replaceWith('<div class=\'footer not_found\'>' + $('.footer').html() +'</div>'); <?php
        }
    ?>
</script>
</html>