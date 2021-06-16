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
		height: 100%;
		width: 100%;
		background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/userlogin.png);
		background-position: center;
		background-size: cover;
		position: absolute;
		z-index: -1;

	}
	.form-box{
		width: 380px;
		height: 480px;
		position: relative;
		margin: 6% auto;
		background: #fff;
		padding: 5px;
		z-index: 1;
		overflow: hidden;

	}
	.button-box{
		width: 300px;
		height:30px;
		margin: 35px auto;
		position: relative;
		box-shadow: 0 0 20px 9px #ff61241f;
		border-radius: 30px;
	}
	.social-icons{
		margin: 30px auto;
		text-align: center;
	}
	.social-icons img{
		width: 30px;
		margin: 0 12px;
		box-shadow: 0 0 20px 0 #7f7f7f3d;
		cursor: pointer;
		border-radius: 50%;
	}
	.input-group{
		top: 180px;
		position: absolute;
		width: 280px;
		transition: .5s;
	}
	.input-field{
		width: 100%;
		padding: 10px 0;
		margin: 5px 0;
		border-top: 0;
		border-left: 0;
		border-right: 0;
		border-bottom: 1px solid #999;
		outline: none;
		background: transparent;
	}
	.submit-btn{
		width: 85%;
		padding: 10px 30px;
		cursor: pointer;
		display: block;
		margin: auto;
		background: linear-gradient(to right, #ff105f, #ffad06); 
		border: 0;
		outline: none;
		border-radius: 30px;
	}
	.check-box{
		margin: 30px 0px 30px 0px ;
	}

	
</style>
</head>
<?php
include "header.php";
?>
<body>
	<section id="userhero">
    	<div class="form-box">
    		<div class="button-box">
    			<center><h1>User Registration Form</h1></center>
    		<div class="social-icons">
    			<img src="https://img.icons8.com/color/48/4a90e2/facebook.png"/>
    			<img src="https://img.icons8.com/color/48/4a90e2/instagram-new--v1.png"/>
    			<img src="https://img.icons8.com/color/48/4a90e2/twitter-squared.png"/>
    			<form id="register" class="input-group" name="form" Method="POST" Action= "">
    				<input type="text" class="input-field" name="userid" placeholder="User Id" required>
    				<input type="email" class="input-field" name="email" placeholder="Email Id" required>
    				<input type="password" class="input-field" name="password" placeholder="Enter Password" required>
    				<input type="checkbox" class="check-box" name="checkbox"><span>Agree terms</span>
    				<button type="submit" class= submit-btn name="submit_sign">Register</button>	
    			</form>
    	</div>
    	</div>
	</section>

</body>
</html>

<?php

mysqli_connect('localhost', 'root', '', 'orp');

if(isset($_POST['submit_sign'])){
    if(!empty($_POST['userid']) && ($_POST['email']) && ($_POST['password'])){
        $userid=$_POST['userid'];
         $email=$_POST['email'];
        $password=$_POST['password'];

        $conn = mysqli_connect("localhost","root","","orp");
        $query1= "INSERT INTO user (userid,email, password) VALUES ('$userid','$email','$password')";

        if(mysqli_query($conn, $query1)){
            echo '<b><div style="font-size:1.25em;color:green;padding-top:250px;padding-left:650px">Registration successful!</div></b>';
        }else{
            echo"Something is wrong with query";
        }
    }else{
        echo '<b><div style="font-size:1.25em;color:red;padding-top:250px;padding-left:650px">*Please fill out all the fields.</div></b>';
    }
}
