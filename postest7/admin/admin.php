<?php
session_start();
require '../server.php';


if ($_SESSION['admin']== false){
  header('Location:../login.php');

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="./assets/plane.png">
  <link rel="stylesheet" href="admin.css">
  <link rel="stylesheet" type="text/css" href="admin.css?v=1.1">



  <title>Admin</title>

  <style>
        div ul li:nth-child(1){
  border-left: 8px solid #266f85;

}
    </style>

</head>

<body>
  <nav>
    <ul>
      <li><img src="../assets/account.png" alt=""></li>
      <li>admin</li>
    </ul>
  </nav>



  <label class="hamburger-menu">
    <input type="checkbox" />
  </label>
  <aside class="sidebar">
    <div>
      <ul>
        <li><img src="../assets/speedometer.png" alt="" width="25px">
          <a href="admin.php">Dashboard</a>
        </li>
        <li><img src="../assets/shopping-cart.png" alt="">
          <a href="pesanan.php">Pesanan</a>
        </li>
        <li><img src="../assets/account.png" alt="">
          <a href="akun.php">akun user</a>
        </li>
        <li><img src="../assets/ticket.png" alt=""> <a href="kelolatiket.php">kelola tiket</a></li>

        <li class="bott"><img src="../assets/power.png" alt=""><a href="../index.php">Logout</a> </li>
      </ul>
    </div>

  </aside>



  <div class="wrapper">
    <div class="top-wrapper">
      <h3>Dashboard</h3>
    </div>
    <div class="mid-wrapper">
      <div class="user-count">
        <div class="user-top">

          <?php $result = mysqli_query($conn, "SELECT *, COUNT(*) AS numrows FROM user_account where id !='1'");
                $row = mysqli_fetch_array($result);
                echo "
                <div class='content'>
                  <h2>" . $row['numrows'] . "</h2>
                  <p>Number of User</p>
  
                </div>
                
                ";
          ?>
          
  
          <div class="icon">
            <img src="../assets/group.png" alt="">
          </div>
        </div>
        <div class="user-bottom">
          <div class="keterangan">
              <p>More info</p>
              <img src="../assets/arrow-right.png" alt="" width="20px">
          </div>

        </div>
      </div>

      <div class="user-count">
        <div class="user-top">

          <?php $result = mysqli_query($conn, "SELECT *, COUNT(*) AS numrows FROM tiket");
                $row = mysqli_fetch_array($result);
                echo "
                <div class='content'>
                  <h2>" . $row['numrows'] . "</h2>
                  <p>Number of Ticket</p>
  
                </div>
                
                ";
          ?>
          
  
          <div class="icon">
            <img src="../assets/barcode.png" alt="">
          </div>
        </div>
        <div class="user-bottom">
          <div class="keterangan keterangan2">
              <p>More info</p>
              <img src="../assets/arrow-right.png" alt="" width="20px">
          </div>

        </div>
      </div>
    </div>
  </div>




  <!-- <h1>Welcome Admin</h1> -->


</body>

</html>