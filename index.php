<!DOCTYPE html>
<html lang="en">
  <head>
  	<title>Autonomous vehicles</title>
  	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://kit.fontawesome.com/95ae6c8f7a.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
  </head>
<body>
	<header>
		<div id="logo">DRIVERLESS</div>
		<div class="social">
			<a href="facebook.com"><img src="media/facebook.png"></a>
			<a href="google.com"><img src="media/google.png"></a>
			<a href="twitter.com"><img src="media/twitter.png"></a>
			<a href="instagram.com"><img src="media/instagram.png"></a>
		</div>
		<div class="inner-width">
        <div class="menu">
        <i class="fas fa-bars menu-toggle-btn" alt="menu"></i>
        </div>
        <div class="navigation-menu">
		  <a href="login.php">Login</a>
		  <a href="signup.php">Sign up</a>
        </div>
      </div>
	</header>
	<div class="intro">
   <h2><!-- Display the countdown timer in an element -->
    <p id="demo"></p>
  </h2> 
  <p>COUNTDOWN TO THE NEXT RELEASE OF OUR LATEST PRODUCTS</p>
  </div>
  <h3>OUR SERVICES</h3>
  <div class="options">
    <div class="opt-1">
      <i class="fas fa-car"></i>
      <p class="hdd">CARS</p>
      <p>Our autonomous vehicles are the best in the world. Strong and efficient.</p>
    </div>
    <div class="opt-2">
      <i class="fas fa-user-secret"></i>
      <p class="hdd">ARTIFICIAL INTELLIGENCE</p>
      <p>Our artificial intelligence gives the best service in the autonomous vehicle industry.</p>
    </div>
    <div class="opt-3">
      <i class="fas fa-tools"></i>
      <p class="hdd">REPAIRS</p>
      <p>Our staff are always ready to solve all your vehicle problems effectively.</p>
    </div>
    <div class="opt-4">
      <i class="fas fa-database"></i>
      <p class="hdd">DATA</p>
      <p>Our services are good a storing data and keeping all your data safe with no future problems.</p>
    </div>
  </div>
  <div class="rdd">
  <h3>OUR PRODUCTS</h3>
  <div class="grid-container">
    <img src="media/grid1.jpg" alt="grid-item">
    <img src="media/grid2.jpg" alt="grid-item">
    <img src="media/grid3.jpg" alt="grid-item">
    <img src="media/grid4.jpg" alt="grid-item">
    <img src="media/grid5.jpg" alt="grid-item">
    <img src="media/grid6.jpg" alt="grid-item">
    <img src="media/grid7.jpg" alt="grid-item">
    <img src="media/grid8.jpg" alt="grid-item">
  </div>
  </div>
  <h3>ABOUT US</h3>
  <div class="abt">
    <div class="abt-1">
      <p>Here at Driverless we pride ourselves as group of engineers who are of the best quality in the world. Our seasoned and well experienced engineers will help you to choose the best autonomous vehicles for our customers</p>
      <p>Our custom AI Mona has been of great help to us on our journey to bring you the best experience as possible when it comes to autonomous vehicles. These vehicles are matched using an algorithm that will get you the best possible option available to you in your income range.</p>
      <p>The latest and most exciting thing going on in our company is the launch of our new 2021 product line. these are autonomous vehicles powered by the best AI available to make your driving experirnce more enjoyable and without any extra cost.</p>

    </div>
    <div class="abt-2">
      <video src="media/vddd.mp4" autoplay="autoplay" muted="muted" loop="loop" controls="controls"></video>
    </div>
  </div>
  <footer>
    <div id="logo">DRIVERLESS</div>
    <div class="copyright">Copyright© Autonomous Vehicles, 2020</div>
    <form action="index.php">
      <h4>Contact Us</h4>
      <input type="email" name="email" placeholder="Enter your email">
      <input type="text" name="subject" placeholder="Enter a subject">
      <textarea name="message" placeholder="Enter your message"></textarea>
      <input type="radio" name="newsletter">&nbsp; Subscribe to our newsletter
      <button type="button" name="submit" id="myBtn">Submit</button>
    </form>
  </footer>
   <div id="myModal" class="modal">
  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
    <h3>FAQ</h3>
    <p>Can I register for more than one account? <span>You can but we don't know why you would.</span></p>
    <p>Can i buy vehicles online? <span>No you cannot do that. We advise against it so you don't fall prey to fraudsters.</span></p>
    <p>Is the site legit? <span>Yes we are hundred percent legitimate.</span></p>
    <p>Still curious? <a href="mailto:driverless@mail.com">Contact Us</a></p> 
  </div>
</div>
</body>
</html>
<script type="text/javascript">
      $(".menu-toggle-btn").click(function(){
        $(this).toggleClass("fa-times");
        $(".navigation-menu").toggleClass("active");
      });
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("Jun 25, 2021 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "EXPIRED";
  }
}, 1000);
</script>
<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
</script>
