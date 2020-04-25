<?php
@require("connection.php");
if (isset($_POST['addproduct'])) {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $code = $_POST['code'];
    $stock = $_POST['stock'];
    $discount = $_POST['discount'];
    $size = $_POST['size'];
    $detail = $_POST['details'];

    $picture = $_FILES['picture']["name"];
    if ($picture != "") {
        move_uploaded_file($_FILES['picture']['tmp_name'], "../projectpicture/productImage/" . $picture);
    }

    //('productId',	'productName',	'productPrice',	'productCode',	'productInStock',	'productDiscount',	'productSize',	'productDetail', 'productImage') 
    //  values(".$id.",'".$name."','.$price.','.$code.','".$stock."','.$discount.','".$size."','".$detail."','".$picture."')";
    if ($_POST) {
        $sql = "INSERT INTO tblproducts SET productId=$id,
                                    productName='$name', 
                                    productPrice='$price', 
                                    productCode='$code', 
                                    productInStock='$stock', 
                                    productDiscount='$discount', 
                                    productSize='$size', 
                                    productDetail='$detail',
                                    productImage='$picture' ";
        if (mysqli_query($db, $sql)) {
            header("add-product.php");
            ?>
            <script>
                var r = confirm("Recond Entered Successfully. Click OK for Admin Page ");
                if (r == true) {
                    window.location="Admin.php?i=1";
                } else {
                    window.location="add-product.php?i=1";
                }
            </script>
<?php

        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    }
}
?>