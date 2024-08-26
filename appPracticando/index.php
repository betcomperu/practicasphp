	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="shortcut icon" href="http://getbootstrap.com/docs-assets/ico/favicon.png">

		<title>PHP A FULL</title>

		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	</head>

	<body>

		<!-- Fixed navbar -->
		<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#">Brand</a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
						<li><a href="#">Link</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Dropdown <span class="caret"></span></a>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
								<li class="divider"></li>
								<li><a href="#">One more separated link</a></li>
							</ul>
						</li>
					</ul>
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group">
							<input type="text" class="form-control" placeholder="Search">
						</div>
						<button type="submit" class="btn btn-default">Submit</button>
					</form>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="#">Link</a></li>
					</ul>
				</div>
			</div>
		</nav>


		<div class="container">
			<!-- Main component for a primary marketing message or call to action -->
			<div class="jumbotron">
				<h1>Navbar example</h1>
				<p>This example is a quick exercise to illustrate how the
					default, static and fixed to top navbar work. It includes the responsive
					CSS and HTML, so it also adapts to your viewport and device.</p>
				<p>Esto es una lección de PHP.</p>
				<p>
					<a class="btn btn-lg btn-primary" href="http://getbootstrap.com/components/#navbar" role="button">View navbar docs »</a>
				</p>
			</div>

		</div> <!-- /container -->
		<div class="col-md-6">


			<?php
			$dias = array('Lunes', 'Martes', 'Miercoles', 'Jueves', 'Viernes');
			?>
			<ul>
				<?php foreach ($dias as $data) : ?>
					<li><?= $data ?></li>
				<?php endforeach; ?>

			</ul>

			
		</div>





		<!-- Bootstrap core JavaScript
	    ================================================== -->
		<!-- Placed at the end of the document so the pages load faster -->




		<script src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_files/jquery-1.js"></script>
		<script src="Fixed%20Top%20Navbar%20Example%20for%20Bootstrap_files/bootstrap.js"></script>


	</body>

	</html>