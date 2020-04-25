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
    ?>

    <div class="parallax">
        <br><br><br> <br><br><br> <br><br><br>
        <h1 style="color:azure;text-align:center;">Welcome to GiftWrap!!</h1>
        <h3 style="color:azure;text-align:center;">Find Everything here..!!!</h3>
    </div>
    <br>

    <h2 style="text-align:center;">Recently added</h2>
    <br><br><br>
    <div class=" container">
        <div class="row">
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
                    <a href="#"><img src="../pictures/children/9.jpg" height=80% width=80% class="img-fluid img-thumbnail"></a>
                    <figcaption class="figure-caption text-center"><a href="#">
                            <h5>Bitty Bites Good Lunch® Boxes<h5>
                        </a></figcaption>
                </figure>
                <br>
            </div>
        </div>

    </div>

    <?php
    include('footer.php');
    ?>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>