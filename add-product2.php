<?php
 //  echo "working??";
 //  echo "<br>";


 $name = $_GET['name'];
 $category = $_GET["category"];
 $nutritionInfo= $_GET["nutritionInfo"];
 $price = $_GET["price"];
 $expiryDate= $_GET["expiryDate"];
 $ingredients = $_GET["ingredients"];
 $recommendedForKid= $_GET["recommendedForKid"];
 $imageURL =$_GET["imageURL"];


 $conn=mysqli_connect("localhost","root","@s*Omu12","hungry_hippo");

 //manually adding the data into the sql server 
 //$date=date("Y-m-d");
 // $sql="INSERT INTO foods(name,expiryDate) VALUES ('$daalbhaat','$date')";
 
 $sql="INSERT INTO foods (name,category,nutritionInfo,price,expiryDate,ingredients,recommendedForKid,imageURL) VALUES ('$name','$category','$nutritionInfo','$price','$expiryDate','$ingredients','$recommendedForKid','$imageURL')";
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