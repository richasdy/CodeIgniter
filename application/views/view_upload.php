<main id="edit-profile">
    <div class="edit-profile__container">
        <header class="edit-profile__header">
            <div class="edit-profile__avatar-container">
                <img src="<?= base_url() ?>assets/images/<?= $profile['ava'] ?>" class="edit-profile__avatar" />
            </div>
            <h4 class="edit-profile__username"><?= $profile['username'] ?></h4>
        </header>
        <?php echo form_open_multipart('upload_photo/do_upload') ?>
        <form action="" method="post" class="upload-photo__form">

            <?php if ($this->session->flashdata('flash')) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= $this->session->flashdata('flash') ?>
                </div>
            <?php } ?>

            <div class="form__row">
                <img id="img-upload" class="center" />
            </div>
            <div class="form__row">
                <label for="file" class="form__label">Select Photo:</label>
                <label class="custom-file">
                    <input type="file" class="form__input custom-file-input" id="imgInp" name="userfile">
                    <span class="custom-file-control" id="btn-file" name="file_name"></span>
                </label>
                </input>
            </div>
            <div class="form__row">
                <label for="caption" class="form__label">Caption:</label>
                <input id="caption" type="text" class="form__input" name="caption" />
            </div>
            <div class="form__row">
                <label for="location" class="form__label">Location:</label>
                <input id="location" type="text" class="form__input" name="location" />
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
</main>

<script type="text/javascript">
    $(document).ready(function() {
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('#img-upload').attr('src', e.target.result);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgInp").change(function() {
            readURL(this);
        });
    });

    $('.custom-file-input').on('change', function() {
        var fileName = document.getElementById("imgInp").files[0].name;
        $(this).next('.custom-file-control').addClass("selected").html(fileName);
    });
</script>