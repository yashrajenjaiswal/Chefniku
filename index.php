<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
	<link rel="stylesheet" href="css/w3.css" rel='stylesheet' type='text/css'/>
	<!-- Bootstrap Core CSS -->
	<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
	<!-- gallery css -->
	<link rel="stylesheet" href="css/swipebox.css">
	<!-- Custom CSS -->
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<!-- font-awesome icons -->
	<link href="css/fontawesome-all.min.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!--webfonts-->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i"
	    rel="stylesheet">
	<!--//webfonts-->


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
</style>
<body>

<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="#" class="w3-button w3-block w3-black"  >HOME</a>
    </div>
    <div class="w3-col s3">
      <a href="#about" class="w3-button w3-block w3-black" >ABOUT</a>
    </div>
    <div class="w3-col s3">
      <a href="Chefniku/sensmail.php" class="w3-button w3-block w3-black">BOOKING AND QUERIES</a>
    </div>
    <div class="w3-col s3">
      <a href="#where" class="w3-button w3-block w3-black">EVENTS</a>
    </div>
  </div>
</div>

<!-- Sidebar (hidden by default) -->
<nav class="w3-sidebar w3-bar-block w3-card w3-top w3-xlarge w3-animate-left" style="display:none;z-index:2;width:40%;min-width:300px" id="mySidebar">
  <a href="javascript:void(0)" onclick="w3_close()"
  class="w3-bar-item w3-button">Close Menu</a>
  <a href="#food" onclick="w3_close()" class="w3-bar-item w3-button">Food</a>
  <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">About</a>
</nav>


  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center" id="about">  
    <h3>About Me, The Food Man</h3><br>
    <img src="images/niku.jpeg" alt="me" class="w3-image" style="display:block;margin:auto" width="10%" height="20%">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4><br/>
      <h6><i>With Passion For Real, Good Food</i></h6><br/>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
    </div>
  </div>
  
    <div class="agileits-services " id="services">
		<div class="container">
			<h3 class="w3ls-title text-center text-capitalize ">what we do</h3>
			<div class="agileits-services-row row py-md-5 pb-5">
				<div class="col-lg-3 col-md-6 agileits-services-grids">
					<span class="fab fa-uniregistry p-4"></span>
					<h4 class="mt-2 mb-3">Commercial Service</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="col-lg-3 col-md-6 agileits-services-grids mt-md-0 mt-3">
					<span class="fab fa-jenkins p-4"></span>
					<h4 class="mt-2 mb-3">Self Service</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
				</div>

				<div class="col-lg-3 col-md-6 agileits-services-grids mt-lg-0 mt-3">
					<span class="fab fa-schlix p-4"></span>
					<h4 class="mt-2 mb-3">Faster Service</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
				</div>
				<div class="col-lg-3 col-md-6 agileits-services-grids mt-lg-0 mt-3">
					<span class="fas fa-magic p-4"></span>
					<h4 class="mt-2 mb-3">Event Organiser</h4>
					<p>Itaque earum rerum hic tenetur a sapiente delectus reiciendis maiores alias consequatur aut</p>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->
  <footer class="w3-row-padding w3-padding-32">
    <div class="w3-third">
      <h3>FOOTER</h3>
      <p>Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, porta lectus vitae, ultricies congue gravida diam non fringilla.</p>
      <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
    </div>

<!-- End page content -->
</div>

<script>
// Script to open and close sidebar
function w3_open() {
  document.getElementById("mySidebar").style.display = "block";
}
 
function w3_close() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
