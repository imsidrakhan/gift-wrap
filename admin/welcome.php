<?php
session_start();

if(isset($_POST['submit']))
{

    $val=$_POST['submit'];
    $_SESSION['user_name']= $_POST['uname'];
    $_SESSION['uPassword'] = $_POST['pwd'];
    $vname=$_SESSION['user_name'];
    $vPassword=$_SESSION['uPassword'];

    $connection=mysqli_connect("localhost","root","","giftwrap");


    $result=mysqli_query($connection,"SELECT * FROM tblusers WHERE username='$vname' AND userpassword='$vPassword'");

    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    
    if($row["username"] == $_SESSION['user_name'] && $row["userpassword"] == $_SESSION['uPassword'] )
    {
        
        header("Location: Admin.php?i=1");
    }
    
    else
    {
       ?> 
        <html>
        <script>
        
        var txt;
        var r = confirm("UserName or Password is Incorrect");
            if (r == true)
            {
                window.location = "LogIn.php";
            }
             else 
             {
                window.location = "LogIn.php";
             }   

        </script>
        </html>
        <?php 
        
    }


}

else
{
    ?> 
        <html>
        <script>
            window.location = "LogIn.php";
        </script>
        </html>
        <?php 
        
}


?>