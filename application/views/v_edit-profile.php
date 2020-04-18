<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit Profile | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <img src="assets/images/<?php echo $profile->profile_photos;?>" class="edit-profile__avatar" />
                </div>
                <h4 class="edit-profile__username"><?php echo $profile->username;?></h4>
            </header>
            <form action="<?= site_url('C_editProfile/updateProfile')?>" method="POST" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input name="nama" id="full-name" type="text" class="form__input" value="<?php echo $profile->name;?>"/>
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input name="user-name" id="user-name" type="text" class="form__input" value="<?php echo $profile->username;?>" disabled/>
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input name="website" id="website" type="url" class="form__input" value="<?php echo $profile->website;?>"/>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea name="bio" id="bio"><?php echo $profile->bio;?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input name="email" id="email" type="email" class="form__input" value="<?php echo $profile->email;?>"/>
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input name="phone" id="phone" type="tel" class="form__input" value="<?php echo $profile->phone_number;?>"/>
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select name="gender" id="gender">
                        <?php
                            if($profile->gender == "Female") {
                        ?>
                            <option value="Female" selected>Female</option>
                            <option value="Male">Male</option>
                        <?php } else { ?>
                            <option value="Female">Female</option>
                            <option value="Male" selected>Male</option>
                        <?php } ?>
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>

</html>