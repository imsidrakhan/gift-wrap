<?php
@require("update-product.php");
if(isset($_POST['Update']))
{
    var_dump($_POST);
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $code = $_POST['code'];
    $stock = $_POST['stock'];
    $discount = $_POST['discount'];
    $size = $_POST['size'];
    $detail = $_POST['details'];
    $oldpicture=$_POST['oldfile'];
    $updatedpicture = $_FILES['updatedpic']["name"];
    var_dump('oldpicture');
    if($_FILES['updatedpic']['size'] != 0) 
    {
        move_uploaded_file($_FILES["updatedpic"]["tmp_name"], "../projectpicture/productImage/" . $updatedpicture);
        $imgName = $_FILES["updatedpic"]["name"];
    }
    else 
    {
        $imgName = $oldpicture;
    }
    if ($_POST) {
        $sql = "UPDATE tblproducts SET 
                                    `productName`='$name', 
                                    `productPrice`=$price, 
                                    `productCode`='$code', 
                                    `productInStock`='$stock', 
                                    `productDiscount`=$discount, 
                                    `productSize`='$size', 
                                    `productDetail`='$detail',
                                    `productImage`='$imgName' 
                WHERE  `productId`=$id";
        if (mysqli_query($db, $sql)) {
            echo " record updated successfully";
           header("location:view-products.php?i=1.php");
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}

include 'AdminFooter.php' ;

?>