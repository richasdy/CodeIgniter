<main id="edit-profile">
        <div class="edit-profile__container">
            <form method="post" action="<?= base_url('upload/upload/') ?>" class="edit-profile__form" enctype="multipart/form-data">
                <?php if(isset($error_message)) { ?>
			                  <center>
                        <div class="alert alert-danger" role="alert">
                        <?= $error_message ?>
			                  </div>
                    </center>
		            <?php } ?>
                <div class="form__row">
                  <label for="bio" class="form__label">Upload :</label>
                  <div class="custom-file">
					          <input type="file" class="custom-file-input" id="uploadImage" name="uploadImage" accept='image/*' required>
					          <label class="custom-file-label text-left" for="uploadImage">Choose file</label>
				          </div>
                </div>
                <div class="form__row">
                    <label for="bio" class="form__label">Caption :</label>
                    <textarea id="bio" name="caption"></textarea>
                </div>
                <center>
                    <button type="submit" class="btn btn-primary">Upload</button>
                </center>
            </form>
        </div>
    </main>
    <script src="<?php echo base_url('assets/js/jquery-3.1.0.min.js'); ?>"></script>
		<script>
			$('.custom-file-input').on('change', function() { 
				let fileName = $(this).val().split('\\').pop(); 
				$(this).next('.custom-file-label').addClass("selected").html(fileName); 
			});
		</script>
</body>