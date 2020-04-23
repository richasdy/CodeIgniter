<main id="feed">

    <?php foreach ($feed as $f) { ?>

        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url() ?>assets/images/<?= $f['ava'] ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?= $f['username'] ?></span>
                    <span class="photo__location"><?= $f['location'] ?></span>
                </div>
            </header>
            <img src="<?= base_url() ?>assets/images/<?= $f['photo_name'] ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="heart fa fa-heart-o feed"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o"></i>
                    </span>&nbsp;&nbsp;
                    <span style="text-align: right" class="photo__action">
                        <i class="bookmark fa fa-bookmark-o "></i>
                    </span>
                </div>
                <span class="photo__likes">Liked by <?= $f['likes'] ?></span>
                <b style="font-weight: bold" class="author"> <?= $f['username'] ?> </b><span class="caption"> <?= $f['caption'] ?></span> <br><br>
                <ul class="photo__comments"> <br>

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


<!-- toggle script -->
<script type="text/javascript">
    $(".heart.fa").click(function() {
        $(this).toggleClass("fa-heart fa-heart-o");
    });
    $(".bookmark.fa").click(function() {
        $(this).toggleClass("fa-bookmark-o fa-bookmark");
    });
</script>