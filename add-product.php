<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add products</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</head>


<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" style="width:40rem ; height :3.7rem;">
    <!-- this shit div brings more problem i dont like -->
    <!-- <div class="container-fluid">
        <a class="navbar-brand" href="#"><h5>Navbar</h5></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button> -->
        <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" href="./index.php"><h5>Home</h5></a>
        </li>
        <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><h5>Add_Product</h5></a>
        </li>
        </ul>
    </nav>
     
    
    <div class="container">
    <form action="./add-product2.php" method="GET">
    <label for="Product Name">Product Name:</label>
    <input type=" " id="name" name="name" placeholder="Enter the product name" required>
     
    <label for="Category">Category:</label>
    <select id="category" name="category" required>
        <option value="Fruit">Fruit</option>
        <option value="Vegetable">Vegetable</option>
        <option value="Fast Food">Fast Food</option>
        <option value="Beverage">Beverage</option>
        <option value="Italian">Italian</option>
        <option value="Dairy">Dairy</option>
    </select>

    <label for="NutritionInfo">Nutrition Info:</label>
    <input type=" " id="name" name="nutritionInfo" placeholder="Enter the Calories:,Carbs(g):,Fat(g):" required>

    <label for="Price">Price of the product in $:</label>
    <input type=" " id="price" name="price" placeholder="Enter the price in Dollar" required>

    <label for="Expiry Date">Expiry Date:</label>
    <input type="Date" id="Date" name="expiryDate" placeholder="Expiry Date" required>

    <label for="ingredients">Ingredients:</label>
    <input type=" " id="ingredients" name="ingredients" placeholder="Enter the ingredients" required>

    <label for="Recommendation"> Recommendation for kids</label>
    <input type="number" id="recommendedForKid" name="recommendedForKid" placeholder="is it recommended for kids?"
        required>

    <label for="Image">Image:</label>
    <input type=" " id="image" name="imageURL" placeholder=" Enter the image url"
        required>

    <button type="submit">INSERT</button>
    </form>
    </div>

    <!-- sirle initially sikaunu bhako hehe tara nahataune hehe -->
    <!-- <form action="./post-product.php">
        <input placeholder="Enter expiry date"  class="outline-secondary"  type="date" />
        <input placeholder=" Enter the Product Name" class="outline-secondary" name="name"/>
        <input placeholder="Enter image URL" name="imageURL"/>
        <button type="submit" class="btn btn-primary" >Submit</button>
      
    </form> -->

</body>
</html>