<!DOCTYPE html>
<html lang="en">
<?php
     $dataPhoto = $this->db->query("select * from photo where username='". $_SESSION['username']. "'");
     $jumInfo = $dataPhoto->num_rows();
     $data = $this->db->get('profile')->row_array();
     foreach($dataPhoto->result() as $row[]){
         } 
?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Photo | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/styles.css">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU="crossorigin="anonymous"></script>
</head>

<body>
    <nav class="navigation">
        <div class="navigation__column">
        <a href="<?php base_url()?>feed">
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
                    <a href="<?php base_url()?>Uploadphot" class="navigation__link">
                        <i class="fa fa-cloud-upload"></i>
                    </a>
                </li>
                <li class="navigation__list-item">
                    <a href="<?php base_url()?>profile" class="navigation__link">
                        <i class="fa fa-user-o fa-lg"></i>
                    </a>
                </li>
            </ul>
        </div>
    </nav>


    <!-- tambah Data -->
    <div class="container mt-3" align="center">
        <div class="col-lg-6" >
            <a href="<?php base_url()?>add" class="btn btn-primary">Upload Di Sini</a>
        </div>
    </div>
    <br><br><br><br>


    <main id="uploadphot">
        
            <ul class="explore__users">
            <?php
                for ($i=0; $i < $jumInfo; $i++) { 
                ?>
                <li class="explore__user">
                    <div class="explore__user-column">
                    <img class="img-fluid" height="50" width="50" src="assets/images/foto_user/<?php echo $_SESSION['username']."/".$row[$i]->gambar; ?>" /></<img>
                        <div class="explore__info">
                            <span class="explore__full-name"><?=  $row[$i]->caption; ?></span>
                        </div>
                    </div>
                    <div class="explore__user-column">
                        <a class="btn btn-danger" href="#">Delete</a>
                    </div>
                </li>
                <?php } ?>
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
            <span class="footer__copyright">© 2020 Vietgram </span>
        </div>
    </footer>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>