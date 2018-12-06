<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap CSS
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    Favicon -->
    <link rel="icon" href="images/ico.jpg" type="image/x-icon">
    <link rel="stylesheet" href="css/styles.css">
    <!-- titulo -->
    <title> QueenCandy | Preguntas Frecuentes ~ </title>
</head>
<body>
	<div class="container">
		<!-- cabecera -->
		<header class="main-header">
		<img src="images/queen_candy.png" alt="logotipo" class="logo">
			<!-- barra de navegacion -->
			<nav class="main-nav">
				 <!-- <li><a href="#" class="toggle-nav"><span class="fa fa-bars"></span></a></li>-->
				 @if (Route::has('login'))
						 <div class="top-right links">
								 @auth
										 <a href="{{ url('/home') }}">Home</a>
								 @else
										 <a href="{{ route('login') }}">Login</a>

										 @if (Route::has('register'))
												 <a href="{{ route('register') }}">Register</a>
										 @endif
								 @endauth
						 </div>
				 @endif
					<div class="menu">
						<ul>
						<li><a href="/register"><i class="fas fa-registered"></i> Registro</a></li>
						<li><a href="/login"> <i class="fas fa-sign-in-alt"></i> Login</a> </li>
						<li><a href="/faqs"><i class="fas fa-question"></i> FAQ</a></li>
						</ul>
					</div>
			</nav>
		</header>
	  <div class="main-container">
	    <ul>
	      <li class="pregu"><p>Cuales son los metodos de pago?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. UDSADASDAt enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>A que zonas llega el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	      <li class="pregu"><p>Cuanto tarda el envio?</p></li>
	      <li  class="resp"><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p></li>
	    </ul>
	  </div>
		<!-- footer -->
		<footer class="main-footer">
			<section class="redes">
        <ul>
          <li> 	<a href="#">¡Seguinos en nuestras redes sociales! <i class="fas fa-thumbs-up"></i></a><br>
						 		<a href="https://twitter.com"><i class="fab fa-twitter"></i></a>
								<a href="https://www.facebook.com"><i class="fab fa-facebook-f"></i></a>
                <a href="https://www.instagram.com"><i class="fab fa-instagram"></i></a>
          </li>
        </ul>
      </section>
		</footer>
			<!-- bootsrap -->
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	</div>
</body>
</html>
