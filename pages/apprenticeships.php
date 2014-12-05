<?php

/* Page Name: Home Page
 * Author: Ayrton Saunders
 * Date: 25/11/14
 * Information about the apprenticeship scheme at Drive Computing
 */

$modNo = 1;
$modDate = "25/11/14";

$pageNo = 2;

?>

<html>
    <head>
        <link rel="icon" type="image/png" href="../css/favicon.ico"/>
        <link href="../css/project8.css" rel="stylesheet" type="text/css"/>
        <script type='text/javascript' src='../javascript/javascript.js'></script>
        <script type='text/javascript' src='../jquery/jquery.min.js'></script>
        <script type='text/javascript' src='../jquery/jquery.ui.min.js'></script>
        <link href='../jquery/css/smoothness/jquery-ui.css' rel='stylesheet'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'/>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
        <title> Drive Computing </title>
        <script type="text/javascript">
            $(document).ready(function()
            {  
                //alert(window.screen.width);
                //alert(window.screen.height);
                $('#menuItems').hide(); 
                if (window.screen.width > 1200) {
                     $('#mainImgHolder').fadeIn(2000);
                }
                if (window.screen.width < 1200) {
                     $('#mobile-mainImgHolder').fadeIn(2000);
                }
            });
            
            <?php include_once '../javascript/project8.js'; ?>
                                 
        </script>        
    </head>
    <body>
        <div id="wrapper" class="shadow">
            <?php include_once '../includes/header.php'; ?>
            <div id="content">
                <div id="mainImgHolder">
                    <img id="appImg" class="center" src="../images/apprenticeships.png" alt="Apprenticeships Img" width="500px">
                </div>
                <div id="mobile-mainImgHolder">
                    <img id="appImg" class="center" src="../images//mobile/mobileApprenticeships.png" alt="Apprenticeships Img">
                </div>
                <h2 class="text-center"> Drive Computing Apprenticeships     </h2>
                <h3 class="text-center">  Are you interesting in becoming part of our next generation of Project Managers? </h3>
                <h3 class="text-center"> Are you wanting to learn PHP, JavaScript, HTML and various other coding languages? </h3>
                
                <div class="apprenticeships-inlinebox">
                    <div id="learnImg">
                        <img src="../images/learn.png">
                    </div>
                    <div id="apprenticeships-text1">
                        <p>
                            Look no further, as we are now looking to recruit our third intake of Apprentice Software Engineers, 
                            based at our training facility, Broad Gate, in the centre of Leeds. <br><br>
                            Our company is looking for new recruits to add to our team of apprentices who take on a wide, exciting range of tasks. 
                            There are many benefits to working with us here at Drive Computing, such as the opportunity to pursue a successful career as a Project Manager. 
                            If you are interested in finding out more, please do not hesitate to contact us. 
                        </p>
                    </div>
                </div>
            </div>    
            <?php include_once '../includes/footer.php'; ?>
        </div>
    </body>
</html>