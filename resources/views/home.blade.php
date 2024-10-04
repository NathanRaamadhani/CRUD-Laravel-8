<!Doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="/css/home.css">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" /><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
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


  
  
    <!-- judul -->
    <div class="con">
      <center>
        <br>
        <h1>New Movie</h1>
      </center>


      <!-- hot movie -->
      <section class="section-card">
        <center>
          <img src="/img/loginimg.jpg">
        </center>    
      
      </section>

      <br>

      <!-- card movie -->
      <section class="section-cards">
        <div class="card card-1" style="width: 18rem;">
          <img src="/img/4.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">OBLIVION</h5>
            <p class="card-text">The film Oblivion tells the story in 2017 where the earth was destroyed, the moon which is the earth's satellite experienced a space tragedy. In this Oblivion film, Tom Cruise plays Jack, a veteran assigned to retrieve Earth's resources.</p>
          </div>
          <ul class="card-body">  
              <li class="list-group-item">Rating</li>
            <li class="list-group-item">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </li>
          </ul> 
          <div class="card-body">
          <a href="/ticket" class="btn">Book Now!</a>
          </div>
        </div>

        <div class="card card-2" style="width: 18rem;">
          <img src="/img/1.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">AVENGERS (2012)</h5>
            <p class="card-text">“The Avengers” is a film that tells the story of “earth's mightiest superhero” who saves the earth from Loki's attack from the planet Asgard. The film is filled with famous actors and actresses who play the characters.</p>
          </div>
          <ul class="card-body">  
              <li class="list-group-item">Rating</li>
            <li class="list-group-item">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </li>
          </ul> 
          <div class="card-body">
          <a href="/ticket" class="btn">Book Now!</a>
          </div>
        </div>

        <div class="card card-3" style="width: 18rem;">
          <img src="/img/2.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">RAMPAGE</h5>
            <p class="card-text">This film tells the story of a primatologist named Davis Okoye (Dwayne Johnson) who befriends an albino gorilla, George. George who was originally docile turned aggressive with an enlarged body due to pathogens.</p>
          </div>
          <ul class="card-body">  
              <li class="list-group-item">Rating</li>
            <li class="list-group-item">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </li>
          </ul> 
          <div class="card-body">
          <a href="/ticket" class="btn">Book Now!</a>
          </div>
        </div>

        <div class="card card-3" style="width: 18rem;">
          <img src="/img/3.jpg" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">SPIDERMAN</h5>
            <p class="card-text">This film tells about the figure of a man who gets the power of a spider. Then the man uses his powers to eradicate evil.</p>
          </div>
          <ul class="card-body">  
              <li class="list-group-item">Rating</li>
            <li class="list-group-item">
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
            </li>
          </ul> 
          <div class="card-body">
          <a href="/ticket" class="btn">Book Now!</a>
          </div>
        </div>
      </section>

      
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
                    <div class="col item social"><a href="#"><i class="icon ion-social-facebook"></i></a><a href="#"><i class="icon ion-social-twitter"></i></a><a href="#"><i class="icon ion-social-snapchat"></i></a><a href="#"><i class="icon ion-social-instagram"></i></a></div>
                </div>
                <p class="copyright">Nathan Ramadhani © 2022</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>
