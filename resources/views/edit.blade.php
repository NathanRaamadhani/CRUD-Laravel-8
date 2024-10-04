<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="/css/ticket.css">
	<title>Edit Ticket</title>
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
	<!-- tabel -->
	<center>
		<div class="imgtik">
			<h3>Edit Tiket</h3>
			<br>
			<form action="/tickets/{{$ticket->id}}" method="post">
				@method('put')
				@csrf
				<table>
					<tr>
						<td width="130">Username</td>
						<td><input type="text" name="username" placeholder="Username" class="username"
								value={{$ticket->username}}></td>
					</tr>
					<tr>
						<td width="130">E-mail</td>
						<td><input type="email" name="email" placeholder="E-mail" class="email"
								value={{$ticket->email}}></td>
					</tr>
					<tr>
						<td width="130">Nomor Telepon</td>
						<td><input type="text" name="no_tlpn" placeholder="No. Telp" class="no_tlpn"
								value={{$ticket->no_tlpn}}></td>
					</tr>
					<tr>
						<td width="130">Jumlah</td>
						<td><input type="number" name="jumlah" id="jumlah" placeholder="Jumlah" class="jumlah"
								value={{$ticket->jumlah}}></td>
					</tr>
					<tr>
						<td width="130">Waktu</td>
						<td><input type="datetime-local" name="waktu" placeholder="Waktu" class="waktu"
								value={{$ticket->waktu}}></td>
					</tr>
					<tr>
						<td width="130">Bangku</td>
						<td><input type="text" name="bangku" placeholder="Bangku" class="bangku" value={{old('bangku',
								$ticket->bangku)}}>
						</td>
					</tr>
					<tr>
						<td width="130"
							style="text-align:center ; padding-top:40px; font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;"
							colspan="2">
							<h3>FILM</h3>
						</td>
						<input type="hidden" class="film" name="film" placeholder="Film" value="/img/1.jpg"
							value={{$ticket->film}}>
					</tr>
				</table>
				<!-- carousel -->
				<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
					<div class="carousel-indicators">
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
							class="active" aria-current="true" aria-label="Slide 1"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
							aria-label="Slide 2"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
							aria-label="Slide 3"></button>
						<button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
							aria-label="Slide 4"></button>
					</div>
					<div class="carousel-inner">
						<div class="carousel-item active">
							<img src="/img/1.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>First slide label</h5>
								<p>Some representative placeholder content for the first slide.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="/img/2.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Second slide label</h5>
								<p>Some representative placeholder content for the second slide.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="/img/3.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Third slide label</h5>
								<p>Some representative placeholder content for the third slide.</p>
							</div>
						</div>
						<div class="carousel-item">
							<img src="/img/4.jpg" class="d-block w-100" alt="...">
							<div class="carousel-caption d-none d-md-block">
								<h5>Third slide label</h5>
								<p>Some representative placeholder content for the third slide.</p>
							</div>
						</div>
					</div>
					<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Previous</span>
					</button>
					<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
						data-bs-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="visually-hidden">Next</span>
					</button>
				</div>


				<button type="submit" name="submit" class="btn btn-primary"
					style="--bs-btn-padding-y: .25rem; --bs-btn-padding-x: .5rem; --bs-btn-font-size: .75rem;">
					Update
				</button>
	</center>

	</form>
	</div>


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
				<p class="copyright">Nathan Ramadhani @2022/p>
			</div>
		</footer>
	</div>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
		integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
	</script>



	<script>
		const tombolnext = document.querySelector(".carousel-control-next-icon");
		const tombolprevious = document.querySelector(".carousel-control-prev-icon");
		const film = document.querySelector(".film");
		const images = ["/img/1.jpg", "/img/2.jpg", "/img/3.jpg", "/img/4.jpg", ];
		let i = 0;

		tombolnext.addEventListener("click", function() {
			console.log("ok");
			if (i >= images.length - 1) i = -1;
			i++;
			console.log(i);
			film.setAttribute("value", images[i]);
			// return setImg();
		})

		tombolprevious.addEventListener("click", function() {
			console.log("ok");
			if (i <= 0) i = images.length;
			i--;
			console.log(i);
			film.setAttribute("value", images[i]);
			// return setImg();
		})
	</script>
</body>

</html>