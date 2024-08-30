<?php
$id=$_GET["param"];
$conn=mysqli_connect("localhost","root","@s*Omu12","hungry_hippo");
$sql="Delete from foods WHERE id='$id'";
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