<?php
/*
 * project 8 - joint work
 * J.Burton-Power
 * 25/11/14
 * This page is for information on drive computing.
 */
$pageNo = 3;
?>
<html>
    <head>
        <link rel="icon" type="image/png" href="../css/favicon.ico"/>
        <link href="../css/project8.css" rel="stylesheet" type="text/css"/>
        <script type="text/javascript" src="../javascript/project8.js"></script>
        <script type='text/javascript' src='../jquery/jquery.min.js'></script>
        <script type='text/javascript' src='../jquery/jquery.ui.min.js'></script>
        <link href='../jquery/css/smoothness/jquery-ui.css' rel='stylesheet'/>
        <link rel="stylesheet" type="text/css" href="../slick/slick.css"/>
        <script type="text/javascript" src="../slick/slick.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>

        <title> Drive Computing </title>
        <script type='text/javascript'>
            $(document).ready(function()
            {
                $('#menuItems').hide();
                $('.slider').slick({
                    autoplay: true,
                    autoplaySpeed: 3000
                })

                //animation for pictureCake
                $("#pictureCake").animate({
                    left: '100px',
                    width: '200px'
                }, 1000);

                //animation for pictureCake2
                $("#pictureCake2").animate({
                    left: '100px',
                    width: '250px'
                }, 1000);
                
                if (window.screen.width > 1200) {
                     $('#aboutUsSlider  ').fadeIn(2000);
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
                <div id="aboutUsSlider" class="slider center">
                    <div><img src="../images/slide01.jpg"></div>
                    <div><img src="../images/slide02.jpg"></div>
                    <div><img src="../images/slide03.jpg"></div>
                </div>
                <div id='mobileAboutUsSlider' class="slider center">
                    <div><img src="../images/mobile/mobileSlide01.jpg"></div>
                    <div><img src="../images/mobile/mobileSlide02.jpg"></div>
                    <div><img src="../images/mobile/mobileSlide03.jpg"></div>
                </div>
                <h2 class="text-center">About Drive Computing</h2>
                <div class="about-inlinebox">
                    <div id="cakeImg">
                        <img src="../images/cake.jpg">
                    </div>
                    <div id="about-text1">
                        <p>
                            The original ERP food company UK, Drive Computing is the vendor-supplier to speak to about using ERP in the food and beverage sectors.
                            With nearly 30 years experience we are the original ERP food company UK. If you are a food or beverage company we really are the people to speak
                            to about ERP for small and medium sized operations. A British company, Drive Computing was formed in 1983.
                        </p>
                    </div>
                </div>
                    <p>
                        We have always focused on process sectors, particularly food and beverage.
                        Clients are able to tap into our 20 plus years in the business.
                        Not many (any?) firms can make that claim and it does make a difference.
                        Some of our staff also have industry experience.
                        This also helps us develop a detailed understanding of customers business processes and therefore their system requirements.
                        As a result we can provide a better solution in a faster time-scale than our competitors.
                        Our approach is to develop long term relationships with clients.
                        This understanding enables us to work with clients to identify alterations to the handling of their supply chain.
                    </p>
                    <div class="about-inlinebox">
                        <div id="about-text2">
                            <p>
                                Our clients effectively have a stake in the future development of their software.
                                Admission to the uniquely independent BLISS User Group brings the ability to influence future developments.
                                Keeping clients supply chain software relevant and effective leads to long and supportive partnerships and product innovations.
                                This approach also protects your investment in the future.
                            </p>
                        </div>
                        <div id="cake2Img">
                            <img src="../images/cake2.jpg">
                        </div>
                    </div>
            </div>
            <?php include_once '../includes/footer.php'; ?>
        </div>
    </body>
</html>