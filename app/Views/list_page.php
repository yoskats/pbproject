<?= $this->extend('layout') ?>
<?= $this->section('main') ?>
<div class="container list-section d-flex flex-column">
	<div class="d-flex flex-column mx-auto col-sm-12 col-md-12 col-lg-10 col-xl-10 col-12 py-5">
		<div class="bg-secondary">
			<h1 class="title text-light py-5 text-center">Phonebook List</h1>
			<h2 class="sub-title text-light pb-5 mt-0 text-center">Phonebook - List Of Contacts</h2>
		</div>
	</div>

	<div class="col-12 py-5">
		<div class="button_container text-center">
			<a type="/new" href="/new" class="btn btn-danger">Add New Contact</a>
		</div>
	</div>


	<div class="table_1 table-wrraper d-flex justify-content-center mx-auto col-sm-12 col-md-10 col-lg-8 col-xl-8 col-12 py-5">
		<table class="table bg-secondary text-white">
			<thead>
				<tr class="bg-dark text-white">
					<th scope="col" class="table-title h3 text-center">#</th>
					<th scope="col" class="table-title h3 text-center">Fullname</th>
					<th scope="col" class="table-title h3 text-center">Phone</th>
					<th scope="col" class="table-title h3 text-center">Email</th>
					<th scope="col" class="table-title h3 text-center">Birthday</th>
					<th scope="col" class="table-title h3 text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php $contact_index = 1; ?>
				<?php foreach ($contacts as $contact) : ?>
					<tr>
						<th scope="row" class="table-val h4 text-center"> <?php echo $contact_index;
																			$contact_index++ ?> </th>
						<td class="table-val h4 text-center"><a href="show/<?php echo $contact['id'] ?>" class=" text-light"> <?php echo $contact['name'] ?> </a></td>
						<td class="table-val h4 text-center"> <?php echo $contact['phone'] ?> </td>
						<td class="table-val h4 text-center"> <?php echo $contact['email'] ?> </td>
						<td class="table-val h4 text-center"> <?php echo $contact['bday'] ?> </td>
						<td class="table-val h4 text-center">
							<a type="edit" href="/edit/<?php echo $contact['id'] ?>" class="table-val btn btn-danger">Edit</a>
							<form style='display:inline;' action="/delete/<?php echo $contact['id'] ?>" method="post"> <button type="submit" class="table-val btn btn-danger">Delete</button></form>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>


<style>
	.list-section {
		margin-top: 50px;
	}

	.table-wrraper {
		overflow: auto;
	}



	@media (max-width: 992px) {
		.table-title {
			font-size: 20px;
		}

		.table-val {
			font-size: 16px;
		}
	}

	@media (max-width: 767px) {
		.table-title {
			font-size: 16px;
		}

		.table-val {
			font-size: 14px;
		}

		.title {
			font-size: 25px;
		}

		.sub-title {
			font-size: 18px;
		}

	}
</style>

<?= $this->endSection() ?>