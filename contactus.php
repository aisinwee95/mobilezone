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
        <title>Contact Us</title>      
    </head>
    
</body>

        <?php  
        define('TITLE', 'Contact Us');
        require('navigation.html');
        ?>
        
        <div class="container">  
            <div class="row">  
                <div class="col-md-7 col-md-offset-3"style="margin-left:27%;">  
                    <div class="login-panel panel panel-success" style="width:500px;margin-top:200px;">  
                        <div class="panel-heading" style="background-color:darkcyan;color:black;">  
                            <span class="glyphicon glyphicon-phone-alt" style="font-size:25px;"></span><b style="font-size:25px;font-family:cursive;">&nbsp;CONTACT US</b>  
                        </div>  
                        <div class="panel-body">  
                            <form role="form" method="post" action="contactus.php">  
                                <fieldset>
                                    <p style="font-size:140%;text-align:center;"><br><b>Please contact us for more details.</b><br><br><b>Phone : </b>019-4242323 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b><br>Email : </b>aisinwee95@gmail.com<br></p><br><br>                           
                                    <div class="form-group"><br>
                                        <label for="fname" class="col-sm-3 control-label" style="font-size:18px;">Full Name</label>
                                        <div class="col-sm-9">
                                            <input type="fname" name="fname" placeholder="Full Name" class="form-control" autofocus>
                                        </div>
                                    </div>
                                    <div class="form-group"><br><br>
                                        <label for="email" class="col-sm-3 control-label" style="font-size:18px;">E-mail</label>
                                        <div class="col-sm-9">
                                            <input type="email" name="email" placeholder="E-mail" class="form-control" autofocus>
                                        </div><br><br><br><br><br>
                                    </div>
                                    <strong style="font-size:120%;margin-left:39px">Leave your message below : </strong><br><br><textarea style="width:400px;margin-left:36px;" name="message" placeholder="Type your message..."></textarea><br><br><br><br>
                                    <div class="text-center">
                                        <button class="button" type="submit" name="submit" value="submit" style="vertical-align:middle;width:200px;"><span>Submit &nbsp;</span></button>
                                    </div><br>
                                    
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
        
        include("db_conection.php");//make connection here  
        if(isset($_POST['submit']))  
        {  
            $user_fname=$_POST['fname'];
            $user_email=$_POST['email'];//same 
            $user_message=$_POST['message'];
            
            if($user_fname=='')  
            {  
                echo"<script>alert('Please enter your full name')</script>";  
                exit();  
            }               
            if($user_email=='')  
            {  
                echo"<script>alert('Please enter your email')</script>";  
                exit();  
            } 
            if($user_message=='')  
            {  
                echo"<script>alert('Please enter your message')</script>";  
                exit();  
            }
  
        //insert the user into the database.  
            $insert_user="insert into contact_us (user_fname,user_email,user_message) "
                    . "VALUE ('$user_fname','$user_email','$user_message')";  
            if(mysqli_query($dbcon,$insert_user))  
            {  
                echo"<script>alert('Your message has been posted successfully. Thank you for your message.')</script>";                
            }           
            else
            {
                echo "error". mysqli_error($dbcon);
            }
        }  
        require('footer.html');
        ?>