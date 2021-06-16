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
        <center><h2 style="margin: 70px;" "color:black;">User list</h2></center>
        <center><h2>User list</h2></center>
        <br><br>
        <table class="table table-striped table-dark text-center" >
          <tr>
              <th>User ID</th>
              <th>User Name</th>
              <th>User Age</th>
              <th>User Date of birth</th>
              <th>User Gender</th>
              <th>User Date of Joining</th>
              <th>User Occupation</th>
              <th>User Annual Income</th>
              <th>User Contact Info</th>
              <th>Address</th>
              <th>Action</th>
            
          </tr>
          <?php
          $conn = mysqli_connect("localhost","root","","orp");
          $query = "SELECT * FROM donation";
          $result=mysqli_query($conn,$query);

          while($data=mysqli_fetch_assoc($result)){
              ?>
              <tr>
                  <td><?php echo $data['donarId']?></td>
                  <td><?php echo $data['donarName']?></td>
                  <td><?php echo $data['donarAge']?></td>
                  <td><?php echo $data['dob']?></td>
                  <td><?php echo $data['sex']?></td>
                  <td><?php echo $data['occupation']?></td>
                  <td><?php echo $data['annualIncome']?></td>
                  <td><?php echo $data['donateAmount']?></td>
                  <td><?php echo $data['contactInfo']?></td>
                  <td><?php echo $data['address']?></td>
                  <td><button class="btn btn-success"><a onclick="return confirm('Are you sure you want to Delete?')"; href="?delete-id=<?php echo $data['donarId']?>">Delete</button></a></td>
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
$delete_id=$_GET['delete-id']??'';
if(isset($delete_id)){
    $delete_query = "DELETE  FROM donation WHERE donarId='{$delete_id}'";
    mysqli_query($conn,$delete_query);
}
?>