<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="container about-section  d-flex flex-column">
	<div class="headline-wrraper bg-secondary mb-5 d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12">
		<h1 class="about-title text-light py-5 text-center">About Us Page</h1>
	</div>

	<div class="content-wrraper mb-5 text-center d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12">
		<p class="about-sub-title pb-3 font-weight-bold h2">Hello, im Yosi Josef Kats</p>
		<p class="content mx-auto pb-5 h4">I'm a junior front-end developer.</p>
		<p class="content col-10 mx-auto text-left h4">In this platform that i had created you will be able to easily create you'r own phone book list and save your contacts. Imagine being able to manage you'r friends and family phone numbers emails and birthday dates in one place. Right after registration, all the site options will be open for you to use.</p>

	</div>
</div>



<style>
	.about-section {
		margin-top: 100px;
		margin-bottom: 216px;
	}

	.content-wrraper {
		text-align: center;
	}

	.content {
		line-height: 1.4;
	}



	@media (max-width: 1200px) {
		.about-section {
			margin-top: 50px;
			margin-bottom: 140px;
		}
	}

	@media (max-width: 991px) {
		.about-section {
			margin-top: 40px;
			margin-bottom: 125px;
		}
	}

	@media (max-width: 767px) {
		.about-section {
			margin-top: 20px;
			margin-bottom: 80px;
		}

		.about-title {
			font-size: 25px;
		}

		.about-sub-title {
			font-size: 20px;
		}

		.content {
			font-size: 16px;
		}
	}

	@media (max-width: 600px) {
		.about-section {
			margin-top: 20px;
			margin-bottom: 80px;
		}
	}

	@media (max-width: 575px) {
		.about-section {
			margin-top: 20px;
			margin-bottom: 103px;
		}
	}
</style>

<?= $this->endSection() ?>