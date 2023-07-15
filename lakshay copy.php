<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ClicknBuy</title>
    <link rel="icon" href="fav1.png">
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        .cotainer {
            width: 100%;
        }

        body {
            background-color: black;
        }

        /* Navbar css */
        .nav {
            background-color: #7a1c1c;
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
            /* position: relative; */
            width: 10%;
            margin: auto;
            background-color: #7a1c1c;
        }

        .more select {
            color: white;
            padding: 10px 5px;
            border-radius: 7%;
            border: none;
            cursor: pointer;
            width: 80%;
            font-size: 1.5rem;
            background-color: #7a1c1c;
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
            /* width: 10%; */
            margin: auto;
            background-color: #7a1c1c;
        }

        .sign_in button {
            padding: 10px 15px;
            border-radius: 7%;
            border: none;
            cursor: pointer;
            /* width: 100%; */
            font-size: 1.5rem;
            background-color: #7a1c1c;
        }

        /* navbar 2 */
        .main_nav {
            background-color: #a21b1b;
            width: 82%;
            height: 55px;
            float: right;
            position: relative;
        }

        .main_nav ul {
            list-style: none;
            display: flex;
            padding: 15px 0px;
            width: 100%;
        }


        .main_nav ul li {
            text-align: left;
            /* padding: 0px 5%; */
            margin: 2px auto;
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
            background-color: #8b1111;
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
    /* margin-top: -81.3%; */
    position: absolute;
    height: 1235px;
    top: 142.8%;
    right: 0%;
        }

        .box {
            width: 31%;
            height: 380px;
            margin: auto;
            padding: 2px 5px;
            background-color: rgb(215, 202, 202);
            border: 1px solid transparent;
            float: left;
            margin-top: 20px;
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
            background-color: rgb(41, 6, 6);
        }

        .footer-content p,
        a {
            margin: 0;
            color: black;
        }

        .footer-content p {
            margin-left: 50px;
        }

        .footer-links {
            list-style: none;
            display: flex;
            padding: 15px 0px;
            width: 60%;
        }

        .footer-links li {
            /* display: inline-flex; */
            margin: 0px auto;
            margin: auto;
        }

        .footer-links li a {
            text-decoration: none;
            color: black;
        }

        .footer-links li a:hover {
            color: #666;
        }

        .end {
            width: 100%;
            height: 200px;
            /* border: 2px transparent; */
            padding-top: 5px;
            background-color: rgb(74, 2, 2);
        }

        .one {
            width: 31%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;
            background-color: rgb(74, 2, 2);
            margin: 0px 1%;
            color: white;
        }

        .two {
            width: 31%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;
            margin: 0px 1%;
            background-color: rgb(74, 2, 2);
            color: white;

        }

        .three {
            width: 31%;
            height: 200px;
            /* border: 2px transparent; */
            float: right;            
            margin: 0px 1%;

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
        /* .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        } */

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
            <div class="more">
                <select name="option" id="show">
                    <option value="More"><a href="#">More</a></option>
                    <option value="Notification Preferences"><a href="#">Notification Preferences</a></option>
                    <option value="24x7 Customer care"><a href="#">24x7 Customer care</a></option>
                    <option value="Advertise"><a href="#">Advertise</a></option>
                    <option value="Download App"><a href="#">Download App</a></option>
                </select>
            </div>
            <div class="sign_in">
                <button><a href="login.php">Sign in</a></button>
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
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Foodgrains.html" target="_blank">Vegetables</a></li>
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Household.html" target="_blank">Household</a></li>
                            <li onmouseleave="drop1()" onmouseenter="dropdown1()"><a href="Hygiene.html" target="_blank">Hygiene</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop2()" onmouseenter="dropdown2()"> <a href="#shop" class="dropdown">Electronics</a>
                    </li>
                    <div class="sub-menu-2">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="phone.html" target="_blank">Mobiles</a></li>
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="laptop.html" target="_blank">Laptops</a></li>
                            <li onmouseleave="drop2()" onmouseenter="dropdown2()"><a href="accessories.html" target="_blank">Accessories</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop3()" onmouseenter="dropdown3()"> <a href="#" class="dropdown">Fashion</a>
                    </li>
                    <div class="sub-menu-3">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="menscloths.html" target="_blank">Men wear</a></li>
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="kidscloths.html" target="_blank">Kids wear</a></li>
                            <li onmouseleave="drop3()" onmouseenter="dropdown3()"><a href="womencloths.html" target="_blank">Women wear</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop4()" onmouseenter="dropdown4()"> <a href="#shop" class="dropdown">Toys</a>
                    </li>
                    <div class="sub-menu-4">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys3.html" target="_blank">Below 5</a></li>
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys2.html" target="_blank">5
                                    to 12</a></li>
                            <li onmouseleave="drop4()" onmouseenter="dropdown4()"><a href="toys1.html" target="_blank">Above 12</a></li>
                        </ul>
                    </div>
                    <li onmouseleave="drop()" onmouseenter="dropdown5()"> <a href="#" class="dropdown">Book</a>
                    </li>
                    <div class="sub-menu-5">
                        <ul style="background-color: #a21b1b; border-radius: 0px 0px 10px 10px;">
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Course Bookks.html" target="_blank">Course Books</a></li>
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Novel.html" target="_blank">Novels</a></li>
                            <li onmouseleave="drop5()" onmouseenter="dropdown5()"><a href="Story Books.html" target="_blank">Story Books</a></li>
                        </ul>
                    </div>
                </ul>
            </div>
            <div class="main_box">
                <div class="box">
                    <h1>
                        <center>Deals on Laptops</center>
                    </h1>
                    <img src="WhatsApp Image 2023-07-08 at 14.25.34.jpg" alt="error" width="100%" height="300px" onclick="laptop()">
                    <br>
                    <script>
                        function laptop() {
                            window.open("laptop.html");
                        }
                    </script>
                </div>
                <div class="box">
                    <h1>
                        <center>30% Off on Mobile Phone</center>
                    </h1>
                    <img src="offer mobile.jpg" alt="error" width="100%" height="300px" onclick="mobile()">
                    <script>
                        function mobile() {
                            window.open("phone.html");
                        }
                    </script>
                </div>
                <div class="box">
                    <h1>
                        <center>Trending in Fashion</center>
                    </h1>
                    <img src="WhatsApp Image 2023-07-08 at 14.45.25.jpg" alt="error" width="90%" height="300px" onclick="clothes()" style="padding-left: 5%" ;>
                    <script>
                        function clothes() {
                            window.open("menscloths.html");
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
                    <img src="WhatsApp Image 2023-07-09 at 16.01.18.jpg" alt="error" width="100%" height="300px" onclick="grocery()">
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
                    <img src="n3.png" alt="error" width="100%" height="300px">
                    <br>

                </div>
                <div class="box">
                    <h1>
                        <center>Trending in Fashion</center>
                    </h1>
                    <img src="women2.jpg" alt="error" width="90%" height="300px" style="padding-left: 5%" ; onclick="fas()">
                    <script>
                        function fas() {
                            window.open("womencloths.html");
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
            window.open("accessories.html");
        } else if (value === "course books" || value === "Course books") {
            window.open("Course Bookks.html");
        } else if (value === "Foodgrains" || value === "foodgrains") {
            window.open("Foodgrains.html");
        } else if (value === "Household" || value === "household") {
            window.open("Household.html");
        } else if (value === "Hygiene" || value === "hygiene") {
            window.open("Hygiene.html");
        } else if (value === "kids cloths" || value === "Kids cloths") {
            window.open("kidscloths.html");
        } else if (value === "laptop" || value === "Laptop") {
            window.open("laptop.html");
        } else if (value === "Mens cloths" || value === "mens cloths") {
            window.open("menscloths.html");
        } else if (value === "Novel" || value === "novel") {
            window.open("Novel.html");
        } else if (value === "phone" || value === "Phone") {
            window.open("phone.html");
        } else if (value === "Story Book" || value === "story Book") {
            window.open("Story Books.html");
        } else if (value === "Women cloths" || value === "women cloths") {
            window.open("womencloths.html");
        } else {
            alert("Product not found ? ")
        }
    }
</script>
<?php
?>

</html>