<?php
session_start();

require 'server.php';

$name = $_SESSION['username'];

$result = mysqli_query($conn, "SELECT * FROM user_account WHERE username='$name'");


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="./css/styleHome.css?v=1.1">
    <link rel="shortcut icon" href="./assets/plane.png">

    <title>user page</title>


           <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  -->

           <!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  -->

           <!-- <style>

           .container{

                width: 700px !important;

                text-align: center;

           }

           .file_drag_area  { 

                width:600px; 

                padding: 20px;

                border:2px dashed #ccc;  

                text-align:center; 

                font-size:24px; 

           } 

           .file_drag_over{ 

                color:#000; 

                border-color:#000; 

           } 

           </style>  -->
</head>

<body>
    
<!-- <h3>Drag Dan Drop File Menggunakan Jquery Ajax dan PHP</h3> 

<div class="file_drag_area"> 

     Drop File Disini 

</div>

<div id="show"></div>  -->

</div>  

    <div class="container">
        <?php if ($row = mysqli_fetch_assoc($result)): ?>

            <div class="content">
                <h3>hi, <span>user</span></h3>
                <h1>welcome <span>
                        <?= $row["username"];
                        ?>
                    </span></h1>
                <p>this is an user page</p>

                <p>coming soon!</p>
                <a href="./profiles.php" class="btn">Profiles</a>

                <a href="./index.html" class="btn" name="logout">logout</a>

            </div>
        <?php endif ?>
    </div>

<!-- <script>
       $(document).ready(function(){ 

$('.file_drag_area').on('dragover', function(){ 

     $(this).addClass('file_drag_over'); 

     return false; 

}); 

$('.file_drag_area').on('dragleave', function(){ 

     $(this).removeClass('file_drag_over'); 

     return false; 

}); 

$('.file_drag_area').on('drop', function(e){ 

     e.preventDefault(); 

     $(this).removeClass('file_drag_over'); 

     var formData = new FormData(); 

     var files_list = e.originalEvent.dataTransfer.files; 

     for(var i=0; i<files_list.length; i++) 

     { 

          formData.append('file[]', files_list[i]); 

     }  

     $.ajax({ 

          url:"upload.php", 

          method:"POST", 

          data:formData, 

          contentType:false, 

          cache: false, 

          processData: false, 

          success:function(data){ 

            //    $('#show').html(data); 

          } 

     }) 

}); 

});
 
</script> -->




</body>

</html>