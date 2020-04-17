
    <main id="edit-profile">
        <div class="edit-profile__container">
            <header class="edit-profile__header">
                <div class="edit-profile__avatar-container">
                    <?php foreach ($profile as $data) { ?>
                        <img src="<?= base_url() . 'assets/images/avatar.jpg' ?>" class="edit-profile__avatar" />
                </div>
                <h4><?= $data->username ?></h4>
            </header>
            <form method="post" action="<?= base_url('profile/proses_edit/') ?>" class="edit-profile__form">
                <div class="form__row">
                    <label for="full-name" class="form__label">Name:</label>
                    <input id="name" name="name" type="text" value="<?= $data->name ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="user-name" class="form__label">Username:</label>
                    <input id="username" name="username" type="text" value="<?= $data->username ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="website" class="form__label">Website:</label>
                    <input id="website" name="website" type="url" value="<?= $data->website ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Bio:</label>
                    <textarea id="bio" name="bio"><?= $data->bio ?></textarea>
                </div>
                <div class="form__row">
                    <label for="email" class="form__label">Email:</label>
                    <input id="email" name="email" type="email" value="<?= $data->email ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="phone" class="form__label">Phone Number:</label>
                    <input id="phonenumber" name="phonenumber" type="tel" value="<?= $data->phone_number ?>" class="form__input" />
                </div>
                <div class="form__row">
                    <label for="gender" class="form__label">Gender:</label>
                    <select id="gender" name="gender">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                </div>
                <input type="submit" value="Submit">
            </form>
            
        </div>
    </main>
    <?php } ?>
</body>
