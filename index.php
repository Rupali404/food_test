<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="index.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<title>Food Website</title>
</head>
<body>
	<div class="container">
		<div class="nav">
			<img class="nav_logo"src="downloads.jpeg">
			<div class="nav_slogan">
				<h1>Eat Yourself World</h1>
			</div>
			<div class="link">	
				<i class="fa fa-envelope" aria-hidden="true">email@gmail.com</i>
				<i class="fa fa-phone" aria-hidden="true">+02186,223465</i>	
				<a href="sign_in.php">Sign In</a>
			</div>
		</div>
	</div>
	<div class="w3-content">
	  <img class="myslides" src="image.jpeg" style="height:400px;width: 100%">
	  <img class="myslides" src="image1.jpeg" style="height:400px;width: 100%">
	  <img class="myslides" src="image2.jpeg" style="height:400px;width: 100%">
	  <img class="myslides" src="image3.jpeg" style="height:400px;width: 100%">
	  <!--<img class="myslides" src="images4.jpeg" style="height:400px;width: 100%">-->
	  <img class="myslides" src="image5.jpeg" style="height:400px;width: 100%">

	</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("myslides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>


</body>
</html>