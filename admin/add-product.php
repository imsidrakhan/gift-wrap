<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>add-product</title>
</head>

<body style=" 
  font-family: cursive;">
    <?php
    if (isset($_GET['i'])) {
        @require("connection.php");
        include 'AdminHeader.php';  
       // include '../html/productform/add-product-form.html';

        ?>
        <div class="container-fluid" style="border:2px solid gray; margin:2% 30%; padding:2% 9%; text-align:center;">
        <h1>Product Detail Page</h1>
        <form action="add-process.php" method="post"  enctype="multipart/form-data" required>
            ID:<input type="number" name="id"><br><br>
            Name:<input type="text" name="name"><br><br>
            Price:<input type="number" name="price"><br><br>
            Code:<input type="text" name="code"><br><br>
            Stock:<input type="radio" name="stock" id="yes">Yes
            <input type="radio" name="stock" id="no">NO<br><br>
            Discount:<input type="number" name="discount" id="discount"><br><br>
            Size:<input type="text" name="size"><br><br>
            Details:<textarea name="details" col="20" rows="5" wrap="virtual"></textarea><br><br>
            Picture:<input type="file" name="picture" value="picture"><br><br>
            <input type="submit" name="addproduct" value="Add Product">

        </form>
        <br><br><br><br><br>
    </div>
    <?php
        // var_dump($_POST);
    }
    include 'AdminFooter.php';
    ?>
</body>

</html>