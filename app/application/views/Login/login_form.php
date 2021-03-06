<!DOCTYPE html>
<html>
    
<head>
	<title> Login Vitat</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" integrity="sha384-gfdkjb5BdAXd+lj+gudLWI+BXq4IuLW5IT+brZEZsLFm++aCMlF1V92rMkPaX4PP" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo base_url().'assets/css/main.css';?>" >
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<!--Coded with love by Mutiullah Samim-->
<body background="<?php echo base_url().'assets/img/fondo.jpg';?>"  class="img-responsive">

<div class="container h-100" style="padding-right:auto" >
		<div class="d-flex justify-content-center h-100">
			<div class="user_card">
				<div class="d-flex justify-content-center">
					<div class="brand_logo_container">
						<img src="<?php echo base_url().'assets/img/VITATlogoazul.png';?>" class="brand_logo" alt="Logo">
					</div>
				</div>
				<div class="d-flex justify-content-center form_container">
					<form method="POST" action="" id="login_form">
						<div class="input-group mb-3">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-user"></i></span>
							</div>
							<input type="text" type="mail" name="user_mail" class="form-control input_user" placeholder="Escribe tu correo" required="">
						</div>
						<div class="input-group mb-2">
							<div class="input-group-append">
								<span class="input-group-text"><i class="fas fa-key"></i></span>
							</div>
							<input type="password" name="user_password" class="form-control input_pass" placeholder="Escribe tu password" required="">
						</div>
						<style>
							.button
							{
								background-color: #0B73EF;
								border:none;
								color:white;
								padding: 15px 32px;
								text-align: center;
								text-decoration: none;
								display: inline-block;
								font-size: 16px;
								margin: 4px 2px;
								cursor: pointer;
							}
							
								.button:disabled
								{
									opacity:0.5;
								}
							.hide {
								display: none;
							}
							</style>
							<div class="d-flex justify-content-center mt-3 login_container">
							<button class="button" >
<i class="loading-icon fa fa-spinner fa-spin hide"></i>
<span class="btn_tex">Iniciar Sesión</span>
</button>
					
				   </div>
				   <script>
					   $(document).ready (function(){
						   $(".button").on("click", function(){
                           $(".result").text("");
						   $(".loading-icon").removeClass("hide");
						   });
					   });
					   </script>
					</form>
				</div>
		
				<div class="mt-4" align="center">
					<a style="font-size: 12px;">By Supporttime</a>
				</div>
			</div>
		</div>
    </div>
    <script src="<?php echo base_url().'assets/js/login_form.js';?>"></script>
</body>

<style>
    	body,
		html {
			margin: 0;
			padding: 0;
			height: 100%;
			
		}
		.user_card {
			height: 400px;
			width: 350px;
			margin-top: auto;
			margin-bottom: auto;
			background: #83859b;
            opacity: 0.9;
			position: relative;
			display: flex;
			justify-content: center;
			flex-direction: column;
			padding: 10px;
			box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
			-moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
            
			border-radius: 5px;

		}
		.brand_logo_container {
			position: absolute;
			height: 170px;
			width: 170px;
			top: -75px;
			border-radius: 50%;
			background: #ccd2d4;
			padding: 10px;
			text-align: center;
		}
		.brand_logo {
			height: 150px;
			width: 150px;
			border-radius: 50%;
			border: 2px solid white;
		}
		.form_container {
			margin-top: 100px;
		}
		.login_btn {
			width: 100%;
			background: #467bee !important;
			color: white !important;
		}
		.login_btn:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.login_container {
			padding: 0 2rem;
		}
		.input-group-text {
			background: #467bee !important;
			color: white !important;
			border: 0 !important;
			border-radius: 0.25rem 0 0 0.25rem !important;
		}
		.input_user,
		.input_pass:focus {
			box-shadow: none !important;
			outline: 0px !important;
		}
		.custom-checkbox .custom-control-input:checked~.custom-control-label::before {
			background-color: #467bee !important;
		}
</style>

</html>
