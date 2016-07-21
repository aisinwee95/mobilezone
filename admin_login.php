<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

    <?php  
    define('TITLE', 'Registration');
    require('admin_navigation.html');
    ?>

<html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>   
        <title>Admin Login</title>  
    </head> 
    
    <style>  
        .login-panel {  
            margin-top: 150px;
    </style>  
  
    <body>  
        
        <div class="container">  
            <div class="row">  
                <div class="col-md-5 col-md-offset-3" style="margin-left:28%;">  
                    <div class="login-panel panel panel-success" style="margin-top:200px;">  
                       <div class="panel-heading" style="background-color:darkcyan;color:black;">  
                            <h3 class="panel-title" style="text-align:center;font-size:25px;font-family:cursive"><b>ADMIN LOG IN</b></h3>  
                        </div> 
                        <div class="panel-body">  
                            <form role="form" method="post" action="admin_login.php">  
                                <fieldset>  
                                    <div class="form-group"><br><br>
                                        <label for="name" class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="admin_name" placeholder="Username" class="form-control" autofocus>
                                        </div><br><br>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="admin_pass" placeholder="Password" class="form-control" autofocus>
                                        </div><br><br><br>
                                    </div>
                                    <div class="text-center">
                                        <button class="button" type="submit" name="admin_login" value="login" style="vertical-align:middle;width:200px;"><span>Login &nbsp;</span></button>
                                    </div><br>
                                </fieldset>  
                            </form>  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>  
        
    </body>  
</html>  

    <?php  
 
    include("db_conection.php");  

    if(isset($_POST['admin_login']))//this will tell us what to do if some data has been post through form with button.  
    {  
        $admin_name=$_POST['admin_name'];  
        $admin_pass=$_POST['admin_pass'];  

        $admin_query="select * from admin where admin_name='$admin_name' AND admin_pass='$admin_pass'";  

        $run_query=mysqli_query($dbcon,$admin_query);  

        if(mysqli_num_rows($run_query)>0)  
        {  
            echo "<script>window.open('view_registered_users.php','_self')</script>";
        
            $_SESSION['admin_name'] = true;
            $_SESSION['admin_name']=$admin_name;//here session is used and value of $user_name store in $_SESSION.
            $_SESSION['loggedin'] = time();
                
            if ($count==1) 
            {
                $_SESSION["admin_name"] = $admin_name;
                $_SESSION["logged"] = true;
                header("Location: view_registered_users.php");
                exit();
            }
            else 
            {
                $_SESSION["logged"] = false;
                header("Location: admin_login.php");
                exit();
            }          
        }      
        else 
        {
            echo"<script>alert('Admin details are incorrect!')</script>";           
        }  
         
    }  
    
    require('admin_footer.html');
    
    ?>
