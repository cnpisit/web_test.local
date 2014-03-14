<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Web_test.local</title>

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}

	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}

	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
		<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'asset/css/bootstrap-theme.min.css'?>">
		<link rel="stylesheet" href="<?php echo base_url().'asset/css/pisit.css'?>">

</head>
<body>
<div id="container">
	<nav class="main-nav">
		<ul class="nav nav-pills">
			<li id="el" class="<?php echo ($this->uri->rsegment(2) == "index"&&$this->uri->rsegment(1)=="welcome")? "active" : "" ?>"><a href="<?php echo base_url().'welcome'?>">Home</a></li>
			<li id="el1" class="<?php echo ($this->uri->rsegment(2) == "index"&&$this->uri->rsegment(1)=="user")? "active" : "" ?>"><a href="<?php echo base_url().'user'?>">Profile</a></li>
			<li id="el2" class="<?php echo ($this->uri->rsegment(2) == "message"&&$this->uri->rsegment(1)=="welcome")? "active" : "" ?>"><a href="<?php echo base_url().'welcome/message'?>">Messages</a></li>
		</ul>
	</nav>
	
<hr>

	<div id="body">
		<?php $this->load->view($template); ?>
	</div>
<hr>
	<footer class="footer"><center>Copy left by cn_pisit</center></footer>
</div>
<script src="<?php echo base_url().'asset/js/jquery-1.11.0.min.js'?>"></script>
<script src="<?php echo base_url().'asset/js/bootstrap.min.js'?>"></script>
</body>
</html>