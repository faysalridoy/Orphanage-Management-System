!<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Orphanage Management System</title>
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
  <section id="manage">
    <div class="a" style="margin: 0 100px;">
        <center><h2 style="margin: 70px;" "color:black;">Orphan List</h2></center>
        <center><h2><b>Orphan List</b></h2></center>
        <br><br>
        <table class="table table-striped table-dark text-center" >
          <tr>
              <th>Orphan ID</th>
              <th>Orphan Name</th>
              <th>Orphan Age</th>
              <th>Orphan Date of birth</th>
              <th>Orphan Gender</th>
              <th>Orphan Date of Joining</th>
              <th>Orphan Contact</th>
              <th>Orphan Address</th>
              <th>Action</th>
          </tr>
          <?php
          $conn = mysqli_connect("localhost","root","","orp");
          $query = "SELECT * FROM orphan";
          $result=mysqli_query($conn,$query);

          while($data=mysqli_fetch_assoc($result)){
              ?>
              <tr>
                  <td><?php echo $data['orphanid']?></td>
                  <td><?php echo $data['orphanname']?></td>
                  <td><?php echo $data['orphanAge']?></td>
                  <td><?php echo $data['dob']?></td>
                  <td><?php echo $data['sex']?></td>
                  <td><?php echo $data['doj']?></td>
                  <td><?php echo $data['contact']?></td>
                  <td><?php echo $data['address']?></td>
                  <td><button class="btn btn-success"><a onclick="return confirm('Are you sure you want to Adopt?')"; href="?adopt-id=<?php echo $data['orphanid']?>">Request Adoption</button></a></td>
              </tr>
          <?php
          }
          ?>
        </table>
      </div>
  </section>
</body>
</html>
<?php
$conn = mysqli_connect("localhost","root","","orp");
 $id1=0;
 $id2=0;

$adopt_id=$_GET['adopt-id']??'';
if(isset($adopt_id)){
    $query2 = "SELECT * FROM orphan WHERE orphanid='{$adopt_id}'";
   $res=mysqli_query($conn,$query2);

     while($data1=mysqli_fetch_assoc($res)){
      $id1=$data1['orphanid']; 
      $id2=$data1['orphanname']; 
  	}
echo '<center><b><div style="font-size:3.25em;color:green">Request adoption for orphan whose Orphan ID= '.$id1;'</div></b></center>';
echo '<center><b><div style="font-size:0.9em;color:green">and Orphan Name= '.$id2;'</div></b></center>';
    
 }
