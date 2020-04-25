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
    $sql = "SELECT productId, productName , productImage FROM tblproduct ";
    $result = mysqli_query($db, $sql);
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $imag = $row['productImage'];
            $imgName = "../pictures/productImages/" . $imag;
    ?>


            <div class="container " style="">
                <div class="row">
                    <div class="col-sm-4 col-lg-4 col-md-4 text-center">
                        <figure class="figure">
                            <a href="product1.php?pID=<?php echo $row['productId'] ?>" target="_blank"><img src="<?php echo $imgName ?>" height=80% width=80% class="img-fluid img-thumbnail"></a>
                            <figcaption class="figure-caption text-center"><a href="product1.php?pID=<?php echo $row['productId'] ?>"> <br>
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

            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="product3.html"><img src="../pictures/children/3.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="responsiveImgCode.html#C3">
                            <h5>Just For Me Placement<h5>
                        </a></figcaption>
                </figure>
            </div>


            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="responsiveImgCode.html#C4"><img src="../pictures/children/4.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="responsiveImgCode.html#C4">
                            <h5>Flip & Sip® Water Bottle<h5>
                        </a></figcaption>
                </figure>
            </div>


            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="responsiveImgCode.html#C5"><img src="../pictures/children/5.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="responsiveImgCode.html#C5">
                            <h5>Baby's Five-Star Plush Robe<h5>
                        </a></figcaption>
                </figure>
            </div>

            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="responsiveImgCode.html#C6"><img src="../pictures/children/6.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="responsiveImgCode.html#C6">
                            <h5>Melissa & Doug® Turtle Ball Pit<h5>
                        </a></figcaption>
                </figure>
            </div>


            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="#"><img src="../pictures/children/7.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="#">
                            <h5>Legendary Friends Plush Dragon<h5>
                        </a></figcaption>
                </figure>
            </div>


            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="#"><img src="../pictures/children/8.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="#">
                            <h5>Big Name Beach Towel<h5>
                        </a></figcaption>
                </figure>
            </div>

            <div class="col-sm-4 text-center">
                <figure class="figure">
                    <a href="#"><img src="../pictures/children/9.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="#">
                            <h5>Bitty Bites Good Lunch® Boxes<h5>
                        </a></figcaption>
                </figure>
                <br>
            </div>

            <br>
            <br>
            <h3><u>
                    <center><br><br>For Men's<br></center><u>
                        <h3><br>
                            <div class="container">
                                <div class="row">
                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/1.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>Monogram Wooden Watch<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>

                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/2.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h6>Ready2Go Leather Tech Organizer<h6>
                                                </a></figcaption>
                                        </figure>
                                    </div>

                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/3.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h6>Hidden Message Sunglass Travel Case<h6>
                                                </a></figcaption>
                                        </figure>
                                    </div>


                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/4.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>The Modern Mans Telescope<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>


                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/5.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>Personalized Wooden Watch Case<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>

                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/6.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>Men's Five-Star Plush Robe<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>


                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/7.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h6>Men’s Classic Vintage Birthday T-Shirt<h6>
                                                </a></figcaption>
                                        </figure>
                                    </div>


                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/8.jpeg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>Dot Silk Tie<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>

                                    <div class="col-sm-4 text-center">
                                        <figure class="figure">
                                            <a href="#"><img src="../pictures/men/9.png" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                            <figcaption class="figure-caption text-center"><a href="#">
                                                    <h5>Mormont Logo Leather Belt<h5>
                                                </a></figcaption>
                                        </figure>
                                    </div>





                                    <br>
                                    <br>
                                    <h3><u>
                                            <center><br><br>For Women's<br></center><u>
                                                <h3><br>
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/1.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h6>To The Moon and Back Birthstone Necklace
                                                                                <h6>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>

                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/1.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h5>Open Heart Birthstone Cuff<h5>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>

                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/3.jpeg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h5>Matte Revolution Lipstick<h5>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>


                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/4.webp" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h5>Modern Bag – Blush<h5>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>


                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/5.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h5>Daydream Cat Satchel<h5>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>

                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/6.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h6>Harry Potter Dobby the House-Elf Watch
                                                                                <h6>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>


                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/7.png" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h6>Girls yellow check faux fur collar
                                                                                jacket
                                                                                <h6>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>


                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/8.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h6>Women Blue Slim Fit Mid-Rise Clean Look
                                                                                Stretchable <h6>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>

                                                            <div class="col-sm-4 text-center">
                                                                <figure class="figure">
                                                                    <a href="#"><img src="../pictures/women/9.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                                                                    <figcaption class="figure-caption text-center"><a href="#">
                                                                            <h5>Euphoria Perfume By Calvin Klein<h5>
                                                                        </a></figcaption>
                                                                </figure>
                                                            </div>
                                                        </div>
                                                    </div>
                                </div>
--->
</body>

</html>