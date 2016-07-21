<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
    <?php    

        session_start();//session is a way to store information (in variables) to be used across multiple pages.  
        session_destroy();  
        header("Location: admin_login.php");//use for the redirection to some page

    ?>  
