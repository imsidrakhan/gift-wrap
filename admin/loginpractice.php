<html>
<body>

<form method="POST" >
UserName: <input type="text" name="user">
Password:  <input type="password" name="pw">

<input type="submit" name="login" value="Log in">

</form>
 <?php
session_start();



$db=mysqli_connect('localhost', 'root','','giftwrap');
if(isset($_POST['login'])){
    $user = $_POST['user'];
    $pass = $_POST['pw'];
if($user!=""&& $pass!="")
{
    $query="SELECT count(*) as user FROM tbluser WHERE username='".$user."' and userpassword='".$pass."'";
    $request = mysqli_query($db , $query);
    $row = mysqli_fetch_assoc($request);

    $count = $row['user'];
    if($count > 0){
        $_SESSION['username'] = $user;
        header("location: add-product.php");
    }
    else{
        echo "wrong attemp";
    }
}
}

?>
</body>
</html>