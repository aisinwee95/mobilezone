<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php  

        include("db_conection.php");  
        $delete_id=$_GET['del'];  
        $delete_query="delete from product_tbl WHERE id='$delete_id'";//delete query  
        $run=mysqli_query($dbcon,$delete_query);  
        if($run)  
        {  
        //javascript function to open in the same window   
            echo "<script>window.open('view_products.php?deleted=product has been deleted','_self')</script>";  
        }  
        require('admin_footer.html');
        ?>  
        