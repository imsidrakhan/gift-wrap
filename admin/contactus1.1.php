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
    <?php include('header.php');   ?>

    <div class="parallex"></div>
    <div class="row">
        <div class="container col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6" id="section4">
            <br><br><br>
            <h1>Contact Us</h1>
            <br>
            <form action="post">

                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname" placeholder="Your name..">
                <label for="email">Email </label>
                <input type="text" id="lname" name="lastname" placeholder="enter email">
                <label for="phone number"> Phone Number </label>
                <input type="text" id="lname" name="lastname" placeholder="enter mob number">

                <label for="country">Country</label>
                <select id="country" name="country">
                    <option value="lahore">Lahore</option>
                    <option value="islamabad">islamabad</option>
                    <option value="peshawar">peshawar</option>
                </select>
                <label for="message">Message</label>
                <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                <input type="submit" value="Submit">

            </form>
        </div>
        <div class="container col-xs-12">

        </div>

        <br><br><br><br><br><br><br><br><br>
        <br><br><br>
        <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3405.8484843430438!2d74.23880001450057!3d31.390741081412656!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391901e6e30bb94b%3A0x7facd7c9c099672b!2sUniversity%20Of%20Lahore!5e0!3m2!1sen!2s!4v1571928613345!5m2!1sen!2s" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe></p>
        <?php include('footer.php');   ?>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
</body>

</html>