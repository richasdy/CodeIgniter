<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Edit Profile | Vietgram</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?= base_url("./assets/css/styles.css")?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
	<div class="modal fade" id="editprofpic" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Upload</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<?php echo form_open_multipart('C_EditProfile/editProfpic');?>
					<div class="input-group mb-3">
						<div class="custom-file">
							<input type="file" class="custom-file-input" name="image"
								aria-describedby="inputGroupFileAddon01">
							<label class="custom-file-label" for="inputGroupFile01">Choose file</label>
						</div>
					</div>
					<input type="submit" class="btn btn-primary btn-block">
					</form>


				</div>

			</div>
		</div>
	</div>

	<nav class="navigation">
		<div class="navigation__column">
			<a href="<?= base_url("C_Feed")?>">
				<img src="<?= base_url()?>assets/images/logo.png" />
			</a>
		</div>
		<div class="navigation__column">
			<i class="fa fa-search"></i>
			<input type="text" placeholder="Search">
		</div>
		<div class="navigation__column">
			<ul class="navigations__links">
				<li class="navigation__list-item">
					<a href="<?= base_url("C_Navigation")?>" class="navigation__link">
						<i class="fa fa-compass fa-lg"></i>
					</a>
				</li>
				<li class="navigation__list-item">
					<a href="#" class="navigation__link">
						<i class="fa fa-heart-o fa-lg"></i>
					</a>
				</li>
				<li class="navigation__list-item">
					<a href="<?= base_url("C_Profile")?>" class="navigation__link">
						<i class="fa fa-user-o fa-lg"></i>
					</a>
				</li>
			</ul>
		</div>
	</nav>
	<main id="edit-profile">
		<div class="edit-profile__container">
			<header class="edit-profile__header">
				<div class="edit-profile__avatar-container">
					<img src="<?= $profile->profpic ?>" class="edit-profile__avatar" />
				</div>
				<h4 class="edit-profile__username" style="margin-right: 2em"><?= $profile->username?></h4>
				<a href="" data-toggle="modal" data-target="#editprofpic">Change Profile Picture</a>

			</header>
			<form action="<?= base_url('C_EditProfile/editProfile')?>" method="post" class="edit-profile__form">
				<div class="form__row">
					<label for="full-name" class="form__label">Name:</label>
					<input id="full-name" type="text" class="form__input" value="<?= $profile->name?>" name="name" />
				</div>
				<div class="form__row">
					<label for="user-name" class="form__label">Username:</label>
					<input id="user-name" type="text" class="form__input" value="<?= $profile->username?>"
						name="username" />
				</div>
				<div class="form__row">
					<label for="website" class="form__label">Website:</label>
					<input id="website" type="text" class="form__input" value="<?= $profile->website?>"
						name="website" />
				</div>
				<div class="form__row">
					<label for="bio" class="form__label">Bio:</label>
					<textarea name="bio" id="bio"><?= $profile->bio?></textarea>
				</div>
				<div class="form__row">
					<label for="email" class="form__label">Email:</label>
					<input id="email" type="email" class="form__input" value="<?= $profile->email?>" name="email" />
				</div>
				<div class="form__row">
					<label for="phone" class="form__label">Phone Number:</label>
					<input id="phone" type="tel" class="form__input" value="<?= $profile->phonenumber?>"
						name="phonenumber" />
				</div>
				<div class="form__row">
					<label for="gender" class="form__label">Gender:</label>
					<select id="gender" name="gender">
						<?php if ($profile->gender == 'male') :?>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="cant">Can't remember</option>
						<?php elseif ($profile->gender == 'female') :?>
						<option value="female">Female</option>
						<option value="male">Male</option>
						<option value="cant">Can't remember</option>
						<?php else :?>
						<option value="male">Male</option>
						<option value="female">Female</option>
						<option value="cant">Can't remember</option>
						<?php endif ?>

					</select>
				</div>
				<input type="submit" value="Submit">
			</form>
		</div>
	</main>
	<footer class="footer">
		<div class="footer__column">
			<nav class="footer__nav">
				<ul class="footer__list">
					<li class="footer__list-item"><a href="#" class="footer__link">About Us</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Support</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Blog</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Press</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Api</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Jobs</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Privacy</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Terms</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Directory</a></li>
					<li class="footer__list-item"><a href="#" class="footer__link">Language</a></li>
				</ul>
			</nav>
		</div>
		<div class="footer__column">
			<span class="footer__copyright">© 2017 Vietgram</span>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
		integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
		integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
	</script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
		integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
	</script>
</body>

</html>
