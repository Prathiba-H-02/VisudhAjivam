<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Visudh Ajivam</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="service.php">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php">About</a>
        </li>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>

<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
  
  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/h2.png" alt="Health care" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/h1.png" alt="Safety" width="900" height="500">
    </div>
    <div class="carousel-item">
      <img src="images/h3.jpg" alt="Diagnosis" width="900" height="500">
    </div>
  </div>
  
  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>

<h4>Welcome</h4>


<section class="my-5">
	<div class="py-5">
		<h2 class="text-center"> visudh ajivam</h2>
	</div>
	<div class="container-fluid">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-12">
			<img src="images/h1.png" class="img-fluid">
		</div>
		<div class="col-lg-6 col-md-6 col-12">
			<p> - Greetings , we are here to offer you digital health platform for convenient medical services at affordable price. A colloboration of medical services like consulting doctors, buying medicines from pharmacies, lab diagnosis appointments is presented for easier access at right time.</p>
			<p> - Get the right medical services without delay at the right time</p>
			<p> - Stay asssured with our support for medical services </p>
         <a href="about.php" class="btn btn-success"> check more </a>
		</div>
	</div>
</div>
</section>

	<section class="my-5">
		<div class="py-5">
			<h2 class-"text-center">How can we help you ?</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
	  <img class="card-img-top" src="images/doctors.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">DOCTORS</h4>
	    <p class="card-text">Our doctors</p>
	    <a href="#" class="btn btn-primary">See Doctors</a>
	  </div>
	</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
	  <img class="card-img-top" src="images/pharm.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">PHARMACIES</h4>
	    <p class="card-text">Our pharmacies</p>
	    <a href="#" class="btn btn-primary">See pharmacies</a>
	  </div>
	</div>
		</div>
		<div class="col-lg-4 col-md-4 col-12">
					<div class="card">
	  <img class="card-img-top" src="images/lab.jpg" alt="Card image">
	  <div class="card-body">
	    <h4 class="card-title">CLINICAL LABS</h4>
	    <p class="card-text">Our labs</p>
	    <a href="#" class="btn btn-primary">See labs</a>
	  </div>
	</div>
		</div>
		</div>
	</section>



	<section class="my-5">
		<div class="py-5">
    <h2> Join us today and avail our services!</h2>
</div>
    <h5> Enter your details  </h5>
     <div class="w-50 m-auto">
     	<form action="userinfo.php" method="post">
           <div class="form-group">
           	<label>Username</label>
           	<input type="text" name="user" autocomplete="off" class="form-control">
           </div>
           <div class="form-group">
           	<label>Email</label>
           	<input type="text" name="email" autocomplete="off" class="form-control">
           </div>
           <div class="form-group">
           	<label>Mobile</label>
           	<input type="text" name="mobile" autocomplete="off" class="form-control"> 
           </div>
           <div class="form-group">
           	<label>Feedback</label>
           	<textarea class="form-control" name="comments"></textarea>
           </div>
           <button type="submit" class="btn btn-success">Submit</button>
     	</form>
     </div>
</section>

<footer>
	<p class="p-3 bg-dark text-white text-center">@visudhajivam.in</p>
</footer>	

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>