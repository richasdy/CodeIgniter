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


 <body>
     <nav class="navigation">
         <div class="navigation__column">
             <a href="<?php echo base_url() . 'page/feed' ?>">
                 <!-- Master branch comment -->
                 <img src="<?= base_url() . 'assets/images/logo.png' ?>" />
             </a>
         </div>
         <div class="navigation__column">
             <!-- <?= form_open('page/search') ?> -->
             <i class="fa fa-search"></i>
             <input type="text" placeholder="Search" id="search">
         </div>
         <div class="navigation__column">
             <ul class="navigations__links">
                 <li class="navigation__list-item">
                     <a href="<?php echo base_url() . 'page/feed' ?>">
                         <i class="fa fa-home fa-lg"></i>
                     </a>
                 </li>
                 <li class="navigation__list-item">
                     <a href="explore.html" class="navigation__link">
                         <i class="fa fa-compass fa-lg"></i>
                     </a>
                 </li>
                 <li class="navigation__list-item">
                     <a href="#" class="navigation__link">
                         <a href="<?php echo base_url() . 'page/logout' ?>" class="navigation__link">
                             <i class="fa fa-heart-o fa-lg"></i>
                         </a>
                 </li>
                 <li class="navigation__list-item">
                     <a href="<?php echo base_url() . 'page/profile' ?>" class="navigation__link">
                         <i class="fa fa-user-circle-o fa-lg"></i>
                     </a>
                 </li>
             </ul>
         </div>
     </nav>
     <main id="feed">
         <div class="photo">
             <header class="photo__header">
                 <img src="<?= base_url() . 'assets/images/andre.jpg' ?>" class="photo__avatar" />
                 <div class="photo__user-info">
                     <span class="photo__author">Andrearhmd</span>
                     <span class="photo__location">Madinah</span>
                 </div>
             </header>
             <img src="<?= base_url() . 'assets/images/dree.jpg' ?>" />
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
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
                     <li class="photo__comment">
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
                     <li class="photo__comment">
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
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
         </div>
         <div class="photo">
             <header class="photo__header">
                 <img src="<?= base_url() . 'assets/images/dre.jpg' ?>" class="photo__avatar" />
                 <div class="photo__user-info">
                     <span class="photo__author">inthetiger</span>
                     <span class="photo__location">Bestechung</span>
                 </div>
             </header>
             <img src="<?= base_url() . 'assets/images/drea.jpg' ?>" />
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
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
                     <li class="photo__comment">
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
                     <li class="photo__comment">
                         <span class="photo__comment-author">serranoarevalo</span> love this!
                     </li>
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
     </footer>
 </body>

 </html>