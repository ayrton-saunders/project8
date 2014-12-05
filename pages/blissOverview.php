<?php
/*
 * project 8 - joint work
 * J.Burton-Power
 * 25/11/14
 * This page is about an overview for Bliss.
 */

$pageNo = 4;
?>
<html>
    <head>
        <link rel="icon" type="image/png" href="../css/favicon.ico"/>
        <link href="../css/project8.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../javascript/project8.js"></script>
        <script type='text/javascript' src='../jquery/jquery.min.js'></script>
        <script type='text/javascript' src='../jquery/jquery.ui.min.js'></script>
        <link href='../jquery/css/smoothness/jquery-ui.css' rel='stylesheet'/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
        <title> Drive Computing </title>
        <script type='text/javascript'>
            $(document).ready(function()
            {
                $('#menuItems').hide();
                //animation for slider
                $("#blissPopUp").animate({
                    width: '600px' 
                }, 1000);
             
                if (window.screen.width > 640) {
                    $('#mainImgHolder').fadeIn(2000);
                }
            });

        </script>
        <style>

        </style>
    </head>
    <body>
        <div id="wrapper" class="shadow">
            <?php include_once '../includes/header.php'; ?>
            <div id="content">
                <div id="mainImgHolder">
                    <img class="center" src="../images/blissLogo.png" id="blissLogo">
                </div>
                <h2 class="text-center">Drive Computing - BLISS Overview</h2>
                <p>
                    Food ERP UK is arguably the best way to deal with the challenges of operating in todays UK food and drink sector
                </p>
                <div class="bliss-inlinebox">
                    <div id="drinkCansImg">
                        <img src="../images/drinkCan.jpg">
                    </div>
                    <div id="bliss-text1">
                        <p>
                            We have been at the forefront of developing food industry specific solutions for more than 25 years. <br><br>
                            This allows us to offer food ERP UK products and services developed for UK food and drink companies.
                            If you are new to food ERP it can be difficult to know where to start your search. There are so many ERP products available.
                        </p>
                    </div>
                </div>
                <br>
                <div id="blissPopUp" class="center">
                    Yet only BLISS has been developed for small and medium sized UK food and drink companies.
                </div>
                <br>
                <p>
                    And no matter what kind of processing you do - whether its continuous processing, semi batch or batch processing we can help.
                </p>
                <p>
                    Fewer and fewer UK food and drink companies remain independent.
                    Tougher compliance and competition, low profit margins and a demanding customer environment, mean companies need every advantage.
                    The more product lines you have the greater the need to have your critical business factors in full view.
                </p>
                <div class="bliss-inlinebox">
                    <div id="bliss-text2">
                        <p>
                            Food and drink companies face specific issues in implementing ERP due to the nature of their produce and a relatively weak market position.
                            We believe these issues translate into a unique set of requirements. <br><br>
                            Thriving companies manage every part of their supply chain: from forecasting
                            and distribution to shelf life and minimising waste to having 100% traceability.
                        </p>
                    </div>
                    <div id="foodCansImg">
                        <img src="../images/foodCans.jpg">
                    </div>
                </div>
            </div>
            <?php include_once '../includes/footer.php'; ?>
        </div>
    </body>
</html>