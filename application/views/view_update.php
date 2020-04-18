<main id="edit-profile">
    <div class="edit-profile__container">
        <header class="edit-profile__header">
            <div class="edit-profile__avatar-container">
                <?php foreach ($profile as $usr) { ?>
                    <img src="<?= base_url() . 'assets/images/avatar.jpg' ?>" class="edit-profile__avatar" />
            </div>
            <h4 class="edit-profile__username"><?= $usr->username ?></h4>
        </header>
        <form method="post" action="<?= base_url() . 'page/proses_edit' ?>" class="edit-profile__form">
            <div class="form__row">
                <label for="full-name" class="form__label">Name:</label>
                <input id="name" name="name" type="text" value="<?= $usr->name ?>" class="form__input" />
            </div>
            <div class="form__row">
                <label for="user-name" class="form__label">Username:</label>
                <input id="username" name="username" type="text" value="<?= $usr->username ?>" class="form__input" />
            </div>
            <div class="form__row">
                <label for="website" class="form__label">Website:</label>
                <input id="website" name="website" type="url" value="<?= $usr->website ?>" class="form__input" />
            </div>
            <div class="form__row">
                <label for="bio" class="form__label">Bio:</label>
                <textarea id="bio" name="bio" placeholder="<?= $usr->bio ?>"></textarea>
            </div>
            <div class="form__row">
                <label for="email" class="form__label">Email:</label>
                <input id="email" name="email" type="email" value="<?= $usr->email ?>" class="form__input" />
            </div>
            <div class="form__row">
                <label for="phone" class="form__label">Phone Number:</label>
                <input id="phonenumber" name="phonenumber" type="tel" value="<?= $usr->phonenumber ?>" class="form__input" />
            </div>
            <div class="form__row">
                <label for="gender" class="form__label">Gender:</label>
                <select id="gender" name="gender">
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    <option value="cant">Can't remember</option>
                </select>
            </div>
            <input type="hidden" name="id" value="<?= $usr->username ?>" />
            <input type="submit" value="Submit">
        </form>
    </div>
</main>
