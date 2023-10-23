<?php

require "server.php";

$id = $_GET["id"];

$result = mysqli_query($conn, "update user_account set picture='no-image.jpg' where id = '$id'");


if ($result) {
    echo "
    <script>
    // alert('Data Berhasil Dihapus!');
    document.location.href = 'profiles.php';
    </script>
    ";
} else {
    echo "
    <script>
    // alert('Data Gagal Dihapus!');
    document.location.href = 'profiles.php';
</script>
";
}

?>