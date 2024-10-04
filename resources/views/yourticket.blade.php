<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/yourticket.css">
	<title>Your Ticket</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
		integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
	<!-- navigation -->
	<nav class="navbar navbar-expand-lg">
		<div class="container-fluid">
			<div class="collapse navbar-collapse" id="navbarTogglerDemo02">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link" aria-current="page" href="/home">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/ticket">Ticket</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="/yourticket">Your Ticket</a>
					</li>
				</ul>
				<form class="d-flex" role="search" action="/logout" method="post">
					@csrf
					<button class="btn btn-outline-success" type="submit">Logout</button>
				</form>
			</div>
		</div>
	</nav>

	<br>
	<br>

	<!-- table -->
	<table class="table table-dark table-striped">
		<thead>
			<tr>
				<th scope="col">No</th>
				<th scope="col">Username</th>
				<th scope="col">E-mail</th>
				<th scope="col">No Telepon</th>
				<th scope="col">Jumlah Ticket</th>
				<th scope="col">Waktu</th>
				<th scope="col">Bangku</th>
				<th scope="col">Film</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>


			@if ($tickets->count())
			@foreach ($tickets as $ticket)
			<tr>
				<td class="text-center">{{ $loop->iteration }}.</td>
				<td>{{ $ticket->username }}</td>
				<td>{{ $ticket->email }}</td>
				<td>{{ $ticket->no_tlpn }}</td>
				<td>{{ $ticket->jumlah }}</td>
				<td>{{ $ticket->waktu }}</td>
				<td>{{ $ticket->bangku }}</td>
				<td><img src={{ $ticket->film }} style='width:100px;'></td>
				<td>
					<a href="/tickets/{{$ticket->id}}/edit"><i class="fa fa-edit"></i></a>
					<br>
					<a href="/ticket/{{$ticket->id}}/delete"><i class="fa fa-trash" style="color: red;"></i></a>
				</td>

			</tr>
			@endforeach
			@endif

		</tbody>
	</table>



	<br>
	<br>
	<br>
	<br>
	<br>

	<!-- footer -->
	<div class="footer-dark">
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-sm-6 col-md-3 item">
						<h3>Services</h3>
						<ul>
							<li><a href="#">Web design</a></li>
							<li><a href="#">Development</a></li>
							<li><a href="#">Hosting</a></li>
						</ul>
					</div>
					<div class="col-sm-6 col-md-3 item">
						<h3>About</h3>
						<ul>
							<li><a href="#">Company</a></li>
							<li><a href="#">Team</a></li>
							<li><a href="#">Careers</a></li>
						</ul>
					</div>
					<div class="col-md-6 item text">
						<h3>TUGAS BESAR 2</h3>
						<p>Untuk memenuhi Tugas Besar 2 Pemrograman Web 1.</p>
					</div>
					<div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i
								class="icon ion-social-twitter"></i></a><a href="#"><i
								class="icon ion-social-snapchat"></i></a><a href="#"><i
								class="icon ion-social-instagram"></i></a></div>
				</div>
				<p class="copyright">Nathan Ramadhani © 2022</p>
			</div>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>

</body>

</html>