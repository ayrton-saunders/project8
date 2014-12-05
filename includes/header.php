<?php

/* Page Name: Header Include
 * Author: Ayrton Saunders
 * Date: 25/11/14
 * Header which will be included on every page of project 8
 */

$modNo = 1;
$modDate = "25/11/14";

?>
<div id="header">
    <div class="pageTitle text-center" onclick="goHome();"> Drive Computing ERP </div>
    <br>
    <div id="mobileNavBar" class="mobileNavbar">
        <div id="showMenuBtn" class="showMenuBtn shadow center" onclick="showMenu();">
            Menu
        </div>
        <div id="menuItems">
            <div id="mobileHomeBtn" class="mobileBtn center" onclick="goHome();">
                Home
            </div>
            <div id="mobileApprenticeshipsBtn" class="mobileBtn center"  onclick="goApprenticeships();">
                Apprenticeships
            </div>
            <div id="mobileAboutUsBtn" class="mobileBtn center" onclick="goAboutUs();">
                About Us
            </div>
            <div id="mobileBlissBtn" class="mobileBtn center" onclick="goBliss();">
                Bliss
            </div>
        </div>
        <br>
    </div>
    <div id="navBar" class="navBar text-center">
        <div id="homeBtn" onclick="goHome();" <?php if ($pageNo == 1) echo "class='pageSelected'"; else echo "class='navBtn'"; ?>> 
            Home
        </div>
        <div id="apprenticeshipsBtn" onclick="goApprenticeships();" <?php if ($pageNo == 2) echo "class='pageSelected'"; else echo "class='navBtn'"; ?>>
            Apprenticeships
        </div>
        <div id="aboutUsBtn" onclick="goAboutUs();" <?php if ($pageNo == 3) echo "class='pageSelected'"; else echo "class='navBtn'"; ?>>
            About Us
        </div>
        <div id="blissBtn" onclick="goBliss();" <?php if ($pageNo == 4) echo "class='pageSelected'"; else echo "class='navBtn'"; ?>>
            Bliss
        </div>
    </div>
</div>