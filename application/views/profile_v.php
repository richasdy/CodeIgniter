<!-- upload succes alert -->
    <?php if ($this->session->flashdata('upload_success')) { ?>
    <div class="alert alert-success" role="alert" style="text-align: center;">
        <?= $this->session->flashdata('upload_success') ?>
    </div>
    <?php } ?>
<!-- ------------------- -->
    <main id="profile">
        <header class="profile__header">
            <div class="profile__column">
                <img src="<?=base_url()?>/assets/images/<?=$profile['ava']?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"><?=$profile['username']?></h3>
                    <a href="<?= base_url('profile_c/edit') ?>">Edit profile</a>
                    <i class="fa fa-cog fa-lg"></i>

                    <div class="dropdown-content">
                        <a href="<?=base_url('login_c/logout')?>">Logout</a>
                        <a href="<?=base_url('upload_photo_c')?>">Upload Photo</a>
                    </div>

                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?= count($photo) ?></span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number"><?=$profile['follower']?></span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number"><?=$profile['following']?></span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name"><?=$profile['name']?></span> <br><br>
                    <?=$profile['bio']?> <br><br>
                    <a href="<?=$profile['website']?>"><?=$profile['website']?></a>
                </p>
                
            </div>
            
        </header>
        <section class="profile__photos">
            <?php foreach ($photo as $foto => $p) { ?>

                <div class="profile__photo">
                    <img src="<?=base_url()?>/assets/images/<?= $p['photo_name'] ?>" />
                    <div class="profile__photo-overlay">
                        <span class="overlay__item">
                            <i class="fa fa-heart"></i>
                            <?= $p['likes'] ?>
                        </span>
                        <span class="overlay__item">
                            <i class="fa fa-comment"></i>
                            <?= $p['comment'] ?>
                        </span>
                    </div>
                </div>
                
            <?php } ?>
        </section>
    </main>
    
    <script type="text/javascript">
        $(".fa.fa-cog").on("click", function(){
            $('.dropdown-content').slideToggle();
        });
    </script>

    <style type="text/css">
        .dropdown-content {
            display: none;
        }

        .dropdown-content a {
            display: block;
            text-align: center;
            text-decoration: none;
            position: relative;
        }

        .dropdown-content a:hover {
            background-color: #BFBFBF;
        }
    </style>
