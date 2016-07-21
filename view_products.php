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
        <title>View Products</title>  
    </head>  
    
    <body>  
        
        <?php  
        define('TITLE', 'InsertProduct');
        require('admin_navigation.html');
        ?>
        
        <div class="container">              
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                <table class="table table-bordered" style="table-layout:auto;margin-top:200px;">  
                    <thead>  
                        <tr align="center" style="background-color: indianred;">
                        <td colspan="9" style="padding:0px;"><h2><b>Products</b></h2></td>
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
                    $view_products_query="select * from product_tbl";//select query for viewing products..  
                    $run=mysqli_query($dbcon,$view_products_query);//here run the sql query.  

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
                        <td><img src="images/<?php echo $product_image; ?>" style="width:250px;height:225px;"></td>
                        <td><?php echo $product_name;  ?></td> 
                        <td><?php echo $product_price;  ?></td>  
                        <td style="width:300px;height:100px;"><?php echo $product_description;  ?></td>                      
                        <td><a href="delete_products.php?del=<?php echo $product_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                        <td><a href="update_products.php?update_product=<?php echo $product_id ?>"><button class="btn btn-default" style="background-color: darkseagreen;">Edit</button></a></td>
                    </tr>  

                    <?php } ?>  

                </table>  
            </div>  
        </div>  
        
        <?php require('admin_footer.html'); ?>
        
    </body>
</html> 
