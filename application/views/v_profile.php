<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main id="profile">
        <?php
           // foreach ($profile as $profil):
        ?>
        <header class="profile__header">
            <div class="profile__column">
                <img src="assets/images/<?php echo $profile->profile_photos;?>" />
            </div>
            <div class="profile__column">
                <div class="profile__title">
                    <h3 class="profile__username"> <?php echo $profile->username;?> </h3>
                    <a href="<?= site_url('C_editProfile')?>">Edit profile</a>
                    <i id="setting" class="fa fa-cog fa-lg"></i>
                </div>
                <ul class="profile__stats">
                    <li class="profile__stat">
                        <span class="stat__number"><?php echo $jml_foto; ?></span> posts
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">900</span> followers
                    </li>
                    <li class="profile__stat">
                        <span class="stat__number">36</span> following
                    </li>
                </ul>
                <p class="profile__bio">
                    <span class="profile__full-name">
                        <?= $profile->name?><br>
                    </span> 
                    <?php echo $profile->bio;?> <br>
                    <a href="<?php echo $profile->website;?>"><?php echo $profile->website;?></a>
                    <?php 
                        echo $profile->phone_number."<br>";
                        echo $profile->email."<br>";
                        echo $profile->gender;
                    ?>
                </p>
            </div>
        </header>
        <?php //endforeach ?>
        <section class="profile__photos">
        <?php
           foreach ($photo as $foto): 
        ?>
            <div class="profile__photo">
                <img  width="500px" heigth="500px" src="assets/images/<?php echo $foto->url;?>" />
                <div class="profile__photo-overlay">
                    <span class="overlay__item">
                        <i class="fa fa-heart"></i>
                        <?php echo $foto->jml_like; ?>
                    </span>
                    <span class="overlay__item">
                        <i class="fa fa-comment"></i>
                        2
                    </span>
                </div>
            </div>
          <?php endforeach ?>
        </section>
    </main>
</body>