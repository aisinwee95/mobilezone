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
        <title>View Registered Users</title>  
    </head>
  
    <body>  
        
        <?php  
        define('TITLE', 'Registration');
        require('admin_navigation.html');
        ?>
        
        <div class="container">              
            <div class="table-responsive"><!--this is used for responsive display in mobile and other devices-->  
                <table class="table table-bordered" style="table-layout:auto;margin-top:200px;">  
                    <thead>  
                        <tr align="center" style="background-color: indianred;">
                        <td colspan="9" style="padding:0px;"><h2><b>Registered Users</b></h2></td>
                    </tr>
                        <tr style="background-color: bisque;">  
                            <th>User Id</th>
                            <th>User Full Name</th>
                            <th>User Name</th>  
                            <th>User E-mail</th>  
                            <th>User Password</th>
                            <th>User DOB</th>
                            <th>User Address</th>
                            <th>User Tel No</th>
                            <th>Delete User</th>  
                        </tr>  
                    </thead>  

                    <?php  
                    
                    include("db_conection.php");  
                    $view_registered_users_query="select * from registration";//select query for viewing users.  
                    $run=mysqli_query($dbcon,$view_registered_users_query);//here run the sql query.  

                    while($row=mysqli_fetch_array($run))//while look to fetch the result and store in a array $row.  
                    {  
                        $user_id=$row[0];
                        $user_fname=$row[1];
                        $user_name=$row[2];  
                        $user_email=$row[3];  
                        $user_pass=$row[4];
                        $user_dob=$row[5];
                        $user_address=$row[6];
                        $user_telno=$row[7];               
                    ?>  

                    <tr style="background-color: white;">  
            <!--here showing results in the table -->  
                        <td><?php echo $user_id;  ?></td> 
                        <td><?php echo $user_fname;  ?></td>
                        <td><?php echo $user_name;  ?></td>  
                        <td><?php echo $user_email;  ?></td>  
                        <td><?php echo $user_pass;  ?></td> 
                        <td><?php echo $user_dob;  ?></td>
                        <td><?php echo $user_address;  ?></td>
                        <td><?php echo $user_telno;  ?></td>                       
                        <td><a href="delete.php?del=<?php echo $user_id ?>"><button class="btn btn-danger">Delete</button></a></td> <!--btn btn-danger is a bootstrap button to show danger-->  
                    </tr>  

                    <?php } ?>  

                </table>  
            </div>  
        </div>  
        
        <?php require('admin_footer.html'); ?>
        
    </body>
</html>  
