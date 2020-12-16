<?= $this->extend('layout') ?>
<?= $this->section('main') ?>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
	<div class="bg-secondary">
		<h1 class="text-light pt-5 pb-5 text-center">Phonebook List</h1>
		<h2 class="text-light pt-5 pb-5 text-center">Phonebook - List Of Contacts</h2>
	</div>
</div>

<div class="col-12 col-md-8 offset-md-2 mr-4 pt-5 pb-5">
	<div class="button_container text-center">
		<a type="/new" href="/new" class="btn btn-danger">Add New Contact</a>
	</div>
</div>

<?php var_dump(user());?>

<div class="table_1 col-12 col-md-8 offset-md-2 pt-5 pb-5">
	<div class="table_container pb-5">
		<table class="table contacts">
			<thead>
				<tr class="bg-dark text-white">
					<th class="id h3 text-center">#</th>
					<th class="name h3 text-center">Fullname</th>
					<th class="phone h3 text-center">Phone</th>
					<th class="email h3 text-center">Email</th>
					<th class="bday h3 text-center">Birthday</th>
					<th class="h3 text-center">Action</th>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($contacts as $contact) : ?>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center"> <?php echo $contact['id'] ?> </td>
						<td class="h4 text-center"><a href="show/<?php echo $contact['id'] ?>" class=" text-light"> <?php echo $contact['name'] ?> </a></td>
						<td class="h4 text-center"> <?php echo $contact['phone'] ?> </td>
						<td class="h4 text-center"> <?php echo $contact['email'] ?> </td>
						<td class="h4 text-center"> <?php echo $contact['bday'] ?> </td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/<?php echo $contact['id'] ?>" class="btn btn-danger">Edit</a>
							<form style='display:inline;' action="/delete/<?php echo $contact['id'] ?>" method="post"> <button type="submit" class="btn btn-danger">Delete</button></form>
						</td>
					</tr>
				<?php endforeach ?>
			</tbody>
		</table>
	</div>
</div>

<?= $this->endSection() ?>