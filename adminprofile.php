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
    background-image: linear-gradient(rgba(0,0,0,0.4),rgba(0,0,0,0.4)),url(./img/adminprofile.png);
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
    background: #28ada2;
    padding: 5px;
    z-index: 1;
  }
  h1{
    padding-top: 45px;
  }
  .form-box ul li a{
    padding:5px;
    font-weight: bold;
    margin: 2px;
  }
  .form-box ul li a:hover {
  
  color: solid blue;
  background-color: crimson;
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
      <center><h1><font size="5px" color="green">Welcome Admin</h1></center>
        <br><br>
        <ul>
            <li><a href="createOrphan.php" data-after="Create Orphan">Create Orphan</a></li>
            <br>
            <li><a href="manageOrphan.php" data-after="Manage Orphan">Manage Orphan</a></li>
            <br>
            <li><a href="manageUser.php" data-after="Manage User">Manage User</a></li>
            </ul>
    </div>
  </section>
</body>
</html>
