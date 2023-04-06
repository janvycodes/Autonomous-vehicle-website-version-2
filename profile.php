<?php
session_start();
require 'configure.php';
if (strlen($_SESSION['user_id']==0)) {
  header('location:login.php');
  } 

  $password = "";

if (isset($_POST['submit']))  {
  $conn = mysqli_connect('localhost', 'root', '', 'auto');

  $password = mysqli_real_escape_string($conn, $_POST['password']);
  $user_id=$_SESSION['user_id'];

  if ($conn) {
    $phash = password_hash($password, PASSWORD_DEFAULT);
      $SQL = $conn->prepare("UPDATE login set password='$phash' WHERE user_id='$user_id'");
      $SQL->execute();
      $_SESSION['error'] = "Password update successful";
    }else {
    $_SESSION['error'] = "Password update error";
  }
  }
?>
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
    <div class="navigation-menu">
    <a href="homepage.php"><i class="fas fa-home"></i>&nbsp;Home</a>
        </div>
		<div class="desc">
        <div class="dropdown">
      <?php
$user_id=$_SESSION['user_id'];
$sql= "select username from login where user_id='$user_id'";
$query = $conn->query($sql);
if($query->num_rows > 0){
$row = $query->fetch_assoc();
$name=$row['username'];
            }
echo $name; ?>
      &nbsp;&nbsp;<i class="fas fa-caret-down dropbtn" onclick="myFunction()"></i>
      <div id="myDropdown" class="dropdown-content">
        <a href="profile.php">Profile</a>
        <a href="logout.php">Logout</a>
      </div>
      </div>
    </div>
	</header>
	<div class="profile">
   <div class="ppp">
    <?php
$user_id=$_SESSION['user_id'];
$sql= "select * from login where user_id='$user_id'";
$query = $conn->query($sql);
if($query->num_rows > 0){
$row = $query->fetch_assoc();
$fullname=$row['fullname'];
$username=$row['username'];
$email=$row['email'];
$dob=$row['dob'];
$postcode=$row['postcode'];
$address=$row['address'];
            }
?>
     <div class="pf-1">
       <h4>MY PROFILE</h4>
       <table>
         <tr>
           <td id="pfn">Fullname:</td>
           <td><?php echo $fullname;?></td>
         </tr>
         <tr>
           <td id="pfn">Username:</td>
           <td><?php echo $username;?></td>
         </tr>
         <tr>
           <td id="pfn">Email:</td>
           <td><?php echo $email;?></td>
         </tr>
         <tr>
           <td id="pfn">Date of birth:</td>
           <td><?php echo $dob;?></td>
         </tr>
         <tr>
           <td id="pfn">Postcode</td>
           <td><?php echo $postcode;?></td>
         </tr>
         <tr>
           <td id="pfn">Address</td>
           <td><?php echo $address;?></td>
         </tr>
       </table>
       <a href="update.php">EDIT PROFILE</a>
     </div>
     <div class="pf-2">
       <h4>CHANGE PASSWORD</h4>
       <?php
        if(isset($_SESSION['error'])){
          ?>
          <div class="alert">
            <?php echo $_SESSION['error']; ?>
          </div>
          <?php
          unset($_SESSION['error']);
          }
          ?>
       <form method="post" action="profile.php">
        <input type="password" name="password" placeholder="password" required>
        <input type="submit" name="submit" value="Change profile">
      </form>
     </div>
   </div> 
  </div>
  <footer>
    <div id="logo">DRIVERLESS</div>
    <div class="yhhh">
    	<div class="soc">
			<a href="facebook.com"><img src="media/facebook.png"></a>
			<a href="google.com"><img src="media/google.png"></a>
			<a href="twitter.com"><img src="media/twitter.png"></a>
			<a href="instagram.com"><img src="media/instagram.png"></a>
		</div>
    	<div class="copyright">Copyright© Autonomous Vehicles, 2020</div>
    </div>
    <form action="index.php">
      <h4>Contact Us</h4>
      <input type="email" name="email" placeholder="Enter your email">
      <input type="text" name="subject" placeholder="Enter a subject">
      <textarea name="message" placeholder="Enter your message"></textarea>
      <input type="submit" name="submit" value="send message">
    </form>
  </footer>

</body>
</html>
<script>
function myFunction() {
  document.getElementById("myDropdown").classList.toggle("show");
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropbtn')) {
    var dropdowns = document.getElementsByClassName("dropdown-content");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
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
