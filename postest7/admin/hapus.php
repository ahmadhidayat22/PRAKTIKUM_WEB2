<?php
session_start();
require "../server.php";


if ($_SESSION['admin']== false){

    header('Location:../login.php');

}

$id = $_GET["id"];

$result = mysqli_query($conn, "delete from tiket where id = '$id'");


if ($result) {
    echo "
    <script>
    // alert('Data Berhasil Dihapus!');
    document.location.href = 'kelolatiket.php';
    </script>
    ";
} else {
    echo "
    <script>
    // alert('Data Gagal Dihapus!');
    document.location.href = 'kelolatiket.php';
</script>
";
}
?>