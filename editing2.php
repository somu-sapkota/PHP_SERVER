<?php
$price = $_GET["price"];
$expiryDate= $_GET["expiryDate"];
$id=$_GET["id"];
$conn=mysqli_connect("localhost","root","@s*Omu12","hungry_hippo");
$sql="UPDATE foods set price='$price',expiryDate='$expiryDate' WHERE id='$id'";
$result=mysqli_query($conn,$sql);

if(!$result)
 {
    die("oops something went wrong!");
 }
 else
 {
 header("Location:./index.php");
 }
?>