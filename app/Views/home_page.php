<?= $this->extend('layout') ?>
<?= $this->section('main') ?>


<div class="container home-section d-flex flex-column">
	<div class="content-wrraper bg-secondary d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12">
		<h1 class="title text-light py-5 text-center">Welcome to Y.J.K Phonebook</h1>
		<p class="sub-title w-60 text-light pb-5 h4 text-center">In this platform you can easily create you'r own phone-book and save your contacts like you'r friends and family phone numbers emails and birthday dates.</p>
	</div>


	<div class="bg-secondary text-center d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 mt-5 py-5">
		<p class="register-title text-light pb-3 h4">For regitration click below</p>
		<div class="h4"><a href="/register" class="register-btn btn btn-lg btn-danger">regitration now</a></div>

	</div>
</div>

<style>
	html,
	body {
		height: 100%;
	}

	.home-section {
		margin-top: 115px;
		margin-bottom: 150px;
	}

	.sub-title {
		line-height: 1.4;
	}

	@media (max-width: 1200px) {
		.home-section {
			margin-top: 55px;
			margin-bottom: 95px;
		}
	}

	@media (max-width: 991px) {

		html,
		body {
			height: 80%;
		}

		.home-section {
			margin-top: 50px;
			margin-bottom: 100px;
		}
	}

	@media (max-width: 768px) {

		html,
		body {
			height: 100%;
		}

		.home-section {
			margin-top: 35px;
			margin-bottom: 60px;
		}

		.title {
			font-size: 25px;
		}

		.sub-title,
		.register-title,
		.register-btn {
			font-size: 16px;
		}

	}
</style>

<?= $this->endSection() ?>