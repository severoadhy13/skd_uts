<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Jost:wght@400;500;700;900&display=swap" rel="stylesheet">
</head>
<style type="text/css">
	*
	{
		margin: 0;
		padding: 0;
		font-family: 'Jost', sans-serif;
		transition: 0.5s;
		overflow: hidden;
	}
	header
	{
		width: 100%;
		height: 100vh;
		background-color: #f9f7fe;
	}
	nav
	{
		width: 1200px;
		height: 80px;
		margin: auto;
		display: flex;
		justify-content: space-between;
		align-items: center;
	}
	nav .logo
	{
		color: #8e43e7;
		font-size: 30px;
		cursor: pointer;
	}
	nav ul
	{
		display: flex;
		justify-content: space-between;
		align-items: center;
		list-style: none;
	}
	nav ul li
	{
		margin-right: 40px;
		font-size: 18px;
		cursor: pointer;
		color: #686485;
		font-weight: 500;
	}
	nav ul li:hover
	{
		color: #8e43e7;
	}
	.active
	{
		color: white;
		background-color: red;
		border-radius: 5px;
		padding: 5px 10px;
	}
	.container
	{
		width: 1200px;
		height: 100%;
		margin: auto;
		display: flex;
		padding-top: 50px;
	}
	.container h4
	{
		padding-top: 100px;
		color: #686485;
	}
	.container h1
	{
		font-size: 60px;
		color: #3f3a64;
		font-weight: 400;
	}
	.container span
	{
		font-weight: 700;
	}
	.container p
	{
		color: #6b6969;
		line-height: 30px;
		padding-top: 20px;
		font-size: 19px;
	}
	.btn
	{
		width: 120px;
		height: 50px;
		border: none;
		background: #8e43e7;
		color: #fff;
		font-size: 18px;
		cursor: pointer;
		border-radius: 10px;
		margin-top: 25px;
	}
	.btn2
	{
		width: 120px;
		height: 50px;
		border: 1px solid #8e43e7;
		background: transparent;
		color: #8e43e7;
		font-size: 18px;
		cursor: pointer;
		border-radius: 10px;
		margin-top: 25px;
	}
	.btn2:hover
	{
		background: #8e43e7;
		color: #fff;
	}
	.image img
	{
		width: 550px;
		margin-left: 100px;
	}
</style>
<body>
	<header>
		<nav>
			<h1 class="logo">Highschool</h1>
			<ul>
				<li>Home</li>
				<li>About</li>
				<li>Service</li>
				<li>Portfolio</li>
				<li>Blog</li>
				<li>Contact</li>
				<li class="active" onclick="document.location='logout.php'">Logout</li>
			</ul>
		</nav>
		<div class="container">
			<div class="content">
				<h4>SELAMAT DATANG</h4>
				<h1><span>Highschool</span><br> National Academy</h1>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.<br>
					Provident, excepturi. Distinctio accusantium fugit odit? Fugit<br>
					ipsam. Sed ac fringilla ex. Nam mauris velit, ac cursus quis, non leo.</p>
					<button onclick="document.location='./caesar/index.php'" class="btn">Caesar</button>
					<button onclick="document.location='./vignere/index.php'" class="btn2">Vignere</button>
			</div>
			<div class="image">
				<img src="photo1.png">
			</div>
		</div>
	</header>
</body>
</html>