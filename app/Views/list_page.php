<!DOCTYPE html>
<html>

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/vendors/bootstrap.min-4.1.3.css">


	<meta charset="utf-8">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<title>List</title>
</head>

<body class="bg-light">
	<div class="header col-12 col-md-8 offset-md-2 bg-dark">
		<nav class="navbar navbar-expand-lg navbar-light text-white">
			<a class="navbar-brand  text-white" href="/">Phone Book</a>
			<button class="navbar-toggler  text-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav mr-auto">
					<li class="nav-item active ml-4">
						<a class="nav-link  text-white" href="/">Phone book list<span class="sr-only">(current)</span></a>
					</li>
					<li class="nav-item active ml-4">
						<a class="nav-link  text-white" href="/new">Add new contact</a>
					</li>
					<li class="nav-item active ml-4">
						<a class="nav-link  text-white" href="/show/1">Show a item</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
 
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

	<div class="table_1 col-12 col-md-8 offset-md-2 pt-5 pb-5">
		<div class="table_container pb-5">
			<table class="table contacts" action="/new" metho="post">
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
					<tr class="bg-secondary text-white">
						<td class="h4 text-center">1</td>
						<td class="h4 text-center">John Doe</td>
						<td class="h4 text-center">0504325576</td>
						<td class="h4 text-center">john@example.com</td>
						<td class="h4 text-center">15.5.88</td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center">2</td>
						<td class="h4 text-center">Mary Moe</td>
						<td class="h4 text-center">0504786637</td>
						<td class="h4 text-center">mary@example.com</td>
						<td class="h4 text-center">15.5.88</td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center">3</td>
						<td class="h4 text-center">July Dooley</td>
						<td class="h4 text-center">0547829983</td>
						<td class="h4 text-center">july@example.com</td>
						<td class="h4 text-center">15.5.88</td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center">4</td>
						<td class="h4 text-center">Leeya Goldman</td>
						<td class="h4 text-center">0547829983</td>
						<td class="h4 text-center">Leeya@example.com</td>
						<td class="h4 text-center">15.5.88</td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center">5</td>
						<td class="h4 text-center">Idan Goldman</td>
						<td class="h4 text-center">0547829983</td>
						<td class="h4 text-center">Idan@example.com</td>
						<td class="h4 text-center">15.5.88</td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
					<tr class="bg-secondary text-white">
						<td class="h4 text-center"><? $id ?></td>
						<td class="h4 text-center"><? $name ?></td>
						<td class="h4 text-center"><? $email ?></td>
						<td class="h4 text-center"><? $bday ?></td>
						<td class="h4 text-center"><? $bday ?></td>
						<td class="h4 text-center">
							<a type="edit" href="/edit/1" class="btn btn-danger">Edit</a>
							<button type="button" class="btn btn-danger">Delete</button>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>

	<!-- Footer -->
	<div class="page-footer col-12 col-md-8 offset-md-2 pt-5 bg-dark">
		<footer>

			<!-- Copyright -->
			<div class="footer-copyright text-center py-3 text-white mb-5">© 2020 Copyright saved to : yosi@123code.co
				<a class="text-danger text-center" href="/"> Yosi's Phonebook</a>
			</div>
			<!-- Copyright -->

		</footer>
	</div>
	<!-- Footer -->

	<script src="/vendors/jquery-3.5.1.min.js"></script>
	<script src="/vendors/popper-1.14.3.min.js"></script>
	<script src="/vendors/bootstrap.min-4.1.3.js"></script>
</body>

</html>