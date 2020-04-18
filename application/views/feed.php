<!DOCTYPE html>
<html lang="en">
<?php 
    $data_photo = $this->db->query("select * from photo where username='". $_SESSION['username']. "'");
    $jmlData = $data_photo->num_rows();
    foreach($data_photo->result() as $row[]){} 
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Feed | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
            <a href="<?php base_url()?>feed">
                <!-- Master branch comment -->
                <img src="assets/images/logo.png" />
            </a>
        </div>
        <div class="navigation__column">
            <i class="fa fa-search"></i>            
            <input type="text" id="search" placeholder="Search">
        </div>
        <div class="navigation__column">
            <ul class="navigations__links">
                <li class="navigation__list-item">
                    <a href="<?php base_url()?>feed/logout" class="navigation__link">
                        <i class="fa fa-sign-out"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-compass fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="#" class="navigation__link">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php base_url()?>Profile" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <main id="feed">
        <?php
          for ($i=0; $i < $jmlData; $i++) { 
        ?>
        <div class="photo">
            <header class="photo__header">
                <img src="assets/images/avatar.jpg" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?php echo $_SESSION['username'];?></span>
                </div>
            </header>
            <center><img class="img-fluid" height="500px" width="500px" src="assets/images/foto_user/<?php echo $_SESSION['username']."/".$row[$i]->url; ?>" /></center>
            <div class="photo__info">
                <div class="photo__actions">
                <?php echo $row[$i]->caption; ?><br><br>
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes"><?php echo $row[$i]->like; ?> likes</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <?php } ?>

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
    <script>
                $(document).ready(function(){
                    $('#search').keyup(function(){

                        // Search text
                        var text = $(this).val();

                        // first hide the feed div
                        $('.photo').hide();

                        // Search and show
                        $('.photo').each(function(){

                            if($(this).text().toLowerCase().indexOf(""+text+"") != -1 ){
                                $(this).closest('.photo').show();
                            }
                        });
                    });


                });
            </script>
</body>


</html>