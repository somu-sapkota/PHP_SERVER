<?php
  //establishing the connection of php to database named hungry_hippo
  $conn= mysqli_connect("localhost","root","@s*Omu12", "hungry_hippo");

  //rendering all the table named foods contents to the php server
  $query= "SELECT * FROM foods order by createdAt Desc";
  $result=mysqli_query($conn,$query);
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);  
  $p1=$_GET['param1'];
  $p2= $_GET['param2'];
  $p3=$_GET['param'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editing</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style2.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
     integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>


<body>
    
   
    <div class="container">
    <form action="./editing2.php" method="GET">


    <a href="./index.php"><i class="fa fa-home" style="width: 40px; height: 40px; line-height: 40px; font-size: 40px; display: inline-block; text-align: center;"></i></a></button>
    <h7><b> Go Back to home </b></h7>
   

    <h5 ><b>Wanna edit something on <?= "ID:"." ".$p3?>??</b></h5>

    <input type="hidden" name="id" value="<?= $p3?>">
    
    <label for="Price">Price of the product in $:</label>
    <input type=" " id="price" name="price" placeholder="<?= "previous price :".$p1."$"?>" required>

    <label for="Expiry Date">Expiry Date:</label>
    <input type="Date" id="Date" name="expiryDate" required>

    <button type="submit">EDIT</button>
    </form>
    </div>

</body>
</html>