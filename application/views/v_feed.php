<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main id="feed">
        <?php
          foreach ($photo as $foto): 
        ?>
        <div class="photo">
            <header class="photo__header">
                <img src="assets/images/<?php echo $foto->profile_photos;?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?php echo $foto->username;?></span>
                </div>
            </header>
            <center><img class="img-fluid" height="400px" width="400px" src="assets/images/<?php echo $foto->url;?>" /></center>
            <div class="photo__info">
                <div class="photo__actions">
                <?php echo $foto->caption; ?><br><br>
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes"><?php echo $foto->jml_like;?> likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author">test123</span> love this!
                    </li>
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <?php endforeach ?>
    </main>
</body>
</html>