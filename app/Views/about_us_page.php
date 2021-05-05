<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="container about-section">
	<div class="headline-wrraper d-flex justify-content-center mx-auto bg-secondary col-10 mb-5">
		<h1 class="text-light pt-5 pb-5 text-center">About Us Page</h1>
	</div>

	<div class="content-wrraper col-8 mb-5 mx-auto text-center">
		<p class="pb-3 font-weight-bold h2">Hello, im Yosi Josef Kats</p>
		<p class="mx-auto pb-5 h4">I'm a junior front-end developer.</p>
		<p class="content mx-auto text-left h4">In this platform that i had created you will be able to easily create you'r own phone book list and save your contacts. Imagine being able to manage you'r friends and family phone numbers emails and birthday dates in one place. Right after registration, all the site options will be open for you to use.</p>

	</div>
</div>



<style>
	.about-section {
		margin-top: 100px;
		margin-bottom: 200px;
	}

	.content-wrraper {
		text-align: center;
	}

	.content {
		line-height: 1.4;
	}
</style>

<?= $this->endSection() ?>