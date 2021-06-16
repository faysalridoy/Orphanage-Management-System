<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Orphanage Management System</title>
  
  <link rel="stylesheet" href="style.css">
  <style>
  *{
    margin: 0;
    padding: 0;
  }
  #userhero{
    height: 120%;
    width: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/donation.png);
    background-position: center;
    background-size: cover;
    position: absolute;
    z-index: -1;
  }
  .form-box{
    width: 800px;
    height: 655px;
    position: relative;
    margin: 6% auto;
    background: #9ea832;
    padding: 5px;
    z-index: 1;
  }
  h1{
    padding-top:5px;
  }
  .button button {
  	background-color: #b3e6ff;
  	width: 60px;
    height:20px;
  	border:3px solid white;
 	color: black;
  	padding:0px;
  	text-align: center;
 	text-decoration: none;
  	font-size: 13px;
  	cursor: pointer;
  	border-radius: 5px;
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
  
  <section id="userhero">
    <div class="form-box">
      <center><h1><font size="4px" color="black">Add Donation</h1></center>
        <br>
        <form name="form2" Method="POST" Action= "">
			<div class="formrow">
				<label for="donarId">Donar Id:</label>
					<input type="text" name="donarId" id="donarId">
			</div>
			<br>
      <div class="formrow">
        <label for="donateAmount">Donate Amount:</label>
          <input type="text" name="donateAmount" id="donateAmount">
      </div>
			<br>
			<div class="button">
        <label for="create">Donate: </label>
          <button type="submit" class= submit-btn name="submit">Donate</button> 
      </div>
    </form>
	</div>
  </section>
</body>
</html>
<?php

mysqli_connect('localhost', 'root', '', 'orp');

  if(isset($_POST['submit'])){
   if(!empty($_POST['donarId'])&&($_POST['donateAmount'])){
   
        $dntid=$_POST['donarId'];
        $dntamount=$_POST['donateAmount'];
        $sum=0;
        $temp=0;
    $conn = mysqli_connect("localhost","root","","orp");
    $q1="SELECT * FROM donation WHERE donarid='{$dntid}'";
    $res=mysqli_query($conn, $q1);
    while($data1=mysqli_fetch_assoc($res)){
      $temp=$data1['donateAmount']; 
    }
    $sum= $dntamount + $temp;
   


        $query1= " UPDATE donation SET donarid='{$dntid}',donateAmount='{$sum}' WHERE donarid='{$dntid}' ";

        if(mysqli_query($conn, $query1)){
            echo '<b><div style="font-size:1.25em;color:aqua;padding-top:62px;padding-left:450px">Your data have been saved successfully,Donation added.</div></b>';
        }else{
            echo"Something is wrong with query";
        }
  }else{
    echo '<b><div style="font-size:1.25em;color:red;padding-top:62px;padding-left:600px">*Please fill out all information</div></b>';

    }
   
}

?>
