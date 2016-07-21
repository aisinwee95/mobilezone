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
        <title>Samsung Products</title>  
    </head>  
    
    <body>  
        
        <?php  
        define('TITLE', 'SamsungProducts');
        require('navigation.html');
        ?>
        
        <div class="container">              
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                <table class="table table-bordered" style="table-layout:auto;margin-top:200px;">  
                    <thead>  
                        <tr align="center" style="background-color: darkslateblue;">
                        <td colspan="9" style="padding:0px;"><h2><b>SAMSUNG PRODUCTS</b></h2></td>
                    </tr>
                        <tr style="background-color: lightsteelblue;">                
                            <th>Products</th>
                            <th>Name</th>
                            <th>Price</th>  
                            <th>Description</th>  
                        </tr>  
                    </thead>  

                    <?php  
                    
                    include("db_conection.php");  
                    $samsung_query="select * from product_tbl where product_name LIKE '%Samsung%'";//select query for viewing products..  
                    $run=mysqli_query($dbcon,$samsung_query);//here run the sql query.  

                    while($row=mysqli_fetch_array($run))//while loop to fetch the result and store in an array $row.  
                    {        
                        
                        $product_image=$row[1];
                        $product_name=$row[2];  
                        $product_price=$row[3];  
                        $product_description=$row[4];
                    ?>  

                    <tr style="background-color: white;">  
            <!--here showing results in the table -->                        
                        <td><img src="images/<?php echo $product_image; ?>" style="width:220px;height:200px;"></td>
                        <td><?php echo $product_name;  ?></td> 
                        <td><?php echo $product_price;  ?></td>  
                        <td style="width:300px;"><?php echo $product_description;  ?></td> 
                    </tr>  

                    <?php } ?>  

                </table>  
            </div>  
        </div>  
        
        <?php require('footer.html'); ?>
        
    </body>
</html> 
