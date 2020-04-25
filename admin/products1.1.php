<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="..\cssfile\homeCSS.css">
    <title>Document</title>
</head>

<body>
    <?php
    include('header.php');
    @require("../admin/connection.php");
    ?>

    <div class="parallax"> <br><br><br><br><br><br>
        <div class="text-center" id="section3">
            <br><br><br>
            <h1 style="color:azure"><u>Our Products<u> </h1>
        </div>
        <br>
    </div>
    <!--Products-->
    <?php
    $sql = "SELECT productId, productName , productImage FROM tblproducts ";
    $result = mysqli_query($db, $sql);
    if (!$result) {
        trigger_error('Invalid query: ' . $conn->error);}
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imag = $row['productImage'];
            $imgName = "../projectpicture/productImage/" . $imag;
          
            ?>
            <div class="container">
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4 text-center">
                        <figure class="figure">
                            <a href="product1.php?pID=<?php echo $row['productId'] ?>" target="_blank">
                                <img src="<?php echo $imgName ?>" height=80% width=80% class="img-fluid img-thumbnail">
                            </a>
                            <figcaption class="figure-caption text-center"><a href="product1.php">
                                    <h5><?php echo $row['productName'] ?><h5>
                                </a></figcaption>
                        </figure>
                    </div>
                            <?php
                            }
                            }
                            ?>
                            <!--<div class="text-center">
        <h3><u>For Childrens<u> </h3>
    </div><br>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="product1.php" target="_blank"><img src="../pictures/children/1.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="product1.php">
                            <h5>Pajama Bear<h5>
                        </a></figcaption>
                </figure>
            </div>

            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="product2.php"><img src="../pictures/children/2.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="product2.php">
                            <h5>Take Along Chair<h5>
                        </a></figcaption>
                </figure>
            </div>
--->
</body>

</html>