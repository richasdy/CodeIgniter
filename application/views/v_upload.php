<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Upload Photo | Vietgram</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css')?>">
</head>

<body>
    <main id="edit-profile">
        <div class="edit-profile__container">
                <center><h4><b>Upload a photo</b></h4></center>
                <br><br><br>
                <?php if(isset($error_message)) { ?>
			    <div class="alert alert-danger" role="alert">
				<?= $error_message ?>
			    </div>
			    <?php } ?>
            <form action="<?= site_url('C_upload/uploadPhoto')?>" method="POST" class="edit-profile__form" enctype="multipart/form-data">
                <div class="form__row">
                    <div class="input-group-prepend">
                        <label for="bio" class="form__label">Photo:</label>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
                        <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
                    </div>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Caption:</label>
                    <textarea name="caption" id="bio" placeholer="Write your caption here..."></textarea>
                </div>
                <input type="submit" value="Submit">
            </form>
        </div>
    </main>
</body>

</html>