<main id="edit-profile">
    <div class="edit-profile__container">
        <header class="edit-profile__header">
            <div class="edit-profile__avatar-container">
                <img src="<?= base_url('assets/uploads/') . $profile_d['profile_photos']; ?>" class="edit-profile__avatar" />
            </div>
            <h4 class="edit-profile__username"><?= $profile_d['username']; ?></h4>
        </header>
        <form action="<?= base_url('C_profile/update') ?>" class="edit-profile__form" method="post">
            <div class="form__row">
                <label for="full-name" class="form__label">Name:</label>
                <input id="full-name" type="text" class="form__input" name="name" value="<?= $profile_d['name']; ?>" />
                <?= form_error('name', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form__row">
                <label for="user-name" class="form__label">Username:</label>
                <input id="user-name" type="text" class="form__input" name="username" value="<?= $profile_d['username']; ?>" />
                <?= form_error('username', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form__row">
                <label for="website" class="form__label">Website:</label>
                <input id="website" type="url" class="form__input" name="website" value="<?= $profile_d['website']; ?>" />
            </div>
            <div class="form__row">
                <label for="bio" class="form__label">Bio:</label>
                <textarea id="bio" name="bio"><?= $profile_d['bio']; ?></textarea>
            </div>
            <div class="form__row">
                <label for="email" class="form__label">Email:</label>
                <input id="email" type="email" class="form__input" name="email" value="<?= $profile_d['email']; ?>" />
                <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form__row">
                <label for="phone" class="form__label">Phone Number:</label>
                <input id="phone" type="tel" class="form__input" name="phone" value="<?= $profile_d['phone_number']; ?>" />
                <?= form_error('Phone', '<small class="text-danger">', '</small>'); ?>
            </div>
            <div class="form__row">
                <label for="gender" class="form__label">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="cant">Can't remember</option>
                </select>
            </div>
            <input type="submit" value="Submit" name='submit'>
        </form>
    </div>
</main>