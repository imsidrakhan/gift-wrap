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
    @require("../admin/connection.php");
    if (isset($_POST['review'])) {
        $id = $_POST['id'];
        $name = $_POST['Rname'];
        $email = $_POST['Rmail'];
        $msg = $_POST['Rmessage'];
        var_dump($_POST);
    ?><br><br><br><br><br><br><br><br><br><br><br><br>
    <?php
        var_dump($_POST);
        $sql = "INSERT into customer set custname= '$name', custemail= '$email' ";
        if (mysqli_query($db, $sql)) {
            $last_id = mysqli_insert_id($db);
            var_dump($last_id);
            if (mysqli_query($db, $last_id)) {
                $sql1 = "insert into review set message='$msg' where custid= '$last_id' and prodid='$id'";
                var_dump($sql1);
                if (mysqli_query($db, $sql1)) {
                    echo "message entered";
                } else {
                    echo "Error: " . $sql1 . "<br>" . mysqli_error($db);
                }
            } else {
                echo "Error: " . $last_id . "<br>" . mysqli_error($db);
            }
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    } else {
        echo "<br><br>";
        var_dump($_POST);
    }
    ?>