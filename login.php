<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php  

    define('TITLE', 'Login');
    require('navigation.html');

    ?>  
    
<html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script> 
        <title>Login</title>  
    </head>
    
</body>

        <div class="container">  
            <div class="row">  
                <div class="col-md-7 col-md-offset-3" style="margin-left:27%;">  
                    <div class="login-panel panel panel-success" style="width:500px;margin-top:200px;">  
                        <div class="panel-heading" style="background-color:darkcyan;color:black;">  
                            <h3 class="panel-title" style="text-align:center;font-size:25px;font-family:cursive"><b>LOG IN</b></h3>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="login.php">  
                                <fieldset>  
                                    <div class="form-group"><br><br>
                                        <label for="name" class="col-sm-3 control-label" style="font-size:18px;">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" placeholder="Username" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group"><br><br>
                                        <label for="password" class="col-sm-3 control-label" style="font-size:18px;">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="pass" placeholder="Password" class="form-control" autofocus>
                                        </div><br><br><br>
                                    </div>
                                    <div class="text-center">
                                        <button class="button" type="submit" name="login" value="login" style="vertical-align:middle;width:200px;"><span>Login &nbsp;</span></button>
                                    </div><br>
                                    <center><b>New register?</b><br></b><a href="registration.php">Register here</a></center>
                                        
                                    <!-- Change this to a button or input when using this as a form -->  
                                  <!--  <a href="index.html" class="btn btn-lg btn-success btn-block">Login</a> -->  
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

        if(isset($_POST['login']))  
        {  
            $user_name=$_POST['name'];  
            $user_pass=$_POST['pass'];  

            $check_user="select * from registration WHERE user_name='$user_name'AND user_pass='$user_pass'";  

            $run=mysqli_query($dbcon,$check_user);  

            if(mysqli_num_rows($run))  
            {  
                echo "<script>window.open('home.php','_self')</script>";  
                
                $_SESSION['name'] = true;
                $_SESSION['name']=$user_name;//here session is used and value of $user_name store in $_SESSION.
                $_SESSION['loggedin'] = time();
                
                if ($count==1) 
                {
                    $_SESSION["name"] = $user_name;
                    $_SESSION["logged"] = true;
                    header("Location: home.php");
                    exit();
                }
                else 
                {
                    $_SESSION["logged"] = false;
                    header("Location: login.php");
                    exit();
                }          
            }  
            else  
            {          
                echo "<script>alert('Email or password is incorrect!')</script>"; 
            }  
        }  
        require('footer.html');
        ?>  
