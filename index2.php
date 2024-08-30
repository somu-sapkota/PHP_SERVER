<?php
  //establishing the connection of php to database named hungry_hippo
  $conn= mysqli_connect("localhost","root","@s*Omu12", "hungry_hippo");

  //rendering all the table named foods contents to the php server
  $query= "SELECT * FROM foods order by createdAt Desc";
  $result=mysqli_query($conn,$query);
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);  
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hungry Hippo | Roshan Shrestha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">

  <!-- navbar contents -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="width:60rem ; height :4rem;">
    <!-- <div class="container-fluid">
    <a class="navbar-brand" href="#"><h5>Navbar</h5></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button> -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"><h5>Home</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./add-product.php"><h5>Add_Product</h5></a>
      </li>
    </ul>
  </nav>

  <!-- fetching each row's data from the database -->
  <?php foreach($rows as $data):?> 
    
    
    <div class="card" style="width: 15rem ; height :26.4rem;">

     <!-- rendering the image from the database and setting its h&w -->
     <img src="<?= $data["imageURL"]?>" class="card-img-top"  style="width: 14.9rem ; height :10rem;" >

      <!-- providing the name category and price for each image -->
      <div class="card-body" >
        <p class="card-text"> 
          <h6><?= "Name:"." ".$data["name"]?></h6>
          <h6><?= "Category:"." ".$data["category"]?></h6>
          <h6><?=  $data["nutritionInfo"]?></h6>      
          <h6><?=  "Price:"." "."NRP"." ".$data["price"]*134.29?></h6> 
        </p>  

        <!-- buttons for deleting and editing -->
        <button type="button" class="btn btn-outline-info">Edit</button>
        <button type="button" class="btn btn-outline-info">Delete</button>
      
        <!-- categorizing if it is recommended for kids or not  -->
        <?php  if($data ["recommendedForKid"]==1):?>
        <span class="badge rounded-pill text-bg-secondary" style="width: 150px ; height :23px;"> 
        <p>  <h8>Recommended for kids</h8> </p> </span>
        <?php endif; ?>        
      </div>

    </div>
  <?php endforeach?>
    
</body>
</html>