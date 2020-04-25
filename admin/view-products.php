<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>view-product</title>
    <style>
        table,
        td,
        tr {
            border: 1px solid gray;
            border-collapse: collapse;

        }
    </style>
</head>

<body style=" 
  font-family: cursive;">
    <?php

    if (isset($_GET['i'])) {
        include 'AdminHeader.php';
        @require("connection.php");
        ?>

        <h1>View Products</h1>
        <table style="width: 100%">
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Code</th>
            <th>Stock</th>
            <th>Discount</th>
            <th>Size</th>
            <th>Detail</th>
            <th>Picture</th>
            <th>Delete</th>
            <th>Edit</th>

            <?php
                $sql = "SELECT * FROM tblproducts";
                $result = mysqli_query($db, $sql);
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        ?>
                    <tr>
                        <td><?php echo $row["productId"] ?></td>
                        <td><?php echo $row["productName"] ?></td>
                        <td><?php echo $row["productPrice"] ?> </td>
                        <td><?php echo $row["productCode"] ?></td>
                        <td><?php echo $row["productInStock"] ?> </td>
                        <td><?php echo $row["productDiscount"] ?> </td>
                        <td><?php echo $row["productSize"] ?> </td>
                        <td><?php echo $row["productDetail"] ?> </td>
                        <td><img src="<?php echo "../projectpicture/productImage/" . $row["productImage"] ?>" width="100px" height="100px"> </td>
                        <TD>
                            <form action=<?php echo "delete-product.php" ?> method="post">
                                <input type="hidden" name="Delete" value="<?php echo $row["productId"]; ?>" />
                                <button type="submit" value="Delete">Delete</button>
                            </form>
                        </td>
                        <td>
                            <form action=<?php echo "update-process.php" ?> method="post">
                                <input type="hidden" name="update" value="<?php echo $row["productId"]; ?>" />
                                <button type="submit" value="update">Update</button>
                            </form>
                        </td>


                    </tr>
        <?php
                }
            }
        }
        include 'AdminFooter.php';
        ?>
        </table>
</body>

</html>