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
				<label for="donarName">Donar Name:</label>
					<input type="text" name="donarName" id="donarName">
			</div>
			<br>
			<div class="formrow">
				<label for="donarAge">Donar Age:</label>
					<input type="text" name="donarAge" id="donarAge">
			</div>
			<br>
			<div class="formrow">
				<label for="dob">Dob:</label>
					<input type="date" name="dob" id="dob">
			</div>
			<br>
			<div class="sex">
				<label for="sex">Sex: </label>
					<input type="radio" name="sex" id="sex">Male<input type="radio" name="sex" id="sex">Female
			</div>
			<br>
      <div class="formrow">
        <label for="occupation">Occupation:</label>
          <textarea cols="33" rows="5" name="occupation" id="occupation"></textarea>
      </div>
      <br>
			<div class="formrow">
				<label for="annualIncome">Annual Income:</label>
          <select name = "dropdown" size="1">
                <option value="Less than 10,000">Less than 10,000</option>
                <option value="10,000-30,000">10,000-30,000</option>
                <option value="30,000-60,000">30,000-60,000</option>
                <option value="More than 60,000">More than 60,000</option>
              </select><br>
			</div>
			<br>
      <div class="formrow">
        <label for="donateAmount">Donate Amount:</label>
          <input type="text" name="donateAmount" id="donateAmount">
      </div>
      <br>
			<div class="formrow">
				<label for="contactInfo">Contact Info:</label>
					<input type="text" name="contactInfo" id="contactInfo">
			</div>
			<br>
			<div class="formrow">
				<label for="address">Address:</label>
					<textarea cols="33" rows="5" name="address" id="address"></textarea>
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
   if(!empty($_POST['donarId'])&&($_POST['donarName'])&&($_POST['donarAge'])&&($_POST['dob'])&&($_POST['sex'])&&($_POST['occupation'])&&($_POST['dropdown'])&&($_POST['donateAmount'])&&($_POST['contactInfo'])&&($_POST['address'])){
   
   

        $dntid=$_POST['donarId'];
        $dntname=$_POST['donarName'];
        $dntage=$_POST['donarAge'];
        $dob=$_POST['dob'];
        $sex=$_POST['sex'];
        $occupation=$_POST['occupation'];
        $anlincome=$_POST['dropdown'];
        $dntamount=$_POST['donateAmount'];
        $cntinfo=$_POST['contactInfo'];
        $dntaddress=$_POST['address'];

    $conn = mysqli_connect("localhost","root","","orp");

        $query1= " INSERT INTO donation (donarId,donarName, donarAge,dob,sex,occupation,annualIncome,donateAmount,contactInfo,address) VALUES ('$dntid','$dntname','$dntage','$dob','$sex','$occupation','$anlincome','$dntamount','$cntinfo','$dntaddress')";

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