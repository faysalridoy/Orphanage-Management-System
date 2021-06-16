<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphanage Management System</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  #manage{
    height: 120%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/donation.png);
    background-position: center;
    background-size: cover;
    position: absolute;
    z-index: -1;
  }
 
</style> 
</head>

<body>
  <!-- Header -->
  <section id="header">
    <div class="header container">
      <div class="nav-bar">
        <div class="brand">
          <a href="#hero">
            <h1><span>O</span>RPHANAGE <span>S</span>YSTEM</h1>
          </a>
        </div>
        <div class="nav-list">
          <div class="hamburger">
            <div class="bar"></div>
          </div>
          <ul>
            <li><a href="home.php" data-after="Home">Home</a></li>
            <li><a href="home.php" data-after="Services">Services</a></li>
            <li><a href="home.php" data-after="Adaption Details">Adaption Details</a></li>
            <li><a href="home.php" data-after="About">About</a></li>
            <li><a href="home.php" data-after="Contact">Contact</a></li>
            <li><a href="logout.php" data-after="logout">Log Out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- End Header -->
  
</body>
</html>
<section id="manage">
    <div class="a" style="margin: 0 50px;">
        <center><h2 style="margin: 70px;" "color:black;">View Donation</h2></center>
        <center><h1><b>View Donation</b></h1></center>
        <br><br>
        <table class="table table-striped table-dark text-center" >
          <tr>
              <th>Donation ID</th>
              <th>Donation Amount</th>
              
            
          </tr>
          <?php
          $conn = mysqli_connect("localhost","root","","orp");
          $query = "SELECT * FROM donation";
          $result=mysqli_query($conn,$query);

          while($data=mysqli_fetch_assoc($result)){
              ?>
              <tr>
                  <td><?php echo $data['donarId']?></td>
                  <td><?php echo $data['donateAmount']?></td>
              </tr>
                  
          
                  
          <?php

          }
          ?>
          <center><a class="btn btn-success" onclick="return confirm('Are you sure you want to donate again?')";  href="againDonate.php?edit_id=<?php echo $data['donarId']?>">Please Click Here If You Want To Donate More!</a></center>
              
        </table>
      </div>
  </section>
</body>
</html>
