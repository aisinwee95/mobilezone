<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <title>Update</title>  
    </head>  
    
    <body>  
        
        <?php  
        define('TITLE', 'InsertProduct');
        require('admin_navigation.html');
        ?>
        
        <div class="container">              
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices--> 
                <form action="update_products.php" method="post">	
                    <table class="table table-bordered" style="table-layout:auto;margin-top:200px;">  
                        <thead>  
                            <tr align="center" style="background-color: indianred;">
                            <td colspan="9" style="padding:0px;"><h2><b>Update Products</b></h2></td>
                        </tr>
                            <tr style="background-color: bisque;">  
                                <th>Product Id</th>
                                <th>Product Image</th>
                                <th>Product Name</th>
                                <th>Product Price</th>  
                                <th>Product Description</th>  
                                <th>Delete Product</th>
                                <th>Edit Product</th>
                            </tr>  
                        </thead>  

                        <?php  

                        include("db_conection.php");  
                        $select_query="select * from product_tbl";//select query for viewing products..  
                        $run=mysqli_query($dbcon,$select_query);//here run the sql query.  

                        while($row=mysqli_fetch_array($run))//while loop to fetch the result and store in an array $row.  
                        {  
                            $product_id=$row[0];
                            $product_image=$row[1];
                            $product_name=$row[2];  
                            $product_price=$row[3];  
                            $product_description=$row[4];            
                        ?>  

                        <tr style="background-color: white;">  
                <!--here showing results in the table -->  
                            <td><?php echo $product_id;  ?></td> 
                            <td><img src="images/<?php echo $product_image; ?>" style="width:220px;height:200px;"><input type="file" name="product_image"></td>
                            <td><input type="text" name="product_name" style="width:200px;" value="<?php echo $product_name; ?>"></td> 
                            <td><input type="text" name="product_price" value="<?php echo $product_price; ?>"></td>  
                            <td><textarea name="product_description" style="width:250px;" cols="50" rows="50"><?php echo $product_description; ?></textarea></td>                      
                            <td><a href="delete_products.php?del=<?php echo $product_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                            <td><a href="update_products.php?update_product=<?php echo $product_id ?>"><button class="btn btn-default" name="update_products" style="background-color: darkseagreen;">Edit</button></a></td>
                            <input type="hidden" id="product_id" name="product_id" value="<?php echo $product_id ?>">   
                        </tr>  

                        <?php } ?>  
                    </table>  
                </form>
            </div>  
        </div>  
        
    </body>
</html> 

    <?php
    include("db_conection.php");
    //var_dump($product_id); 
    if (isset($_POST['update_products'])) 
    {
        $product_id=$_POST['product_id'];
        if(isset($_POST['product_image']) && $_POST['product_image'] != ""){
            $product_image=$_POST['product_image'];
        }
        $product_name=$_POST['product_name']; 
        $product_price=$_POST['product_price'];
        $product_description = $_POST['product_description'];   
        

        $update_query = "UPDATE product_tbl SET product_image='$product_image', product_name='$product_name', "
                . "product_price='$product_price', product_description='$product_description' WHERE id='$product_id'";
        $run=mysqli_query($update_query);
        
        if (mysqli_query($dbcon, $update_query)) 
        {
            echo"<script>window.open('view_products.php','_self')</script>";
        } 
        else 
        {
            echo "error" . mysqli_error($dbcon);
        }
        
        header ("location:view_products.php");
        $dbcon->close();
    }
    
    require('admin_footer.html');
    ?>
