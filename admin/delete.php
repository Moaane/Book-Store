<?php 

require_once 'connect.php';

$id = $_GET['id'];
$queryDelete = "DELETE FROM book WHERE id='$id'";

if($connect->query($queryDelete)){
    echo "<script> 
    alert('Sukses');
    window.location.href='index.php'; 
    </script>";
}

?>