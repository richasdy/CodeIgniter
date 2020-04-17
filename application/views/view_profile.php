<body>
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img width="200" heigth="200" src="<?= base_url() . 'assets/images/default-avatar.png' ?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <?php 
                    foreach ($profile['result'] as $data) { ?>
                        <h3 class="profile__username"><?= $data->username ?></h3>
                        <a href="<?= base_url() . 'profile/edit/'?>">Edit profile</a>
                        <i class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?= $photo['num_rows'] ?></span> posts
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
                        <?= $data->name."<br>" ?>
                    </span> 
                    <?= $data->bio."<br>" ?>
                    <a href="<?= $data->website ?>"><?= $data->website ?></a>
                    <?= $data->phone_number."<br>" ?>
                    <?= $data->email."<br>" ?>
                    <?= $data->gender."<br>" ?>
                </p>
                    <?php } ?>
            </div>
        </header>
        <section class="profile__photos">
            <?php foreach($photo['result'] as $p){ ?>
            <div class="profile__photo">
                <img src="<?= base_url() . 'assets/uploads/' . $p->url ?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        <?= $p->jml_like ?>
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        344
                    </span>
                </div>
            </div>
            <?php } ?>
        </section>
    </main>
</body>