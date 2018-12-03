<?php
include 'conn.php';

$id = $_GET['id'];
$sql = "CALL `delete`($id)";
$result=mysqli_query($conn,$sql);
if($result){
    header("location:cusemp.html");
}
?>
