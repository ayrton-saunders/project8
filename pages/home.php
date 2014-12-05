<?php

/* Page Name: Home Page
 * Author: Ayrton Saunders
 * Date: 25/11/14
 * Home Page of the project 8 website
 */

$modNo = 1;
$modDate = "25/11/14";

$pageNo = 1;

?>
<html>
    <head>
        <link rel="icon" type="image/png" href="../css/favicon.ico"/>
        <link href="../css/project8.css" rel="stylesheet" type="text/css"/>
        <script type='text/javascript' src='../javascript/javascript.js'></script>
        <script type='text/javascript' src='../jquery/jquery.min.js'></script>
        <script type='text/javascript' src='../jquery/jquery.ui.min.js'></script>
        <link href='../jquery/css/smoothness/jquery-ui.css' rel='stylesheet'/>
        <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
        <script type="text/javascript" src="../slick/slick.min.js"></script>
        <script src="../javascript/modernizr.custom.js"></script>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title> Drive Computing </title>
        <script type="text/javascript">
            $(document).ready(function()
            {  
                //alert(window.screen.width);
                //alert(window.screen.height);
                $('#menuItems').hide();
                $('.slider').slick({
                    autoplay: true,
                    autoplaySpeed: 2500
                }); 
                if (window.screen.width > 1200) {
                     $('#homeSlider').fadeIn(2000);
                }
            });
            
            <?php include_once '../javascript/project8.js'; ?>
                                 
        </script>        
    </head>
    <body>
        <div id="wrapper" class="shadow">
            <?php include_once '../includes/header.php'; ?>
            <div id="content">
                <div id='homeSlider' class="slider center">
                    <div><img src="../images/bliss1.png"/></div>
                    <div><img src="../images/bliss2.png"/></div>
                    <div><img src="../images/bliss3.png"/></div>
                    <div><img src="../images/bliss4.png"/></div>
                </div>
                <div id='mobileHomeSlider' class="slider center">
                    <div><img src="../images/mobileBliss1.jpg"/></div>
                    <div><img src="../images/mobileBliss2.jpg"/></div>
                    <div><img src="../images/mobileBliss3.jpg"/></div>
                    <div><img src="../images/mobileBliss4.jpg"/></div>
                </div>
                
                <h2 class="text-center"> BLISS: ERP Software for the Food Industry </h2>
                
                <div>
                    <p>
                        BLISS ERP system is the original enterprise resource planning solution for the Food and Drink Sectors. 
                        Drive Computing, BLISS developers, has been helping companies stay competitive since the 1980s. 
                        It is the top ERP food software for small and medium sized operations.
                    </p>    
                        <ul class="text-left" style="margin-left: -2.5%;">
                            <li> <p>- Is all your supply chain information at your finger tips? </p> </li>
                            <li> <p>- Is it actionable? </p> </li>
                            <li> <p>- Do you need to improve margins? </p> </li> 
                            <li> <p>- Are customers demanding longer shelf life? </p> </li>
                        </ul>
                    <p>
                        Today, customer demands are greater than ever before. Margins are under pressure. 
                        If you are looking for greater control, we have the solution.
                    </p>
                </div>
                
                <ul id="logoEffect" class="grid cs-style-1">
                    <li>
                        <figure>
                            <img src="../images/blissLogo.png" alt="img01">
                            <figcaption>
                                <h3>Bliss</h3>
                                <span>Bliss is the one of the two products which we produce</span>
                                <a href="blissOverview.php">More Info</a>
                            </figcaption>
                        </figure>
                    </li>
                </ul>
                <img id="mobileBlissLogo" class="center" src="../images/mobileBlissLogo.jpg" alt="img01">
            </div>
            <?php include_once '../includes/footer.php'; ?>
        </div>
    </body>
</html>