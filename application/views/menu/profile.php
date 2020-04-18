<?php
$name = $profile_d['name'];
$username = $profile_d['username'];
$bio = $profile_d['bio'];
$photo = $profile_d['profile_photos'];
$web = $profile_d['website'];
?>
<main id="profile">
    <header class="profile__header">
        <div class="profile__column">
            <img src="<?= base_url('assets/uploads/') . $photo ?>" style="width:50%; height:80%" />
            <!-- photo di resize karena profile__column tidak membatasi height dan width foto -->
        </div>
        <div class="profile__column">
            <div class="profile__title">
                <h3 class="profile__username"><?= $username ?></h3>
                <a href="<?= base_url('C_profile/gotoupdate') ?>">Edit profile</a>
                <i class="fa fa-cog fa-lg"></i>
            </div>
            <ul class="profile__stats">
                <li class="profile__stat">
                    <span class="stat__number"><?= $jumlah ?></span> posts
                </li>
                <li class="profile__stat">
                    <span class="stat__number">1234</span> followers
                </li>
                <li class="profile__stat">
                    <span class="stat__number">36</span> following
                </li>
            </ul>
            <p class="profile__bio">
                <span class="profile__full-name">
                    <?= $name ?>
                </span> <?php echo $bio; ?>
                <a href="<?= $web ?>"><?php echo $web ?></a>
            </p>
        </div>
    </header>

    <section class="profile__photos">
        <?php
        foreach ($uploadedphoto as $post) {
        ?>
            <div class="profile__photo">
                <img src="<?= base_url('assets/uploads/') . $post['url'] ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        <?= $post['jml_like'] ?>
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        0
                    </span>
                </div>
            </div>
        <?php
        };
        ?>
        <!-- <div class="profile__photo">
                <img src="images/feedPhoto.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                            <i class="fa fa-heart"></i>
                            486
                        </span>
                    <span class="overlay__item">
                            <i class="fa fa-comment"></i>
                            344
                        </span>
                </div>
            </div> -->
        <!-- <div class="profile__photo">
                <img src="images/feedPhoto.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                                <i class="fa fa-heart"></i>
                                486
                            </span>
                    <span class="overlay__item">
                                <i class="fa fa-comment"></i>
                                344
                            </span>
                </div>
            </div>
            <div class="profile__photo">
                <img src="images/feedPhoto.jpg" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                                    <i class="fa fa-heart"></i>
                                    486
                                </span>
                    <span class="overlay__item">
                                    <i class="fa fa-comment"></i>
                                    344
                                </span>
                </div>
            </div> -->
    </section>
</main>