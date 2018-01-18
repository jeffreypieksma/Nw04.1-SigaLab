<!DOCTYPE html>
<html>
<head>
	<style>
		header{
			background-color: #F5F8FA;
			text-align: center;
			height: 100px;
			line-height: 100px;
		}
		footer{
			background-color: #F5F8FA;
			text-align: center;
			height: 100px;
			line-height: 100px;
		}

		.content{
			width: 80%;
			margin: auto;
			text-align: center;
			padding: 40px;
		}
		a{
			padding: 10px 20px;
			border: 1px solid #ddd;
			text-decoration: none;
			background-color: green;
			color: #fff;
			border-radius: 5px;
			box-shadow: 1px 1px 1px #ddd;
		}
	</style>
</head>
<body">
	<header>
		<h1>SigaLab Intake</h1>
	</header>

	<section class="content">
		
			<p>Beste {{$name}}, je bent uitgenodigt om mee te doen aan de SigaLab {{$group_name}} Intake test!</p>
			<br>
			<br>

			<a href="{{route('intake_welcome', ['hash' => $hash, 'email' => $email])}}" target="_blank">
				Accepteer de uitnodiging
			</a>
		
	</section>

	<footer>
		<p>&copy; Copyright, all rights reserved</p>
	</footer>
	
</body>
</html>