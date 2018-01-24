<?php
//check if user coming from a request

	if($_SERVER['REQUEST_METHOD'] == 'POST') {

		
			// assign variables
		$user = $_POST['username'];
		$mail = $_POST['email'];
		$phone = $_POST['phone'];
		$msg = $_POST['message'];

			//creating array of errors

				$formErrors = array();

				if (strlen($user) <= 3){

					$formErrors[] = 'username Must Be Larger than 3 charachters';

				}
			}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>DRODIRECT</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous"> 
    <link rel="stylesheet" href="css/main.css"> 
    <script src="https://use.fontawesome.com/98b3ecdf6f.js"></script> 
</head>
<body>
	<!-- start upper bar -->
	<div class="upper-bar">
		<div class="container">
			<div class="row">
				<div class="info col-sm text-center text-sm-left">
					<i class="fa fa-mobile"></i>   800-821-8665 
					<i class="fa fa-envelope"></i>  subtool@subtool.com
				</div>
                <div class="info col-sm text-center text-sm-right">
            	<span>Let's Work Together</span> 
            	<span class="get-quote">Get Quote</span>  
		</div>
	</div>
  </div>
</div>
<!-- end upper bar -->

<!-- start nav bar -->
<nav class="navbar navbar-expand-lg navbar-light">
	<div class="container">
	  <a class="navbar-brand" href="#"> 
	  	<span>Dros</span><span>Direct</span>
	  </a>
	  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-nav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
	    <span class="navbar-toggler-icon"></span>
	  </button>

	  <div class="collapse navbar-collapse" id="main-nav">
	    <ul class="navbar-nav ml-auto">
	      <li class="nav-item ">
	        <a class="nav-link" href="#">Home </a>
	      </li>
	      <li class="nav-item active">
	        <a class="nav-link" href="#">About<span class="sr-only">(current)</span></a>
	      </li>
	      <li class="nav-item dropdown">
	        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	          Products
	        </a>
	        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	          <a class="dropdown-item" href="#">Mills</a>
	          <a class="dropdown-item" href="#">Lathes</a>
	          <div class="dropdown-divider"></div>
	          <a class="dropdown-item" href="#">General puposes</a>
	        </div>
	      </li>
	      <li class="nav-item">
	        <a class="nav-link " href="#">Contact Us</a>
	      </li>
	    </ul>
	    <form class="form-inline my-2 my-lg-0">
	      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
	      <button class="btn btn-primary my-2 my-sm-0" type="submit">Search</button>
	    </form>
	  </div>
	</div>
</nav>
<!-- end nav bar -->

<!--start form-->
	
	<div class="container">
		<h1 class="text-center"> Contact Us</h1>
		<h3 class="text-center"> Send us a message with a question or a suggestion to improve our website </h3>
		
			<div class="errors">

					<?php
						if(isset($formErrors)) {


					foreach($formErrors as $error){
						echo $error . '<br/>';
					}
				}

					
				
					?>

			</div>

		<form class="contact-form" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
			<input class="form-control" type="" name="username" placeholder="Name">
			<i class="fa fa-user fa-fw"></i>
			<input class="form-control" type="Email" name="email" placeholder="E-mail">
			<i class="fa fa-envelope fa-fw"></i>
			<input class="form-control" type="Phone Number" name="phone" placeholder="Phone Number">
			<i class="fa fa-phone fa-fw"></i>
			<textarea class="form-control" placeholder="Type your message here.." name="message" ></textarea>
			<input  class="btn btn-primary" type="submit" value="Send Message">
			<i class="fa fa-send fa-fw send-icon"></i>

		</form>



	</div>


<!-- start footer-->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="site-info">
					<h2><span>Dros</span><span>Direct</span></h2>
					<p>Fagor Automation USA Corporation, based out of Elk Grove Village, Illinois, now offers the 40i Digital Readout with a host of powerful advanced features as standard. and more new coming soon. follow ou social media for more info and to be updated to our new stuff all the time everyday and all day  </p>
					<a href="#"> Read More</a>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="helpful-links">
					<h2> Helpfull Links</h2>
					<div class="row">
						<div class="col">
							<ul class="list-unstyled">
								<li>About</li>
								<li>Team</li>
								<li>Prices</li>
								<li>Privacy</li>
							</ul>
							</div>
							<div class="col">
							<ul class="list-unstyled">
								<li>FAQ</li>
								<li>Blog</li>
								<li>Contact US</li>
								<li>Subtool.com</li>
							</ul>
							</div>
					</div>
				</div>
			</div>
			
			<div class="col-md-3">
				<div class="Contact">
					<h2>Contact us</h2>
					<ul class="list-unstyled">
						<li>4141 North Atlantic Blvd, Auburn Hills, Michigan</li>
						<li>Phone: 800-800-1111</li>
						<li>Email:<a href="mailto:info@subtool.com?subject=conatct">info@subtool.com </a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--end footer-->

	<!--start copright section-->

	<div class="copyright">
		<div class="container">
			<div class="row">
				<div class="col text-left text-uppercase">
					Copyright 2018 Dros Direct &copy; All Right Reserved
				</div>
			
				<div class="col text-right">
					<ul class="list-unstyled">
						<li>
							<a href=""><i class="fa fa-instagram"></i></a>
							<a href=""></a>
						</li>
						<li>
							<a href=""><i class="fa fa-facebook"></i></a>
							<a href=""></a>
						</li>
						<li>
							<a href=""><i class="fa fa-youtube"></i></a>
							<a href=""></a>
						</li>
						<li>
							<a href="https://twitter.com/Sherif_Fayez"><i class="fa fa-twitter"></i></a>
							<a href=""></a>
						</li>
						<li>
							<a href=""><i class="fa fa-google-plus"></i></a>
							<a href=""></a>
						</li>

					</ul>
				</div>


			</div>
		</div>
	</div>





	 <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    <script src="js/main.js"></script>
    <!-- <script src="https://use.fontawesome.com/98b3ecdf6f.js"></script> -->
</body>
</html>