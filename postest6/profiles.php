<?php


session_start();
require 'server.php';
$name = $_SESSION['username'];
$result = mysqli_query($conn, "SELECT * FROM user_account WHERE username='$name'");

// var_dump($result);
$date = date('Y-m-d');
if( isset($_POST["edit"])){
    $gambar = $_FILES['gambar']['name'];
    $explode = explode('.',$gambar);
    $ekstensi = strtolower(end($explode));
    $gambar_baru = "$date.$name.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];
    if ( move_uploaded_file($tmp,'img/' . $gambar_baru) ){

        $hasil = mysqli_query($conn, "update user_account set picture = '$gambar_baru' where username = '$name'");
    
        if ($hasil) {
            echo "
                    <script>
                    // alert('Data Berhasil Ditambahkan!');
                    
                    document.location.href = 'profiles.php';
                    
                    </script>
                ";
        } else {
            echo "
                <script>
                // alert('Data Gagal Ditambahkan!');
                // document.location.href = 'profiles.php';
                </script>
            ";
        }

    }
}




?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleProfiles.css?v=1.2">
    <link rel="shortcut icon" href="./assets/plane.png">
    <script src="jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Profile</title>


</head>

<body>

    <?php while ($row = mysqli_fetch_assoc($result)): ?>
        <nav>
            <div id="profil">
                <li><img src="./img/<?=$row['picture'] ?>" alt=""></li>
                <li>
                    <?= $row['username'] ?>
                </li>
            </div>
        </nav>

        <div class='edit-foto' id="edit">

            <div class='edit-top'>
                <div class='crop'>
                    <img src="./img/<?=$row['picture'] ?>" alt="ini gambar" > </img>
                </div>
                <p>
                    <?= $row['username'] ?>
                </p>

            </div>
            <div class='edit-bottom'>

                <button type="submit" name="change" id="test" onclick="togglePopup()">Change Image</button>
                <a href="delete-pic.php?id=<?=$row['id'] ?>">
                    delete image

                </a>
            </div>
            
        </div>

        <div class="popup-change">
            <div class="wrapper">
                <form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="gambar" >
    
                <button type="submit" name="edit">submit</button>
                </form>


            </div>
            
            <img src="./assets/plus.png" alt="" onclick="togglePopup()">
        </div>
        <span class="user_hero">
            <a href="home.php">
                <img src="./assets/next.png" alt="">
            </a>

        </span>
       

        <div class="aside">

            <div class="head"><img src="./assets/account.png" alt="">
                <h2>
                    <?= $row['username'] ?>
                </h2>
            </div>


            <ul>
                <li><span>
                        <img src="./assets/saved.png" alt="">
                        <a href="">Saved</a>
                    </span></li>

                <li><span>
                        <img src="./assets/wallet.png" alt="">
                        <a href="">Bills</a>
                    </span></li>

                <li>
                    <span>
                        <img src="./assets/shopping-bag.png" alt="">
                        <a href="">My Booking</a>
                    </span>

                </li>

                <li><span>
                        <img src="./assets/settings.png" alt="">
                        <a href="">Setting</a>
                    </span></li>

                <li><span>
                        <img src="./assets/shutdown.png" alt="">
                        <a href="index.php">Logout</a>
                    </span></li>
            </ul>
        </div>

        <section>
            <div class="top">
                <h3>Personal Data</h3>
            </div>
            <div class="isi">
                <p>Full Name</p>
                <div>
                    <?php echo $row['fullname']; ?>
                </div>

            </div>
            <div class="isi">
                <p>Email</p>
                <div>
                    <?php echo $row['email']; ?>
                </div>

            </div>
            <div class="isi">
                <p>Phone Number</p>
                <div>
                    <?php echo $row['no_hp']; ?>
                </div>

            </div>
            <div class="isi">
                <p>Password</p>
                <div>
                    <?php echo $row['password']; ?>
                </div>

            </div>

        </section>
    <?php endwhile ?>
    <div class="container"> 



    <script>
        function togglePopup() {
            $(".popup-change").toggle();
        }

      
        $('#profil').click(function () {
            // alert('Please');
           
            if ($('#edit').css('display') == 'none') {
                $('#edit').css('display', 'block');
            } else {
                $('#edit').css('display', 'none')
            }

        });
        
    
     
    </script>



</body>

</html>