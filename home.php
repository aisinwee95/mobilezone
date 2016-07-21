<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
        <?php  
        define('TITLE', 'Registration');
        require('navigation.html');
        ?>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css"/>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
        <title>Home</title>
        
        <style>
            .carousel-inner > .item > img,
            .carousel-inner > .item > a > img 
            {
                width: 70%;
                margin: auto;
            }
            .carousel-caption {
                position: absolute;
                right: 15%;
                bottom: 75%;
                left: 15%;
                z-index: 10;
                padding-top: 20px;
                padding-bottom: 20px;
                color: #fff;
                text-align: center;
                text-shadow: 0 1px 2px rgba(0, 0, 0, .6);
            }

        </style>
        
    </head>
    <body>
        
        <div class="container" style="width:1100px;height:550px;margin-top:90px;">
            <div id="myCarousel" class="carousel slide">
              <!-- Indicators -->
              <ol class="carousel-indicators">
                <li class="item1 active"></li>
                <li class="item2"></li>
                <li class="item3"></li>
                <li class="item4"></li>
                <li class="item5"></li>
                <li class="item6"></li>
                <li class="item7"></li>
              </ol>

              <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

                <div class="item active">
                    <img src="iphoneSE.png" alt="apple" style="width:1100px;height:550px;">
                </div>

                <div class="item">
                    <img src="iphone6s.jpg" alt="apple" style="width:1100px;height:550px;">
                </div>

                <div class="item">
                    <img src="samsungnote5.jpg" alt="samsung" style="width:1100px;height:550px;">
                    <div class="carousel-caption"style="text-align:left;top:50px;">
                        <h1 style="color:black;"><b>Samsung</b></h1>
                        <p style="color:black;font-size:20px;">Galaxy S7 Edge<p>
                    </div>
                </div>

                <div class="item">
                    <img src="galaxys7edge.jpg" alt="samsung" style="width:1100px;height:550px;">
                </div>
                
                <div class="item">                 
                    <img src="samsungs7edge.jpg" alt="samsung" style="width:1100px;height:550px;"> 
                    <div class="carousel-caption"style="text-align:left;">
                        <h2 style="color:black;"><b>Samsung Galaxy S7 Edge</b></h2>
                        <p style="color:black;font-size:18px;">IT'S WATERPROOF, GRAB IT NOW! <p>
                    </div>
                </div>
                <div class="item">
                    <img src="xiaominote3.jpg" alt="xiaomi" style="width:1100px;height:550px;">
                </div>
                <div class="item">
                    <img src="redminote3.jpg" alt="xiaomi" style="width:1100px;height:550px;">
                </div>

            </div>

              <!-- Left and right controls -->
              <a class="left carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="right carousel-control" href="#myCarousel" role="button">
                <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
        </div>

<script>
    $(document).ready(function()
    {
        // Activate Carousel
        $("#myCarousel").carousel();

        // Enable Carousel Indicators
        $(".item1").click(function(){
            $("#myCarousel").carousel(0);
        });
        $(".item2").click(function(){
            $("#myCarousel").carousel(1);
        });
        $(".item3").click(function(){
            $("#myCarousel").carousel(2);
        });
        $(".item4").click(function(){
            $("#myCarousel").carousel(3);
        });
         $(".item5").click(function(){
            $("#myCarousel").carousel(4);
        });
         $(".item6").click(function(){
            $("#myCarousel").carousel(5);
        });
        $(".item7").click(function(){
            $("#myCarousel").carousel(5);
        });
       
        // Enable Carousel Controls
        $(".left").click(function(){
            $("#myCarousel").carousel("prev");
        });
        $(".right").click(function(){
            $("#myCarousel").carousel("next");
        });
    });
</script>
    <div class="container-fluid">
        <div class="jumbotron vertical-center" style="width:1068px;margin-top:50px;margin-left:128px;">
            <div class="row">
                <div class="col-xs-4">
                    <h2>APPLE</h2>
                    <img src="applelogo.png" alt="apple" style="width:250px;height:175px;">
                    <p>Apple Inc. is an American multinational technology company headquartered in Cupertino, California,
                        that designs, develops, and sells consumer electronics, computer software, and online services.</p>
                    <p><a href="http://www.apple.com/" target="_blank" class="btn btn-success">Website &raquo;</a></p>
                </div>
                <div class="col-xs-4">
                    <h2>SAMSUNG</h2>
                    <img src="samsunglogo.png" alt="samsung" style="width:250px;height:175px;">
                    <p>Samsung is the largest mobile phone maker in its home market of South Korea, and the third largest
                        in the world. In addition to mobile phones and related devices, the company also manufacturers things 
                        such as televisions, cameras, and electronic components.</p>
                    <p><a href="http://www.samsung.com/in/home/" target="_blank" class="btn btn-success">Website &raquo;</a></p>
                </div>
                <div class="col-xs-4">
                    <h2>XIAOMI</h2>
                    <img src="xiaomilogo.png" alt="samsung" style="width:250px;height:175px;">
                    <p>Xiaomi Inc. is a privately owned Chinese electronics company headquartered in Beijing. It is the 
                        world's 5th largest smartphone maker in 2015 Xiaomi sold 70.8 million units and was countable for 
                        almost 5 percent of the smartphone global market share Xiaomi designs, develops, and sells smartphones, 
                        mobile apps, and related consumer electronics.</p>
                    <p><a href="http://xiaomi-mi.com/" target="_blank" class="btn btn-success">Website &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>

    </body>
</html>

<?php require ('footer.html'); ?>