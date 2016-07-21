<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Insert</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>

    <body>

        <?php
        define('TITLE', 'InsertProduct');
        require('admin_navigation.html');
        ?>

        <div class="container">
            <form action="insert_products.php" method="post">	
                <table class="table table-bordered" align="center" style="width:720px;margin-top:200px;">
                    <tr align="center" style="background-color: gray;">
                        <td colspan="7" style="padding:0px;"><h2><b>Insert Product</b></h2></td>
                    </tr>
                    <tr style="background-color:white;">
                        <td align="right" style="font-size:16px;"><b>Product Image</b></td>
                        <td><input type="file" name="product_image" style="background-color: lightcoral;"/></td>
                    </tr>
                    <tr style="background-color:lightgray;">
                        <td align="right" style="font-size:16px;"><b>Product Name</b></td>
                        <td><input type="text" name="product_name" /></td>
                    </tr>
                    <tr style="background-color:white;">
                        <td align="right" style="font-size:16px;"><b>Product Price</b></td>
                        <td><input type="text" name="product_price" /></td>
                    </tr>
                    <tr style="background-color:lightgray;">
                        <td align="right" style="font-size:16px;"><b>Product Description</b></td>
                        <td><textarea name="product_description" style="width:350px;" cols="30" rows="20" ></textarea></td>
                    </tr>
                    <tr align="center" style="background-color:white;">
                        <td colspan="7"><button class="button" type="submit" name="insert_product" value="insert_product" style="vertical-align:middle;background-color: lightcoral;"><span>Insert Product &nbsp;</span></button>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>

<?php
include("db_conection.php"); //make connection here  
if (isset($_POST['insert_product'])) 
{
    $product_image = $_POST['product_image'];
    $product_name = $_POST['product_name']; //here getting result from the post array after submitting the form.    
    $product_price = $_POST['product_price']; //same 
    $product_description = $_POST['product_description']; //same 
 
    //insert the product into the database.  
    $insert_product = "insert into product_tbl (product_image,product_name,product_price,product_description) "
            . "VALUE ('$product_image','$product_name','$product_price','$product_description')";
    
    if (mysqli_query($dbcon, $insert_product)) 
    {
        echo"<script>window.open('view_products.php','_self')</script>";
    } 
    else 
    {
        echo "error" . mysqli_error($dbcon);
    }
}
require('admin_footer.html');
?>

