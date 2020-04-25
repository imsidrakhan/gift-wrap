<?php
@require("connection.php");
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $email = $_POST['email'];
    $pw = $_POST['psw'];
    $addres=$_POST['address'];
    $phone=$_POST['phone'];
    
}