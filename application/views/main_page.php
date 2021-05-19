<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta author="Andrea Suárez Mendoza">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
	<title>Welcome!</title>
</head>
<body>
	<!-- Navigation -->
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">
				<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQwgbUlG1ZDqXC02eza0_hXdIqmeWg2Xb0Bj1EItxOcFgTct4hN5_Q6mALIvA5m3H_fgl0&usqp=CAU" alt="" width="50" height="44">
			</a>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link active" aria-current="page" href="#">Directorio</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<!-- /Navigation -->
	<div class="container">
		<div class="p-4 p-md-5 mb-4 text-dark rounded bg-light">
			<img src="https://www.iqt.gob.mx/wp-content/themes/InstitutoQueretanoDelTransporte/images/logoTemporal.png" class="img-fluid" alt="">
		</div>
		<div class="row">
			<div class="col-8">
				<div class="row" style="margin-bottom: 15px">
					<div class="col-sm-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								Título
							</div>
							<div class="card-body text-dark bg-light">
								<p class="card-text">Contenido</p>
								<a href="#" class="card-link">Link</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								Título 2
							</div>
							<div class="card-body text-dark bg-light">
								<p class="card-text">Contenido</p>
								<a href="#" class="card-link">Link 2</a>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								Título3
							</div>
							<div class="card-body text-dark bg-light">
								<p class="card-text">Contenido</p>
								<a href="#" class="card-link">Link</a>
							</div>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="card text-white bg-secondary">
							<div class="card-header">
								Título 4
							</div>
							<div class="card-body text-dark bg-light">
								<p class="card-text">Contenido</p>
								<a href="#" class="card-link">Link 2</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="card text-white bg-dark mb-3">
					<div class="card-header">
						Login
					</div>
					<div class="card-body text-dark bg-light">
						<form>
							<div class="mb-3">
								<label for="username" class="form-label">Username:</label>
								<input type="text" class="form-control" name="user" id="user" placeholder="@ejemplo" required>
								<div class="invalid-feedback">
									Por favor ingresa el usuario.
								</div>
							</div>
							<div class="mb-3">
								<label for="password" class="form-label">Contraseña:</label>
								<input type="password" class="form-control" name="pass" id="pass" placeholder="@Contraseña" required>
								<div class="invalid-feedback">
									Contraseña incorrecta.
								</div>
							</div>
							<button class="btn btn-primary" type="submit">Iniciar sesión</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>