<?php

// session_start(); // Démarrage de la session
// require_once 'test.php'; // On inclut la connexion à la base de données

// if(!empty($_POST['email']) && !empty($_POST['password'])) // Si il existe les champs email, password et qu'il sont pas vident

// 	// Patch XSS
// 	// $email = htmlspecialchars($_POST['email']); 
// 	// $password = htmlspecialchars($_POST['password']);
	
// 	$email = strtolower($email); // email transformé en minuscule



include('test.php');




?>
<!DOCTYPE html>
<html>
<head>
	<title>Animated Login Form</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<!-- <link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet"> -->
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
	<link rel="stylesheet" href="css/all.css">
</head>
<body>
	<!-- <img class="wave" src="img/wave.png"> -->
	<div class="container">
		<div class="img">
			<img src="img/phone.png">
		</div>
		<div class="login-content">
			<form action="login.html">
				<?php

                   if(isset($_GET['login_err']))
                  {
	                $err = htmlspecialchars($_GET['login_err']);

	             switch($err)
	            {
		        case 'password':
		      ?>
			<div class="alert alert-danger">
				<strong>Erreur</strong> mot de passe incorrect
			</div>
		<?php
		break;

		case 'email':
		?>
			<div class="alert alert-danger">
				<strong>Erreur</strong> email incorrect
			</div>
		<?php
		break;

	
}
 }












				
				
				
				
				
				
				
				
				
				
				
				
				
				
				
				?>



			
				<!-- <img src="img/avatar.svg"> -->
				<h2 class="title">Bienvenue</h2>
           		<div class="input-div one">
           		   <div class="i">
					<i class="fa-solid fa-envelope"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>Email</h5>
           		   		<input type="email" class="input" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Mot de pass</h5>
           		    	<input type="password" class="input" name="password">
            	   </div>
            	</div>
            	<a href="#">Oblier Mot de pass?</a>
            	<input type="submit" class="btn" value="connexion">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>