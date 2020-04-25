  <?php
    @require("connection.php");
    include 'AdminHeader.php';
    if (isset($_POST['update'])) {
        $inStockYes = $inStockNo = "unchecked";
        var_dump($_POST);
        $id = $_POST['update'];
        $sql = "SELECT `productName`,`productPrice`, `productCode`, `productInStock`, `productDiscount`,`productSize`, `productDetail`, `productImage` FROM tblproducts WHERE productID=$id";
        $result = mysqli_query($db, $sql);
        if (!mysqli_query($db, $sql)) {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        } else {

            if ($result->num_rows > 0) {
                $row = $result->fetch_assoc();
                if ($row['productInStock'] == 'yes') {
                    $inStockYes = 'checked';
                } else
                    $inStockNo = 'checked';
            }
            $imag = "";
            if (isset($row['productImage'])) {
                $imag = $row['productImage'];
            }
            $imgName = "../projectpicture/productImage/" . $imag;
            var_dump($row);
            ?>
          <div class="container-fluid" style="border:2px solid gray; margin:2% 30%; padding:2% 9%; text-align:center;">
              <h1>Product Detail Updation</h1>
              <form action="update-process.php" method="post" enctype="multipart/form-data" required>
                <h3>  ID:<?php echo $id; ?><input type="hidden" name="id" value="<?php echo $id; ?>"><br><br>  
            Code:<?php echo $row['productCode']?> </h3>
                  Name:<input type="text" name="name" value="<?php echo $row['productName']; ?>"><br><br>
                  Price:<input type="number" name="price" value="<?php echo $row['productPrice']; ?>"><br><br>
                  Code:<input type="hidden" name="code" value="<?php echo $row['productCode']; ?>"><br><br>
                  Stock:<input type="radio" name="stock" <?php echo $inStockYes; ?> value="yes">Yes
                  <input type="radio" name="stock" <?php echo $inStockNo; ?> id="no" value="no">No<br><br>
                  Discount:<input type="number" name="discount" id="discount" value="<?php echo $row['productDiscount'] ?>"><br><br>
                  Size:<input type="text" name="size" value="<?php echo $row['productSize'] ?>"><br><br>
                  Details:<textarea name="details" col="20" rows="5" wrap="virtual"><?php echo $row['productDetail'] ?></textarea><br><br>
                  Picture:<input type="file" name="updatedpic" id="updatedpic" value="updatedpic">
                  <input type="hidden" name="oldfile" value="<?php echo $imag; ?>">

                  <img src="<?php echo $imgName; ?>" height='150' width='300'>
                  <input type="hidden" value="<?php echo $id; ?>" name="key"><br><br>
                  <input type="submit" value="Update" name="Update">

              </form>
          </div>
      <?php


            }
        }
                var_dump($_POST);
        include 'AdminFooter.php';
        //var_dump($_POST);
        ?>