<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClicknBuy</title>
    <link rel="icon" href="fav1.png">
    <style>
        html {
            scroll-behavior: smooth;
        }

        .cotainer {
            margin: -8px;
        }

        body {
            background-color: black;
        }

        /* Navbar css */
        .nav {
            background-color: #c11818;
            width: 100%;
            display: inline-flex;
        }

        .logo_img {
            width: 4.5%;
            margin: auto;
        }

        .logo {
            width: 15%;
            margin: auto;
        }

        .logo img {
            width: 100%;
            height: 70px;
            margin-left: 10px;
            display: inline;
            margin-top: 4px;
            mix-blend-mode: multiply;
        }

        .search {
            width: 45%;
            text-align: center;
            margin: auto;
        }

        #search_bar {
            width: 70%;
            padding: 5px 10px;
        }

        .search button {
            padding: 5px 10px;
            cursor: pointer;
        }

        .pincode {
            width: 10%;
        }

        .more {
            width: 10%;
            position: relative;
            width: 10%;
            margin: auto;
            background-color: inherit;
        }

        .more select {
            color: white;
            padding: 10px 5px;
            border-radius: 7%;
            border: none;
            cursor: pointer;
            width: 80%;
            font-size: 1.5rem;
            background-color: inherit;
            text-align: right;
        }

        .more select option {

            border-radius: 7%;
            border: none;
            cursor: pointer;
            width: 80%;
            font-size: 1.2rem;
            background-color: #7a1c1c;
            text-align: left;
        }

        .more select option a {
            padding: 5px;
        }

        .sign_in {
            width: 15%;
            margin: auto;
            background-color: inherit;
        }

        .sign_in button {
            padding: 10px 15px;
            border-radius: 7%;
            border: none;
            cursor: pointer;
            width: 100%;
            font-size: 1.5rem;
            background-color: inherit;
        }

        /* navbar 2 */
        .main_nav {
            background-color: #ff1f1f;
            width: 82%;
            height: 55px;
            float: right;
        }

        .main_nav ul {
            list-style: none;
            display: flex;
        }


        .main_nav ul li {
            text-align: left;
            padding: 0px 5%;
            margin: 2px;
        }

        .main_nav ul li a {
            padding: 10px 30px;
            text-decoration: none;
        }

        .main_nav ul li a:hover {
            background-color: white;
            border-radius: 10%;
            color: black;
        }

        /* slider css */
        .slider {
            width: 18%;
            background-color: #c11818;
            display: inline-block;
            height: 1290px;
        }

        .slider h2 {
            margin: 5% 15%;
        }

        .slider h4 {
            margin: 5% 15%;

        }

        .slider h4 a {
            text-decoration: none;
            color: white;
        }

        hr {
            width: 70%;
            background-color: black;
            margin: 10% 15%;
        }

        .advertisement {
            width: 100%;
            height: 340px;
        }

        .advertisement img {
            height: 340px;
            width: 100%;
        }

        .sub-menu-1,
        .sub-menu-2,
        .sub-menu-3,
        .sub-menu-4,
        .sub-menu-5 {
            display: block;
            position: absolute;
            background: brown;
            margin-top: 15px;
            z-index: 1;
            margin-left: -15px;
        }

        .sub-menu-1 ul {
            display: table-cell;
            position: absolute;
            top: 24px;
            left: 70px;
            width: 150px;
            padding: 0px;
        }

        .sub-menu-1 ul:hover,
        .sub-menu-2 ul:hover,
        .sub-menu-3 ul:hover,
        .sub-menu-4 ul:hover,
        .sub-menu-5 ul:hover {
            /* background-color: green; */
            border-radius: 0px 0px 10px 10px;
        }

        .sub-menu-1 ul li a:hover,
        .sub-menu-2 ul li a:hover,
        .sub-menu-3 ul li a:hover,
        .sub-menu-4 ul li a:hover,
        .sub-menu-5 ul li a:hover {
            background-color: inherit;
        }

        .sub-menu-1 ul li {
            margin: 0px;
            padding-bottom: 10px;
            width: 110%;
        }

        .sub-menu-2 ul {
            display: table-cell;
            position: absolute;
            top: 24px;
            left: 315px;
            width: 150px;
            padding: 0px 0px 0px 10px;
        }

        .sub-menu-2 ul li {
            margin: 0px;
            width: 110%;
            padding-bottom: 10px;
        }

        .sub-menu-3 ul {
            display: table-cell;
            position: absolute;
            top: 24px;
            padding: 0px;
            width: 150px;
            left: 550px;
        }

        .sub-menu-3 ul li {
            width: 110%;
            padding-bottom: 10px;
            margin: 0px;
        }

        .sub-menu-4 ul {
            display: table-cell;
            position: absolute;
            top: 24px;
            width: 150px;
            padding: 0px;
            left: 760px;
        }

        .sub-menu-4 ul li {
            width: 110%;
            padding-bottom: 10px;
            margin: 0px;
        }

        .sub-menu-5 ul {
            display: table-cell;
            position: absolute;
            top: 24px;
            padding: 0px;
            width: 150px;
            left: 980px;
        }

        .sub-menu-5 ul li {
            width: 110%;
            padding-bottom: 10px;
            margin: 0px;
        }

        /* main box css */
        .main_box {
            width: 82%;
            float: right;
            background-color: whitesmoke;
            margin-top: -81.3%;
            height: 1235px;
        }

        .box {
            width: 31%;
            height: 380px;
            margin: 0.5%;
            padding: 2px 5px;
            background-color: rgb(215, 202, 202);
            border: 1px solid transparent;
            float: left;
            margin-top: 20px;
            position: relative;
        }

        .box2 {
            width: 100%;
            height: 370px;
            margin-top: 430px;
            background-color: rgb(215, 202, 202);
        }

        .box2 h1 {
            padding-top: 10px;
            margin-bottom: 0px;
            padding-bottom: 0px;
        }

        .box2_box {
            width: 18%;
            margin: 1%;
            height: 270px;
            background-color: white;
        }

        .box2_box a {
            color: black;
        }

        .box2_box img {
            margin-left: 22px;
            margin-top: 10px;
            cursor: pointer;
            transition: transform .2s;
        }

        .box3 {
            height: 350px;
            width: 100%;
            display: inline-flex;
            margin-top: 0px;
        }

        .main_box .box img {
            cursor: pointer;
            mix-blend-mode: multiply;
        }

        /*   footer css */

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            height: 45px;
            background-color: black;
        }

        .footer-content p,
        a {
            margin: 0;
            color: white;
        }

        .footer-content p {
            margin-left: 50px;
        }

        .footer-links {
            list-style-type: none;
            width: 50%;
        }

        .footer-links li {
            display: inline-flex;
            margin: 0px 40px;
        }

        .footer-links li a {
            text-decoration: none;
            color: white;
        }

        .footer-links li a:hover {
            color: #666;
        }

        .end {
            width: 100%;
            height: 200px;
            border: 2px transparent;
            padding-top: 5px;
            background-color: rgb(74, 2, 2);
        }

        .one {
            width: 30%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;
            background-color: rgb(74, 2, 2);
            color: white;
        }

        .two {
            width: 33%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;
            margin-right: 9px;
            background-color: rgb(74, 2, 2);
            color: white;

        }

        .three {
            width: 33%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;
            margin-right: 27px;
            background-color: rgb(74, 2, 2);
            color: white;
        }

        .hey {
            height: 80%;
            width: 80%;
            margin-left: 40px;
            margin-top: 20px;
        }

        a {
            text-decoration: none;
            color: white;
        }

        li {
            font-size: 1rem;
            font-family: 'Times New Roman', Times, serif;
        }

        p {
            font-size: 1rem;
            margin-right: 20px;
        }

        .bhanu {
            height: 1285px;
            width: 100%;
            /* border: 2px solid white; */
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 3000px;
            height: 400px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: black;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #333333;
        }

        /* Fading animation */
        .fade {
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .mySlides img {
            height: 437px;
            width: 99px;
        }

        .logo_img img {
            height: 70px;
            width: 100%;

        }

        .slider h2 {
            color: black;
        }

        .slider h4 a {
            color: lightyellow;
        }

        .mic {
            position: relative;
        }

        #output {
            height: 140%;
            width: 400%;
            border: 2px solid black;
            padding: 10px;
            position: absolute;
            display: none;
            top: 100%;
            left: -150%;
            z-index: 1;
            background-color: whitesmoke;
            color: black;
        }

        .mic button {
            width: 50px;
            height: 50px;
            margin-top: 30%;
            border-radius: 50%
        }

        .mic button img {
            width: 100%;
            height: 100%;
            border-radius: 50%;
        }

        .mic:hover #output {
            display: block;
        }

        .box p {
            position: absolute;
            bottom: 0;
            right: 0;
            color: blue;
            margin: 0;
            cursor: pointer;
        }

        .show_more1,
        .show_more2,
        .show_more3 {
            width: 320%;
            height: 400px;
            border: 1px solid black;
            display: none;
            background-color: white;
        }

        .show_more1 {
            margin-left: -2%;
            margin-top: 5%;
        }

        .show_more2 {
            margin-left: -108%;
            margin-top: 5%;

        }

        .show_more3 {
            margin-left: -215%;
            margin-top: 5%;

        }

        .box2_box img:hover {
            transform: scale(2);
        }

        .div {
            background-color: blanchedalmond;
            border: 2px solid black;
            padding: 5%;
            height: 350px;
            position: relative;
        }

        .div img {
            width: 100%;
            height: 250px;
            margin: auto;
        }

        .div .info {
            position: absolute;
            width: 6%;
            height: 4%;
            top: 7%;
            background-color: darkgrey;
            right: 10%;
            border-radius: 50%;
            color: white;
        }

        .details {
            position: absolute;
            width: 1300%;
            height: 1500%;
            top: -16%;
            background-color: whitesmoke;
            right: -40%;
            color: black;
            display: none;
            /* border: 2px solid black; */
            padding: 45%;
        }

        .info:hover .details {
            opacity: 0.7;
            display: block;
        }

        .div p {
            color: black;
            font-size: 1.6vw;
            text-decoration: capitalize;
        }

        .div button {
            display: block;
            width: 100%;
            height: 30px;
            font-size: 1.2vw;
        }

        /* a {
            text-decoration: none;
            color: black;
        } */

        .more_content {
            display: grid;
            grid-template-columns: 24% 24% 24% 24%;
            grid-column-gap: 2.2%;
            grid-row-gap: 2.2%;
            padding: 4%;
            padding-top: 1%;
            height: 400px;
        }

        .more_content p {
            position: static;
        }
    </style>
</head>

<body onload="drop1(),drop2(), drop3() ,drop4(), drop5()">

    <div class="cotainer">
        <div class="nav">
            <div class="logo_img">
                <img src="one.png" alt="logo">
            </div>
            <div class="logo">
                <img src="logo2.png" alt="logo">
            </div>
            <div class="search">
                <input type="text" name="search" id="search_bar" placeholder="Search for your things like phone,laptopp,novel....etc" />
                <button onclick="search()">Search</button>
            </div>
            <div class="mic">
                <button id="start-btn"><img src="mic.png" alt=""></button>
                <div id="output"></div>
            </div>
            <div class="more">
                <select name="option" id="show">
                    <option value="More"><a href="#">More</a></option>
                    <option value="Notification Preferences"><a href="#">Notification Preferences</a></option>
                    <option value="24x7 Customer care"><a href="#">24x7 Customer care</a></option>
                    <option value="Advertise"><a href=".advertisement">Advertise</a></option>
                </select>
            </div>
            <div class="sign_in">
                <button><a href="login.php">Sign in / Register</a></button>
            </div>
        </div>

        <div class="slideshow-container">

            <div class="mySlides fade">
                <div class="numbertext"><strong>1 / 5</strong></div>
                <img src="slide1.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">2 / 5</div>
                <img src="slide2.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">3 / 5</div>
                <img src="slide3.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">4 / 5</div>
                <img src="slide4.jpg" style="width:100%">
            </div>

            <div class="mySlides fade">
                <div class="numbertext">5 / 5</div>
                <img src="slide5.jpg" style="width:100%">
            </div>
            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>
        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
        <div class="bhanu">
            <div class="slider">
                <h2>Electronics</h2>
                <h4><a href="phone.html" target="_blank">Bestselling Mobiles</a></h4>
                <h4><a href="laptop.html" target="_blank">Trending in Laptops</a></h4>
                <h4><a href="accessories.html" target="_blank">30% OFF On Accessories</a></h4>
                <hr>
                <h2>Books</h2>
                <h4><a href="Novel.html" target="_blank">Novel You Love</a></h4>
                <h4><a href="Course Bookks.html" target="_blank">Books You Need</a></h4>
                <h4><a href="Story Books.html" target="_blank">Book For Kids</a></h4>
                <hr>
                <h2>Fashion</h2>
                <h4><a href="menscloths.html" target="_blank">Trending For Men</a></h4>
                <h4><a href="womencloths.html" target="_blank">Trending For Women</a></h4>
                <h4><a href="kidscloths.html" target="_blank">Trending For Kids</a></h4>
                <hr>
                <h2>Toys</h2>
                <h4><a href="toys3.html" target="_blank">Toys for age 0-5</a></h4>
                <h4><a href="toys2.html" target="_blank">Toys for age 5-12</a></h4>
                <h4><a href="toys1.html" target="_blank">Toys for age 12-18</a></h4>
                <hr>
                <h2>Grocery</h2>
                <h4><a href="Household.html" target="_blank">Things for Household</a></h4>
                <h4><a href="Hygiene.html" target="_blank">Hygiene & Beauty</a></h4>
                <h4><a href="Foodgrains.html" target="_blank">Foodgrains & Vegetables</a></h4>
                <hr>
                <div class="advertisement">
                    <img src="ad.jpeg" alt="alt">
                </div>
            </div>
            <div class="main_nav">
                <ul>
                    <li onmouseleave="drop1()" onmouseenter="dropdown1()"> <a href="#" class="dropdown">Grocery</a>
                    </li>
                    <div class="sub-menu-1">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Foodgrains.html">Vegetables</a></li>
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Household.html">Household</a></li>
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Hygiene.html">Hygiene</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop2()" onmouseenter="dropdown2()"> <a href="#shop" class="dropdown">Electronics</a>
                    </li>
                    <div class="sub-menu-2">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="phone.html">Mobiles</a></li>
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="laptop.html">Laptops</a></li>
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="accessories.html">Accessories</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop3()" onmouseenter="dropdown3()"> <a href="#" class="dropdown">Fashion</a>
                    </li>
                    <div class="sub-menu-3">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="menscloths.html">Men wear</a></li>
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="kidsclothes.html">Kids wear</a></li>
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="womencloths.html">Women wear</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop4()" onmouseenter="dropdown4()"> <a href="#shop" class="dropdown">Toys</a>
                    </li>
                    <div class="sub-menu-4">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys3.html">Below 5</a></li>
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys2.html">5
                                    to 12</a></li>
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys1.html">Above 12</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop()" onmouseenter="dropdown5()"> <a href="#" class="dropdown">Book</a>
                    </li>
                    <div class="sub-menu-5">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Course Bookks.html">Course Books</a></li>
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Novel.html">Novels</a></li>
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Story Books.html">Story Books</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="main_box">
                <div class="box">
                    <h1>
                        <center>Deals on Laptops</center>
                    </h1>
                    <p ondblclick="more1()" onclick="less1()">More..</p>
                    <img src="WhatsApp Image 2023-07-08 at 14.25.34.jpg" alt="error" width="100%" height="285px" onclick="laptop()">
                    <div class="show_more1">
                        <div class="more_content">
                            <div class="div">
                                <img src="imagestoys/l12.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">Brand Dell <br>
                                        Model Name Inspiron 3511 <br>
                                        Screen Size 15.6 Inches <br>
                                        Colour Carbon Black <br>
                                        Hard Disk Size 512 GB <br>
                                        CPU Model Core I3 1115G4 <br>
                                        RAM Memory Installed Size 8 GB <br> <br>
                                        Price : 60,000/-
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>dell inspiron</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                            <div class="div">
                                <img src="imagestoys/l11.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">Brand HP <br>
                                        Model Name 15-ew0021TX <br>


                                        Hard Disk Size 512 GB <br>
                                        CPU Model Core i5 <br>
                                        RAM Memory 16 GB <br>
                                        Windows 11 Home <br>
                                        Special Feature Touchscreen <br>
                                        Graphics Card Description Integrated <br>

                                        Price : 83,000/-
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>hp Envy</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                            <div class="div">
                                <img src="imagestoys/l10.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">Brand Lenovo <br>
                                        Model Name Legion 5 Pro 16IAH7H <br>


                                        Hard Disk Size 1 TB <br>
                                        CPU Model Core i7 <br>
                                        RAM Memory Installed Size 16 GB <br>
                                        Price : 1,20,000/- <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>lenovo legion 5</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>

                            <div class="div">
                                <img src="imagestoys/l9.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">
                                        Brand ASUS <br>
                                        Model Name Vivobook 15 <br>
                                        Screen Size 15.6 Inches <br>
                                        Colour Transparent Silver <br>
                                        Hard Disk Size 512 GB <br>
                                        CPU Model Celeron <br>
                                        RAM Memory Installed Size 8 GB <br>
                                        Price : 45,000/- <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>asus vivobook</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function laptop() {
                            window.open("laptop.html");
                        }

                        function more1() {
                            let more = document.getElementsByClassName("show_more1")[0];
                            more.style.display = "block";
                        }

                        function less1() {
                            let more = document.getElementsByClassName("show_more1")[0];
                            more.style.display = "none";
                        }
                    </script>
                </div>
                <div class="box">
                    <h1>
                        <center>30% Off on Mobile Phone</center>
                    </h1>
                    <p ondblclick="more2()" onclick="less2()">More..</p>
                    <img src="offer mobile.jpg" alt="error" width="100%" height="285px" onclick="mobile()">
                    <div class="show_more2">
                        <div class="more_content">
                            <div class="div">
                                <img src="imagestoys/y15.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">
                                        <p>18,999/-</p> Brand Vivo <br>
                                        Model Name Y15 <br>
                                        Operating System Android 9.0 <br>
                                        Cellular Technology 4G <br>
                                        Memory Storage Capacity 64 GB <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>vivo y15</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                            <div class="div">
                                <img src="imagestoys/x3.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">
                                        <p>Rs-22500/-</p>Brand Samsung <br>
                                        Model Name Samsung Galaxy x3 <br>
                                        Network Service Provider Unlocked for All Carriers <br>
                                        Operating System Android 13.0 <br>
                                        Cellular Technology 5G <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>samsung x3</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                            <div class="div">
                                <img src="imagestoys/vivox60.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">
                                        <p>Rs-18400/-/-</p>Brand Vivo <br>
                                        Model Name Vivo X60 (Midnight Black, 8GB RAM, 128GB ROM) <br>
                                        Network Service Provider Unlocked for All Carriers <br>
                                        Operating System Android 11.1 based Funtouch OS 11.1 <br>
                                        Connectivity Technology USB <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>vivo x60</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                            <div class="div">
                                <img src="imagestoys/vivov21.jpeg" alt="only">
                                <div class="info">
                                    <center>i</center>
                                    <div class="details">
                                        <p>Rs-18500/-</p>Brand Vivo <br>
                                        Model Name Vivo V21 (Sunset Dazzle, 8GB RAM, 128GB ROM) <br>
                                        Network Service Provider Unlocked for All Carriers <br>
                                        Operating System Funtouch OS 11.1 (Based on Android 11) <br>
                                        Cellular Technology 5G <br>
                                    </div>
                                </div>
                                <br>
                                <br>
                                <center>
                                    <p>vivo v21</p>
                                </center>
                                <br>
                                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
                            </div>
                        </div>
                    </div>
                    <script>
                        function mobile() {
                            window.open("phone.html");
                        }

                        function more2() {
                            let more = document.getElementsByClassName("show_more2")[0];
                            more.style.display = "block";
                        }

                        function less2() {
                            let more = document.getElementsByClassName("show_more2")[0];
                            more.style.display = "none";
                        }
                    </script>
                </div>
                <div class="box">
                    <h1>
                        <center>Trending in Fashion</center>
                    </h1>
                    <p ondblclick="more3()" onclick="less3()">More..</p>
                    <img src="WhatsApp Image 2023-07-08 at 14.45.25.jpg" alt="error" width="90%" height="285px" onclick="clothes()" style="padding-left: 5%" ;>
                    <div class="show_more3">
                    <div class="more_content">
                    <div class="div">
                <img src="imagestoys/kh3.jpeg" alt="only">
                <div class="info">
                    <center>i</center>
                    <div class="details">
                        <P>Rs.3500/-</P>
                        Manufacturer  :  Greciilooks<br>
                        ASIN :  B0BY8PNM6J<br>
                        Item model number  :  GL-MS-6064<br>
                        Country of Origin :  India<br>
                        Department :  Men<br></div>
                        
                        
                </div>
                <br>
                <br>
                <center>
                    <p>Partywear kurta</p>
                </center>
                <br>
                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
            </div>
            <div class="div">
                <img src="imagestoys/kh4.jpeg" alt="only">
                <div class="info">
                    <center>i</center>
                    <div class="details">
                        <P>Rs.1590/-</P>
                        Manufacturer :  Symbol<br>
                        ASIN  :  B08QSK6RNG<br>
                        Item model number : SYMETHSET-5<br>
                        Country of Origin : India<br>
                        Department :  Men<br>
                        
                        </div>
                </div>
                <br>
                <br>
                <center>
                    <p>Casual wear</p>
                </center>
                <br>
                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
            </div>
            <div class="div">
                <img src="imagestoys/kh5.jpeg" alt="only">
                <div class="info">
                    <center>i</center>
                    <div class="details">
                        <P>Rs.1450/-</P>
                        Manufacturer :  Greciilooks, Greciilooks<br>
                        Packer :  Greciilooks<br>
                        Importer  :  Greciilooks<br>
                        <br>
                        </div>
                </div>
                <br>
                <br>
                <center>
                    <p>Blue jeans</p>
                </center>
                <br>
                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
            </div>
            <div class="div">
                <img src="imagestoys/kh6.jpeg" alt="only">
                <div class="info">
                    <center>i</center>
                    <div class="details">
                        <P>Rs.4899/-</P>
                        Manufacturer :  PARIS HAMILTON<br>
                        ASIN  :  B0BCG6FRF7<br>
                        Item part number :  71921032<br>
                        Country of Origin  :  India<br>
                        Department :  Men</div>
                </div>
                <br>
                <br>
                <center>
                    <p>Three piece suit</p>
                </center>
                <br>
                <button type="button"><strong><a href="login.php">Buy Now</a></strong></button>
            </div>
                        </div>
                    </div>
                    <script>
                        function clothes() {
                            window.open("menscloths.html");
                        }

                        function more3() {
                            let more = document.getElementsByClassName("show_more3")[0];
                            more.style.display = "block";
                        }

                        function less3() {
                            let more = document.getElementsByClassName("show_more3")[0];
                            more.style.display = "none";
                        }
                    </script>
                </div>
                <div class="box2">
                    <h1>
                        <center> TOP DEALS </center>
                    </h1>
                    <div class="box3">
                        <div class="box2_box">
                            <img src="headphone.jpg" alt="" width="80%" height="200px" onclick="headphone()">
                            <h2>
                                <center><a href="accessories.html">Boat Headphone</a></center>
                            </h2>
                            <script>
                                function headphone() {
                                    window.open("accessories.html");
                                }
                            </script>
                        </div>
                        <div class="box2_box">
                            <img src="iphone.jpg" alt="" width="80%" height="200px" onclick="phone()">
                            <h2>
                                <center><a href="phone.html">Iphone 14</a></center>
                            </h2>
                            <script>
                                function phone() {
                                    window.open("phone.html");
                                }
                            </script>
                        </div>
                        <div class="box2_box">
                            <img src="lap.jpg" alt="" width="80%" height="200px" onclick="laptop()">
                            <h2>
                                <center><a href="laptop.html">Mi Notebook Ultra</a></center>
                            </h2>
                            <script>
                                function laptop() {
                                    window.open("laptop.html");
                                }
                            </script>
                        </div>
                        <div class="box2_box">
                            <img src="shirt.jpg" alt="" width="80%" height="200px" onclick="clothes()">
                            <h2>
                                <center><a href="menscloths.html">Denim Shirt</a></center>
                            </h2>
                            <script>
                                function clothes() {
                                    window.open("menscloths.html");
                                }
                            </script>
                        </div>
                        <div class="box2_box">
                            <img src="watch.jpg" alt="" width="80%" height="200px" onclick="headphone()">
                            <h2>
                                <center><a href="accessories.html">Noise Smartwatch</a></center>
                            </h2>
                            <script>
                                function headphone() {
                                    window.open("accessories.html");
                                }
                            </script>
                        </div>
                    </div>
                </div>
                <div class="box">

                    <h1>
                        <center>Sale On Grocery Items</center>
                    </h1>
                    <img src="WhatsApp Image 2023-07-09 at 16.01.18.jpg" alt="error" width="100%" height="285px" onclick="grocery()">
                    <script>
                        function grocery() {
                            window.open("Foodgrains.html");
                        }
                    </script>
                </div>
                <div class="box">
                    <h1>
                        <center>Today's Deals</center>
                    </h1>
                    <img src="n3.png" alt="error" width="100%" height="285px">
                    <br>

                </div>
                <div class="box">
                    <h1>
                        <center>Trending in Fashion</center>
                    </h1>
                    <img src="women2.jpg" alt="error" width="90%" height="285px" style="padding-left: 5%" ; onclick="fas()">

                    <script>
                        function fas() {
                            window.open("womencloths.html");
                        }

                        const SpeechRecognition = window.SpeechRecognition || window.webkitSpeechRecognition;
                        const recognition = new SpeechRecognition();
                        recognition.continuous = true;

                        const outputDiv = document.getElementById('output');
                        const startBtn = document.getElementById('start-btn');

                        startBtn.addEventListener('click', () => {
                            startBtn.disabled = true;
                            recognition.start();
                        });

                        recognition.onresult = (event) => {
                            const transcript = event.results[event.results.length - 1][0].transcript.toLowerCase();
                            outputDiv.innerHTML += `<p>${transcript}</p>`;
                            handleRedirect(transcript);
                        };

                        recognition.onend = () => {
                            startBtn.disabled = false;
                        };

                        function handleRedirect(transcript) {
                            if (transcript.includes('mobile' || 'phone')) {
                                window.location.href = 'phone.html';
                            } else if (transcript.includes('laptop')) {
                                window.location.href = 'laptop.html';
                            } else if (transcript.includes('men' || 'mens' || 'boys')) {
                                window.location.href = 'menscloths.html';
                            } else if (transcript.includes('watch' || 'neckband' || 'headphone' || 'pendrive' || 'smart watch')) {
                                window.location.href = 'accessories.html';
                            } else if (transcript.includes('woman' || 'women' || 'ladies' || 'girls' || 'fashion')) {
                                window.location.href = 'womencloths.html';
                            } else if (transcript.includes('kids' || 'baby')) {
                                window.location.href = 'kidsclothes.html';
                            } else if (transcript.includes('grocery' || 'food' || 'vegetables' || 'oil')) {
                                window.location.href = 'Foodgrains.html';
                            } else if (transcript.includes('hygine' || 'cleaning')) {
                                window.location.href = 'Hygiene.html';
                            } else if (transcript.includes('home' || 'house' || 'household')) {
                                window.location.href = 'Household.html';
                            } else if (transcript.includes('toys for 0 to 5' || '0' || '5' || 'below 5' || 'small kids')) {
                                window.location.href = 'toys3.html';
                            } else if (transcript.includes('toys for 5 to 12' || '6' || '12' || 'toys')) {
                                window.location.href = 'toys2.html';
                            } else if (transcript.includes('toys for 12 to 18' || '13' || 'adult kids' || 'toy')) {
                                window.location.href = 'toys1.html';
                            } else if (transcript.includes('novel' || 'novels')) {
                                window.location.href = 'Novel.html';
                            } else if (transcript.includes('story books' || 'story ')) {
                                window.location.href = 'Stroy Books.html';
                            } else if (transcript.includes('book' || 'study' || 'course books' || 'books')) {
                                window.location.href = 'Course Bookks.html';
                            }

                        }
                    </script>
                </div>
            </div>
        </div>
        <div class="end">
            <div class="one">
                <ul>
                    <h1>Technologies</h1>
                    <li><a href="https://www.w3schools.com/html/" target="_blank">HTML</a></li>
                    <li><a href="https://www.geeksforgeeks.org/css-introduction/" target="_blank">CSS</a></li>
                    <li><a href="https://en.wikipedia.org/wiki/JavaScript" target="_blank">JAVASCRIPT</a></li>
                    <li><a href="https://www.w3schools.com/html/" target="_blank">PHP</a></li>
                    <li><a href="https://www.w3schools.com/sql/" target="_blank">SQL</a></li>
                </ul>
            </div>
            <div class="two">
                <ul>
                    <h1>Makers</h1>
                    <li><a href="https://www.linkedin.com/in/bhanu-gupta-b53157236bavil" target="_blank">Bhanu Gupta</a></li>
                    <li><a href="https://www.linkedin.com/in/jai-khurana-280075241" target="_blank">Jai Khurana</a></li>
                    <li><a href="https://www.linkedin.com/in/deepanshu-choudhary-18392025a" target="_blank">Deepanshu Choudhary</a> </li>
                    <li><a href="https://www.linkedin.com/in/its-lakshay-jain-2004abc" target="_blank">Lakshay Jain</a></li>
                </ul>
            </div>
            <div class="three">
                <input type="text" placeholder="Leave your Comment for us" class="hey">
            </div>
        </div>
        <div class="footer-content">
            <p>&copy; 2023 Your Website. All rights reserved.</p>
            <ul class="footer-links">
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Customer's support</a></li>
            </ul>
        </div>

</body>
<script>
    function drop1() {
        var drop1 = document.getElementsByClassName("sub-menu-1")[0];
        drop1.style.display = "none";
    }

    function dropdown1() {
        var drop1 = document.getElementsByClassName("sub-menu-1")[0];
        drop1.style.display = "";
    }

    function drop2() {
        var drop1 = document.getElementsByClassName("sub-menu-2")[0];
        drop1.style.display = "none";
    }

    function dropdown2() {
        var drop1 = document.getElementsByClassName("sub-menu-2")[0];
        drop1.style.display = "";
    }

    function drop3() {
        var drop1 = document.getElementsByClassName("sub-menu-3")[0];
        drop1.style.display = "none";
    }

    function dropdown3() {
        var drop1 = document.getElementsByClassName("sub-menu-3")[0];
        drop1.style.display = "";
    }

    function drop4() {
        var drop1 = document.getElementsByClassName("sub-menu-4")[0];
        drop1.style.display = "none";
    }

    function dropdown4() {
        var drop1 = document.getElementsByClassName("sub-menu-4")[0];
        drop1.style.display = "";
    }

    function drop5() {
        var drop1 = document.getElementsByClassName("sub-menu-5")[0];
        drop1.style.display = "none";
    }

    function dropdown5() {
        var drop1 = document.getElementsByClassName("sub-menu-5")[0];
        drop1.style.display = "";
    }



    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
        showSlides(slideIndex += n);
    }

    function currentSlide(n) {
        showSlides(slideIndex = n);
    }

    function showSlides(n) {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        if (n > slides.length) {
            slideIndex = 1
        }
        if (n < 1) {
            slideIndex = slides.length
        }
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
    }

    function search() {
        var value = document.getElementById("search_bar").value;
        if (value === "" || value === "search") {
            alert("Search again.");
        } else if (value === "accessories" || value === "Accessories") {
            window.location.href = "accessories.html";
        } else if (value === "course books" || value === "Course books") {
            window.location.href = "Course Bookks.html";
        } else if (value === "Foodgrains" || value === "foodgrains") {
            window.location.href = "Foodgrains.html";
        } else if (value === "Household" || value === "household") {
            window.location.href = "Household.html";
        } else if (value === "Hygiene" || value === "hygiene") {
            window.location.href = "Hygiene.html";
        } else if (value === "kids cloths" || value === "Kids cloths") {
            window.location.href = "kidscloths.html";
        } else if (value === "laptop" || value === "Laptop") {
            window.location.href = "laptop.html";
        } else if (value === "Mens cloths" || value === "mens cloths") {
            window.location.href = "menscloths.html";
        } else if (value === "Novel" || value === "novel") {
            window.location.href = "Novel.html";
        } else if (value === "phone" || value === "Phone" || value === "mobile" || value === "Mobile") {
            window.location.href = "phone.html";
        } else if (value === "Story Book" || value === "story Book") {
            window.location.href = "Story Books.html";
        } else if (value === "Women cloths" || value === "women cloths") {
            window.location.href = "womencloths.html";
        } else {
            alert("Product not found ? ")
        }
    }
</script>
<?php
?>

</html>