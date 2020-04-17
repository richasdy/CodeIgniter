   <main id="feed">
         <?php if(isset($error_message)) { ?>
			<div class="alert alert-danger" role="alert">
				<center><?= $error_message ?></center>
			</div>
	    <?php } ?>
        <?php if(isset($feed)) { ?>
        <?php foreach($feed as $f): ?>
        <div class="photo">
            <header class="photo__header">
                <img src="<?= base_url() . 'assets/uploads/' . $f->url ?>" class="photo__avatar" />
                <div class="photo__user-info">
                    <span class="photo__author"><?= $f->username?></span>
                    <span class="photo__location">Bestechung</span>
                </div>
            </header>
            <img src="<?= base_url() . 'assets/uploads/' . $f->url ?>" />
            <div class="photo__info">
                <div class="photo__actions">
                    <span class="photo__action">
                        <i class="fa fa-heart-o fa-lg"></i>
                    </span>
                    <span class="photo__action">
                        <i class="fa fa-comment-o fa-lg"></i>
                    </span>
                </div>
                <span class="photo__likes"><?= $f->jml_like?> likes</span>
                <ul class="photo__comments">
                    <li class="photo__comment">
                        <span class="photo__comment-author"><?= $f->username?></span> <?= $f->caption?>
                    </li>
                <span class="photo__time-ago">2 hours ago</span>
                <div class="photo__add-comment-container">
                    <textarea name="comment" placeholder="Add a comment..."></textarea>
                    <i class="fa fa-ellipsis-h"></i>
                </div>
            </div>
        </div>
        <?php endforeach ?>
        <?php } ?>
    </main>
</body>