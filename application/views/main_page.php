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
	<nav class="navbar navbar-dark bg-dark">
		<div class="container-fluid">
			<a class="navbar-brand">Navbar</a>
			<form class="d-flex">
				<input type="search" class="form-control me-2" placeholder="Buscar">
				<button class="btn btn-outline-success" type="submit">Buscar</button>
			</form>
		</div>
	</nav>
	<!-- /Navigation -->
	<div class="container">
		<div class="row">
			<div class="col-8">
				Contenido
			</div>
			<div class="col">
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
</body>
</html>