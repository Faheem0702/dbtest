

<?php

if(isset($_POST["submit"])){
$username=$_POST["name"];
$password=$_POST["password"];


//connecting to the database
include("conn.php");
$sql="SELECT * FROM admin WHERE username='$username'";
$result=mysql_query($sql,$conn);

$row=mysql_fetch_array($result);
if($row['username']==$username && $row['password']==$password )
{
echo "Logi Success!!!  Welcome" .$row['username'];


header("Location:welcome.html");

}
}
?>
<!DOCTYPE HTML>
<html lang="zxx">

<head>
	<title>Login</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Effective Login Form Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements"
	/>
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Meta tag Keywords -->
	<!-- css files -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/font-awesome.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->
	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //web-fonts -->
</head>

<body>
	<div class="video-w3l" data-vide-bg="video/1">
		<!--header-->
		<div class="header-w3l">
			<h1>
				<span>E</span>ffective
				<span>L</span>ogin
				<span>F</span>orm
			</h1>
		</div>
		<!--//header-->
		<div class="main-content-agile">
			<div class="sub-main-w3">
				<h2>Login Here
					<i class="fa fa-hand-o-down" aria-hidden="true"></i>
				</h2>
				<form action="#" method="post">
					<div class="pom-agile">
						<span class="fa fa-user-o" aria-hidden="true"></span>
						<input placeholder="Username" name="name" class="user" type="text" required="">
					</div>
					<div class="pom-agile">
						<span class="fa fa-key" aria-hidden="true"></span>
						<input placeholder="Password" name="password" class="pass" type="password" required="">
					</div>
					<div class="sub-w3l">
						
					</div>
					<div class="right-w3l">
						<input type="submit" value="Login" name="submit">
					</div>
				</form>
			</div>
		</div>
		<!--//main-->
		<!--footer-->
		<div class="footer">
			<p>&copy; 2018  All rights reserved | Design by
				<a href="#">ASFA</a>
			</p>
		</div>
		<!--//footer-->
	</div>

	<!-- js -->
	<script src="js/jquery-2.1.4.min.js"></script>
	<script src="js/jquery.vide.min.js"></script>
	<!-- //js -->

</body>

</html>