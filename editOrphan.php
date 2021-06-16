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
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/orphan.png);
    background-position: center;
    background-size: cover;
    position: absolute;
    z-index: -1;
  }
  .form-box{
    width: 800px;
    height: 650px;
    position: relative;
    margin: 6% auto;
    background: #9933ff;
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
      <center><h1><font size="4px" color="black">Create Orphan</h1></center>
        <br>
        
 
       <?php 


    
    $conn = mysqli_connect("localhost","root","","orp");
$id=$_GET['edit_id'];
$query="SELECT * FROM orphan WHERE orphanid='{$id}'";
$result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result) > 0 ){
        while($data1=mysqli_fetch_assoc($result)){
        ?>
        
        <form name="form2" Method="POST" Action= "">
            <div class="formrow">
                <label for="orphanId">Orphan Id:</label>
                    <input type="text" name="orphanId" id="orphanId" placeholder="<?php echo $data1['orphanid']?>"><?php echo" "?> <?php echo $data1['orphanid']?></div>
            <br>
            <div class="formrow">
                <label for="orphanName">Orphan Name:</label>
                    <input type="text" name="orphanName" id="orphanName" placeholder="<?php echo $data1['orphanname']?>"><?php echo" "?> <?php echo $data1['orphanname']?>
            </div>
            <br>
            <div class="formrow">
                <label for="orphanAge">Orphan Age:</label>
                    <input type="text" name="orphanAge" id="orphanAge" placeholder="<?php echo $data1['orphanAge']?>"><?php echo" "?>  <?php echo $data1['orphanAge']?>           </div>
            <br>
            <div class="formrow">
                <label for="dob">Dob:</label>
                    <input type="Date" name="dob" id="dob"><?php echo" "?>  <?php echo $data1['dob']?>     </div>
            <br>
            <div class="sex">
                <label for="sex">Sex: </label>
                    <input type="radio" name="sex" id="sex" value="male">   Male   
                    <input type="radio" name="sex" id="sex" value="female">     Female
                          <?php echo" "?> <?php echo $data1['sex']?>
                          </div>
            <br>
            <div class="formrow">
                <label for="dateofJoining">Date of Joining:</label>
                    <input type="Date" name="dateofJoining" id="dateofJoining"><?php echo" "?>  <?php echo $data1['doj']?>     </div>
            <br>
            <div class="formrow">
                <label for="contactInfo">Contact Info:</label>
                    <input type="text" name="contactInfo" id="contactInfo" placeholder="<?php echo $data1['contact']?>"><?php echo" "?>  <?php echo $data1['contact']?>         </div>
            <br>
            <div class="formrow">
                <label for="address">Address:</label>
                    <textarea cols="33" rows="5" name="address" id="address" placeholder="<?php echo $data1['address']?>"></textarea>
                            <?php echo" "?>  <?php echo $data1['address']?>
                              </div>
            <br>
            <div class="button">
                <label for="create">Create: </label>
                    <button type="submit" class= submit-btn name="submit">Update</button>   
            </div>
            
        </form>

        <?php
        }
    }else{
        echo '<b><div style="font-size:1.25em;color:red;padding-top:62px;padding-left:600px">*Please fill out all information</div></b>';
    }

    ?> 
            
    </div>
  </section>
</body>
</html>



<?php

$conn = mysqli_connect("localhost","root","","orp");
$id=$_GET['edit_id'];
$query="SELECT * FROM orphan WHERE orphanid='{$id}'";
$result=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($result);


if(isset($_POST['submit'])){
        $orpid=$_POST['orphanId'];
        $orpname=$_POST['orphanName'];
        $orpage=$_POST['orphanAge'];
        $dob=$_POST['dob'];
        $sex=$_POST['sex'];
        $doj=$_POST['dateofJoining'];
        $orpcontact=$_POST['contactInfo'];
        $orpaddress=$_POST['address'];

    $query = "UPDATE orphan SET orphanid='{$orpid}',orphanname='{$orpname}',orphanAge='{$orpage}',dob='{$dob}',sex='{$sex}',doj='{$doj}',contact='{$orpcontact}',address='{$orpaddress}' WHERE orphanid='{$data['orphanid']}' ";
    if(mysqli_query($conn,$query)){
        header("Location: adminprofile.php");
    }
}

?>
