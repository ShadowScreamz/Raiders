<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="styles.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://kit.fontawesome.com/8f7b167549.js" crossorigin="anonymous"></script>
    <title>About Us</title>
<!-- logout button code -->
<script>
     function logOut() {
        var retVal = confirm("Are you sure you'd like to log out?");
        if( retVal == true ) {
          window.location=("raiders.php"); 
           return true;
        } 
        else {
         //stays on the same page
           return false;
        }
     } 
</script>
<style>
  #button {
        /*controls logout button on navigation bar*/
        float: right;
        overflow: hidden;
        position: relative;
        top: 2px;
        left:650px;
        }
</style>
</head>
<body>
<div class="nav">
<table>
            <tr>
                <td><img src="images/logoo.png" height="50px"></td>
                <td><a href="bookingreq.php"><i class="fas fa-home"></i>Home</a></td>
                <td><a href="clients.php"><i class="fas fa-user"></i> Clients</a></td>
                <td><a href="booking.php"><i class="fas fa-address-book"></i> Bookings</a></td>
                <td><form action="search.php" method="post">
                <i class="fas fa-search"></i>
                <input type="search" name="txtSearch">
                <input type="submit" name="submit" value="Go">
                </form>
                <td><div>                 
                <form action = "post" class = "Logout">
                <input type="submit" name="submit" value="Logout" onclick="logOut();">
                 </form>
                </div></td>
            </tr>
        </table>
</div>
    <br>
<div class="about-section">
  <h1>About Us </h1>
  <p>Some text about who we are and what we do.</p>
</div>

<h2 style="text-align:center">Our Team</h2>

<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Minali Harjivan Chouhan</h2>
        <p class="title">Team member</p>
        <p>Information system 3 student</p>
        <p>mercilove.j.xerinda@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
<div class="row">
  <div class="column">
    <div class="card">
      <div class="container">
        <h2>Mercilove Xerinda</h2>
        <p class="title">Team member</p>
        <p>Information system 3 student</p>
        <p>mercilove.j.xerinda@gmail.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="/w3images/team2.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>batista</h2>
        <p class="title">Art Director</p>
        <p>type here</p>
        <p>kknnnm@njhb.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
  <div class="column">
    <div class="card">
      <img src="/w3images/team3.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>22555</h2>
        <p class="title">Designer</p>
        <p>type here</p>
        <p>bhh@hhghgh.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
</div>



 <!-- general footer code  -->
 <div class="footer"> 
  <nav>
    <table>
        <tr>
            <td><a href="aboutus.php">About Us</a></td>
            <td><a href="#######">FAQs</a></td>
            <td><a href="#######">Legal</a></td>
            <td><a href="#######">Terms & Conditions</a></td>
        </tr>
    </table>
  </nav>
</div>


</body>
</html>