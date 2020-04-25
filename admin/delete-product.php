  <?php
    @require("connection.php");

if (isset($_POST['Delete']))            //DELETE SPECIFIC RECORD
{
   // echo "hello";

    $rec = $_POST['Delete'];
    $sql = "DELETE FROM tblproducts WHERE productId= $rec";

    if (mysqli_query($db, $sql) === TRUE) {

        header("Location: view-products.php?i=1");
        exit;
    } else {
        echo "Error deleting record: " . mysqli_error($db);
    }
}


    ?>