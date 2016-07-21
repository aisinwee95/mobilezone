<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>  
    <head lang="en">  
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        <title>Registration</title>  
        
    </head>
    
</body>
        <?php  
        define('TITLE', 'Registration');
        require('navigation.html');
        ?>
        
        <div class="container"><!-- container class is used to centered  the body of the browser with some decent width-->  
            <div class="row"><!-- row class is used for grid system in Bootstrap-->  
                <div class="col-md-7 col-md-offset-3" style="margin-left:21%;"><!--col-md-4 is used to create the no of colums in the grid also use for medimum and large devices-->  
                    <div class="login-panel panel panel-success" style="margin-top:200px;">  
                        <div class="panel-heading" name="registrationform" style="background-color:darkcyan;color:black;"> 
                            <span class="glyphicon glyphicon-user" style="font-size:25px;"></span><b style="font-size:25px;font-family:cursive;">&nbsp;REGISTRATION</b>        
                        </div>
                        <div class="panel-body">  
                            <form class="form-horizontal" id="registrationForm" role="form" method="post" action="registration.php">  
                                 <fieldset>
                                    <div class="form-group"><br><br>
                                        <label for="fullName" class="col-sm-3 control-label">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="fname" placeholder="Full Name" class="form-control" value="<?php if(isset($_POST
                                                ['fname'])) { print htmlspecialchars($_POST['fname']); } ?>"autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="name" class="col-sm-3 control-label">Username</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="name" placeholder="Username" class="form-control" value="<?php if(isset($_POST
                                                ['name'])) { print htmlspecialchars($_POST['name']); } ?>"autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email" class="col-sm-3 control-label">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" placeholder="E-mail" class="form-control" value="<?php if(isset($_POST
                                                ['email'])) { print htmlspecialchars($_POST['email']); } ?>"autofocus>
                                        </div>
                                    </div> 
                                    <div class="form-group">
                                        <label for="password" class="col-sm-3 control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="pass" placeholder="Password" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="conpassword" class="col-sm-3 control-label">Confirm Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="conpass" placeholder="Confirm Password" class="form-control"autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dob" class="col-sm-3 control-label">Date of Birth</label>
                                        <div class="col-sm-9">
                                            <input type="date" name="dob" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="add" class="col-sm-3 control-label">Address</label>
                                        <div class="col-sm-9">
                                            <input type="text" name="address" placeholder="Address" class="form-control" value="<?php if(isset($_POST
                                                ['address'])) { print htmlspecialchars($_POST['address']); } ?>"autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="telno" class="col-sm-3 control-label">Tel Number</label>
                                        <div class="col-sm-9">
                                            <input type="tel" name="telno" placeholder="Tel Number" class="form-control" value="<?php if(isset($_POST
                                                ['telno'])) { print htmlspecialchars($_POST['telno']); } ?>"autofocus>
                                        </div>
                                    </div><br><br>
                                    <div class="text-center">
                                        <button class="button" type="submit" name="register" value="register" style="vertical-align:middle;"><span>Register &nbsp;</span></button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <button class="button" type="reset" name="reset" value="reset" style="vertical-align:middle;"><span>Reset &nbsp;</span></button>
                                    </div>
                                </fieldset>   
                            </form><br>  
                            <center><b>Already registered?</b> <br></b><a href="login.php">Login here</a></center><br><!--for centered text-->  
                        </div>  
                    </div>  
                </div>  
            </div>  
        </div>   
    </body>
</html>
        <?php
        
        include("db_conection.php");//make connection here  
        if(isset($_POST['register']))  
        {  
            $user_fname=$_POST['fname'];
            $user_name=$_POST['name'];//here getting result from the post array after submitting the form.    
            $user_email=$_POST['email'];//same 
            $user_pass=$_POST['pass'];//same 
            $user_conpass=$_POST['conpass'];
            $user_dob=$_POST['dob'];
            $user_address=$_POST['address'];
            $user_telno=$_POST['telno'];
            
            if($user_fname=='')  
            {  
                echo"<script>alert('Please enter your full name')</script>";  
                exit();  
            } 
            if($user_name=='')  
            {  
                //javascript use for input checking  
                echo"<script>alert('Please enter your username')</script>";  
                exit();//this use if first is not work then other will not show  
            }                
            if($user_email=='')  
            {  
                echo"<script>alert('Please enter your email')</script>";  
                exit();  
            } 
            if($user_pass=='')  
            {  
                echo"<script>alert('Please enter your password')</script>";  
                exit();  
            } 
            if ($user_pass != $user_conpass) 
            {
                echo"<script>alert('Your password did not match your confirmation password!')</script>";
                exit();
            }
            if($user_dob=='')  
            {  
                echo"<script>alert('Please enter your date of birth')</script>";  
                exit();  
            } 
            if($user_address=='')  
            {  
                echo"<script>alert('Please enter your address')</script>";  
                exit();  
            }
            if($user_telno=='')  
            {  
                echo"<script>alert('Please enter your telephone number')</script>";  
                exit();  
            } 
            
        //here query check weather if user already registered so can't register again.  
            $check_email_query="select * from registration WHERE user_email='$user_email'";  
            $run_query=mysqli_query($dbcon,$check_email_query);  

            if(mysqli_num_rows($run_query)>0)  
            {  
                echo "<script>alert('Email $user_email has already exist in our database, Please try another one!')</script>";  
                exit();  
            }  
        //insert the user into the database.  
            $insert_user="insert into registration (user_fname,user_name,user_email,user_pass,user_dob,user_address,user_telno) "
                    . "VALUE ('$user_fname','$user_name','$user_email','$user_pass','$user_dob','$user_address','$user_telno')";  
            if(mysqli_query($dbcon,$insert_user))  
            {  
                echo"<script>window.open('login.php','_self')</script>";  
            }            
            else
            {
                echo "error". mysqli_error($dbcon);
            }
        }  
        require('footer.html');
        ?>
