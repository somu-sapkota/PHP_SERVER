 <?php
  //establishing the connection of php to database named hungry_hippo
  $conn= mysqli_connect("localhost","root","@s*Omu12", "hungry_hippo");

  //rendering all the table named foods contents to the php server
  $query= "SELECT * FROM foods";
  $result=mysqli_query($conn,$query);
  $rows=mysqli_fetch_all($result,MYSQLI_ASSOC);  

  $currentPage = basename($_SERVER['PHP_SELF'], ".php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Server Side</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</head>

<body class="container">

  <!-- navbar contents -->
  <nav class="navbar navbar-expand-lg bg-body-tertiary" style="width:40rem ; height :3.8rem;">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" aria-current="page" href="#"><h5>Home</h5></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="./add-product.php"><h5>Add_Product</h5></a>
      </li>
    </ul>
  </nav>

   <table class="table table-secondary table-hover">
 
    <thead>

      <tr>
        <th scope="col" class="table-dark">ID_NO</th>
        <th scope="col" class="table-dark">Image</th>
        <th scope="col" class="table-dark">Name</th>
        <th scope="col" class="table-dark">Price</th>
        <th scope="col" class="table-dark">Categories</th>
        <th scope="col" class="table-dark">Ingredients</th>
        <th scope="col" class="table-dark">NutritionInfo</th>
        <th scope="col" class="table-dark">ExpiryDate</th>
        <th scope="col" class="table-dark">RecommendedForKids</th>
        <th scope="col" class="table-dark"></th>
        <th scope="col" class="table-dark"></th>
      </tr>
    </thead>

    <tbody>

      <?php foreach($rows as $data):?> 
        <tr>
          <td><h6><?= $data["id"]?></h6></td>
          <td><img src="<?= $data["imageURL"]?>" class="card-img-top"  style="width: 14.9rem ; height :10rem;"></td>
          <td><h6><?= $data["name"]?></h6></td>
          <td><h6><?= "NRP"." ".$data["price"]*134.29?></h6></td>
          <td><h6><?= $data["category"]?></h6></td>                  
          <td><h6><?= $data["ingredients"]?></h6></td>
          <td><h6><?= $data["nutritionInfo"]?></h6></td>
          <td><h6><?= $data["expiryDate"]?></h6></td>
          <td> <?php  if($data ["recommendedForKid"]==1):?>
            <span class="badge rounded-pill text-bg-secondary" style="width: 50px ; height :23px;"> 
            <p>  <h8>YES</h8> </p> </span>
            <?php  else:?>
            <span class="badge rounded-pill text-bg-secondary" style="width: 50px ; height :23px;"> 
            <p>  <h8>NO</h8> </p> </span>
            <?php endif; ?>
          </td>
          <td><button type="button" class="btn btn-outline-primary">
          <a href="./editing.php?param=<?= $data['id']?>&param1=<?= $data['price']?>&param2=<?= $data['expiryDate']?>" style="text-decoration: none;">Edit</a></button></td>

          <td><button onclick="callAlert(event, <?= $data['id'] ?>)" type="button"style="text-decoration: none;" class="btn btn-outline-primary"> Delete
          </button></td>
        </tr>
      <?php endforeach?>       
    </tbody>                                         
  </table>
  <script>
    function callAlert(event, id)
    {
      event.preventDefault(); 
     if (confirm("Do you really want to delete this item?"))
      {
        window.location.href = "./delete.php?param=" + id;
      }
      else 
      {
        console.log("Deletion cancel.");
      }
    }   
  </script> 
</body>
</html>