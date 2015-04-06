<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Learning PHP</title>
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap-theme.min.css'?>">
	<link rel="stylesheet" href="<?php echo base_url().'asset/css/pisit.css'?>">

</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">Start PHP</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li>
					<a href="/welcome">Home</a>
				</li>
				<li>
					<a href="/user">User</a>
				</li>
			</ul>
		</div>
		<!-- /.navbar-collapse -->
	</div>
	<!-- /.container -->
</nav>

<!-- Page Content -->
<div class="container">
	<?php $this->load->view($template)?>
</div>
<!-- /.container -->

<div class="container">
	<hr>
	<!-- Footer -->
	<footer>
		<div class="row">
			<div class="col-lg-12">
				<p>Copyright &copy; Your Website 2014</p>
			</div>
		</div>
	</footer>

</div>
</body>
<script src="<?php echo base_url().'asset/js/jquery-1.11.0.min.js'?>"></script>
<script src="<?php echo base_url().'asset/js/bootstrap.min.js'?>"></script>
</html>