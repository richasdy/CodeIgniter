<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Feed | Vietgram</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
		integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<link rel="stylesheet" href="<?= base_url("assets/css/styles.css")?>">

</head>

<body>

	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
					<?php echo form_open_multipart('C_Feed/upload');?>
					<div class="form-group">
						<label class="mb-3" for="exampleInputEmail1">Caption</label>
						<input type="text" class="form-control" id="exampleInputEmail1" name="caption"
							aria-describedby="emailHelp">

					</div>
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
			<form name="form" action="<?= base_url("C_Feed/searchCaption")?>" method="get">
				<input  type="text" placeholder="Search" name="searchkey">
			</form>
		</div>

		<div class="navigation__column">
			<ul class="navigations__links">
				<li class="navigation__list-item">
					<a href="#" class="navigation__link" data-toggle="modal" data-target="#exampleModal">
						<i class="fa fa-plus fa-lg"></i>
					</a>
				</li>
				<li class="navigation__list-item">
					<a href="<?= base_url("C_Navigation")?>" class="navigation__link">
						<i class="fa fa-compass fa-lg"></i>
					</a>
				</li>
				<li class="navigation__list-item">


					<a href="<?= base_url("C_Navigation")?>" class="navigation__link">
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



	<main id="feed">
		<?php if ($this->session->flashdata('message')):?>
		<div class="alert alert-danger m-0 " role="alert">
			<?= $this->session->flashdata('message')?>
		</div>
		<?php endif?>
		<?php foreach($photos as $row) :?>
		<div class="photo">
			<header class="photo__header">
				<img src="<?= $row->profpic?>" class="photo__avatar" />
				<div class="photo__user-info">
					<span class="photo__author"><?= $row->username?></span>
					<span class="photo__location">Bestechung</span>
				</div>
			</header>
			<img src="<?= $row->url ?>" />
			<div class="photo__info">
				<div class="photo__actions">
					<span class="photo__action">
						<i class="fa fa-heart-o fa-lg"></i>
					</span>
					<span class="photo__action">
						<i class="fa fa-comment-o fa-lg"></i>
					</span>
				</div>

				<span class="photo__likes"><?= $row->likes?> likes</span>
				<strong style="font-weight:700"><?= $row->username?></strong>
				<p class="mt-3 mb-3"><?= $row->caption?></p>
				<ul class="photo__comments">
					<li class="photo__comment">
						<span class="photo__comment-author">serranoarevalo</span> love this!
					</li>
					<li class="photo__comment">
						<span class="photo__comment-author">serranoarevalo</span> love this!
					</li>
					<li class="photo__comment">
						<span class="photo__comment-author">serranoarevalo</span> love this!
					</li>
					<li class="photo__comment">
						<span class="photo__comment-author">serranoarevalo</span> love this!
					</li>
				</ul>
				<span class="photo__time-ago">2 hours ago</span>
				<div class="photo__add-comment-container">
					<textarea name="comment" placeholder="Add a comment..."></textarea>
					<i class="fa fa-ellipsis-h"></i>
				</div>
			</div>
		</div>
		<?php endforeach;?>


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
