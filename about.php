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
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!--//webfonts-->


<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Karma", sans-serif}
.w3-bar-block .w3-bar-item {padding:20px}
#more {display: none;}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-black w3-card">
    <a class="w3-bar-item w3-button w3-padding-large w3-hide-medium w3-hide-large w3-right" href="javascript:void(0)" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">HOME</a>
    <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ABOUT ME</a>
    <a href="#tour" class="w3-bar-item w3-button w3-padding-large w3-hide-small">ENQUIRIES</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hide-small">EVENTS</a>
    <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">GALLERY <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
  </div>
</div>

<!-- Navbar on small screens (remove the onclick attribute if you want the navbar to always show on top of the content when clicking on the links) -->
<div id="navDemo" class="w3-bar-block w3-black w3-hide w3-hide-large w3-hide-medium w3-top" style="margin-top:46px">
  <a href="#band" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ABOUT ME</a>
  <a href="#tour" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">ENQURIES</a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">EVENTS</a>
    <a href="#contact" class="w3-bar-item w3-button w3-padding-large" onclick="myFunction()">GALLERY</a>
  <div class="w3-dropdown-hover w3-hide-small">
      <button class="w3-padding-large w3-button" title="More">MORE <i class="fa fa-caret-down"></i></button>     
      <div class="w3-dropdown-content w3-bar-block w3-card-4">
        <a href="#" class="w3-bar-item w3-button">Merchandise</a>
        <a href="#" class="w3-bar-item w3-button">Extras</a>
        <a href="#" class="w3-bar-item w3-button">Media</a>
      </div>
    </div>
</div>



  
<!-- !PAGE CONTENT! -->
<div class="w3-main w3-content w3-padding" style="max-width:1200px;margin-top:100px">

  <!-- About Section -->
  <div class="w3-container w3-padding-32 w3-center" id="about">  
    <h3>About Me, The Food Man</h3><br>
    <img src="images/niku.jpeg" alt="me" class="w3-image" style="display:block;margin:auto" width="10%" height="20%">
    <div class="w3-padding-32">
      <h4><b>I am Who I Am!</b></h4><br/>
      <h6><i>With Passion For Real, Good Food</i></h6><br/>
      <p>Just me, myself and I, exploring the universe of unknownment. I have a heart of love and an interest of lorem ipsum and mauris neque 
	  quam blog. I want to share my world with you. Praesent tincidunt sed tellus ut rutrum. Sed vitae justo condimentum, 
	  porta lectus vitae, ultricies congue gravida diam non fringilla.<span id="dots">...</span><span id="more">erisque enim ligula venenatis 
	  dolor. Maecenas nisl est, ultrices nec congue eget, auctor vitae massa. Fusce luctus vestibulum augue ut aliquet. Nunc sagittis dictum 
	  nisi, sed ullamcorper ipsum dignissim ac. In at libero sed nunc venenatis imperdiet sed ornare turpis. Donec vitae dui eget tellus gravida
	  venenatis. Integer fringilla congue eros non fermentum. Sed dapibus pulvinar nibh tempor porta.</span></p>
      <button onclick="myFunctionReadMore()" id="Readmorebutton" class="w3-center">Read more</button> </p>
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

<!-- End page content -->
</div>
<!-- Footer -->
<footer class="w3-container w3-padding-32 w3-center w3-opacity w3-light-grey w3-xxlarge">
  <i class="fa fa-facebook-official w3-hover-opacity"></i>
  <i class="fa fa-instagram w3-hover-opacity"></i>
  <i class="fa fa-snapchat w3-hover-opacity"></i>
  <i class="fa fa-pinterest-p w3-hover-opacity"></i>
  <i class="fa fa-twitter w3-hover-opacity"></i>
  <i class="fa fa-linkedin w3-hover-opacity"></i>
  <p class="w3-medium">Powered by <a href="https://www.w3schools.com/w3css/default.asp" target="_blank">w3.css</a></p>
</footer>

<script>
// Script to open and close sidebar
// Automatic Slideshow - change image every 4 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000);    
}

// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
  var x = document.getElementById("navDemo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else { 
    x.className = x.className.replace(" w3-show", "");
  }
}

// When the user clicks anywhere outside of the modal, close it
var modal = document.getElementById('ticketModal');
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
function myFunctionReadMore() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("Readmorebutton");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>

</body>
</html>
