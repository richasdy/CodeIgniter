<main id="edit-profile">
    <div class="edit-profile__container">
        <header class="edit-profile__header">
            <div class="edit-profile__avatar-container">
                <img src="<?= base_url() ?>assets/images/<?= $profile['ava'] ?>" class="edit-profile__avatar" />
            </div>
            <h4 class="edit-profile__username"><?= $profile['username'] ?></h4>
        </header>
        <form action="<?= base_url('profile/edit') ?>" method="post" class="edit-profile__form">
            <div class="form__row">
                <label for="full-name" class="form__label">Name:</label>
                <input id="full-name" type="text" class="form__input" name="name" value="<?= $profile['name'] ?>" />
            </div>
            <div class="form__row">
                <label for="user-name" class="form__label">Username:</label>
                <input id="user-name" type="text" class="form__input" name="username" value="<?= $profile['username'] ?>" />
            </div>
            <div class="form__row">
                <label for="website" class="form__label">Website:</label>
                <input id="website" type="url" class="form__input" name="website" value="<?= $profile['website'] ?>" />
            </div>
            <div class="form__row">
                <label for="bio" class="form__label">Bio:</label>
                <textarea id="bio" name="bio"><?= $profile['bio'] ?></textarea>
            </div>
            <div class="form__row">
                <label for="email" class="form__label">Email:</label>
                <input id="email" type="email" class="form__input" name="email" value="<?= $profile['email'] ?>" />
            </div>
            <div class="form__row">
                <label for="phone" class="form__label">Phone Number:</label>
                <input id="phone" type="tel" class="form__input" name="phone" value="<?= $profile['phone'] ?>" />
            </div>
            <div class="form__row">
                <label for="gender" class="form__label">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="cant">Can't remember</option>
                </select>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>