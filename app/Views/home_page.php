<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="bg-secondary col-8 col-md-8 offset-md-2 mb-5 mt-5">
	<div class="">
		<h1 class="text-light pt-5 pb-5" style="text-align: center;">Welcome to Y.J.K Phonebook Project</h1>
		<p class="col-xl-8 mx-auto text-light pb-5 h4" style="text-align: center;">in this platform you can easily create you'r own phone-book and save your contacts like you'r friend's and family's phone numbers and emails </p>
		<p class="col-xl-8 mx-auto text-light h4" style="text-align: center;">for regitration click below</p>

		<div class=" col-md-6 offset-md-3 text-center h4 pb-5"><a href="/register" class="btn btn-lg btn-danger">register now</a></div>
	</div>
</div>



<?= $this->endSection() ?>