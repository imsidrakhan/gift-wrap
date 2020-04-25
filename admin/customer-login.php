<html>

<head>
    <link rel="stylesheet" href="LogIncss.css">
</head>

<body>
    <?php include('../html/header.php'); ?>
    <form action="welcome.php" method="POST">
        <br><br><br><br>
        <div class="imgcontainer">
            <img src="../Pictures/adminimg.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>

            <label for="pwd"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="pwd" required>

            <button type="submit" name="submit">Login</button>
           <br><br>
            <a href="customer-signup.php" >Click for New registration </a>
        </div>

        <div class="container" style="background-color:#f1f1f1; text-align:center;">
            <button type="button" style="  width: auto;padding: 10px 18px;background-color: #f44336; margin:0% 45%;">Cancel</button>
        </div>
    </form>
    <br><br><br>
    <?php include('../html/footer.php'); ?>
</body>

</html>