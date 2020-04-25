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
</head>

<body>
    <?php
    include('header.php');
    @require("connection.php");
    if (isset($_GET['pID'])) {
        $id = $_GET['pID'];
        $sql = "SELECT * FROM tblproducts WHERE productId=$id";
        $result = mysqli_query($db, $sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $imag = $row['productImage'];
                $imgName = "../projectpicture/productImage/" . $imag;
    ?>
                <div class="parallax">
                    <!--1st C img-->
                    <br><br><br><br>
                    <div class="container" style="color:azure" id="C1">
                        <div class="row">
                            <div class="col-sm-12 col-lg-6 col-md-6 col-xs-12 text-center">
                                <img src=<?php echo $imgName; ?> class=" description img-thumbnail" height="80%" width="80%">
                            </div>
                            <div class="col-sm-4 col-lg-6 col-md-6 col-xs-12" style="margin-top: 6%;">
                                <h1><?php echo $row['productName']; ?></h1>

                                <br>
                                <p><?php echo $row['productDetail']; ?></p>
                                <span style="color:burlywood ; font-size :25px;">PKR:<?php echo $row['productPrice']; ?></span>

                                <div class="container">
                                    <form action="customer-login.php" method="post">
                                        <div class="form-group">
                                            <label for="sel1">Size list (select one):</label>
                                            <select class="form-control col-xs-2" style="width:40%;" placeholder="--Size--" id="sel1">
                                                <option>Extra small</option>
                                                <option>Small</option>
                                                <option>Medium</option>
                                                <option>Large</option>
                                                <option>Extra Large</option>
                                            </select>
                                        </div>

                                        <label for="Quantity" class="col-xs-2">Quantity:</label><br>
                                        <input type="number" class="form-control col-xs-2 input-sm" placeholder="No. of items" style="width: 40%; " id="quantity" name="quantity">
                                        <br>
                                        <input type="submit" class="btn btn-success form-control col-xs-2" id="oreder" name="order" value="Order Now">
                                    </form>


                                </div>
                                <br>
                            </div>
                            <div class="container form-group">
                                <h3>Reviews</h3>
                                <form action="review.php" method="post" enctype="multipart/form-data"  required>
                                    <input type="hidden" name="id" value="<?php echo $id ?>">
                                    <label for="name" class="col-xs-6">Name</label><br>
                                    <input type="text" class="form-control col-xs-2 input-sm" placeholder="--Name--" style="width: 40%; " id="Rname" name="Rname">
                                    <label for="email" class="col-xs-6">Email</label><br>
                                    <input type="email" class="form-control col-xs-2 input-sm" placeholder="--Email--" style="width: 40%; " id="Rmail" name="Rmail"><br>
                                    <label for="email" class="col-xs-6">Message</label><br>
                                    <textarea class="form-control col-xs-2 input-lg" style="width: 40%; " id="Rmail" col="30" row="6" name="Rmessage"> </textarea>
                                    <input type="submit" class="btn btn-success btn-sm form-control col-xs-2" id="review" name="review" value="Review">

                                    <br>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
    <?php
                include('footer.php');
            }
        }
    }
    ?>

    <!--<p>This tired teddy is all ready to snuggle up with your little one and listen to a bedtime story.
                        <ul>
                            <li> Made of 100% polyester.</li>
                            <li>Spot clean.</li>
                            <li>with any name up to 10 characters.</li>
                            <li>Measures 12"H.</li>
                            <li>Available in pink and blue.</li>
                            <li>Item #30228659</li>
                        </ul>---->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>