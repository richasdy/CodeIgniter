<?php
// $username = $data_feed['username'];
// $name = $data_feed['name'];
// $photo = $data_feed['profile_photos'];

?>

<main id="feed">
    <?php
    foreach ($data_feed as $f) {
    ?>
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url('assets/uploads/') . $f['profile_photos']; ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?= $f['username']; ?></span>
                    <span class="photo__location">location</span>
                </div>
            </header>
            <img height="200%" width="200%" src="<?= base_url('assets/uploads/') . $f['url'] ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes"><?= $f['jml_like']; ?></span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author"><?= $f['username'] . " " ?></span> <?= $f['caption'] ?>
                    </li>
                    <!-- <li class="photo__comment">
                        <span class="photo__comment-author">serranoarevalo</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">serranoarevalo</span> love this!
                    </li>
                    <li class="photo__comment">
                        <span class="photo__comment-author">serranoarevalo</span> love this!
                    </li> -->
                </ul>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
    <?php } ?>
</main>