<?php


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resorces/css/login.css">
    <link href="http://fonts.cdnfonts.com/css/din-condensed" rel="stylesheet">
    <title>Login</title>
</head>
<style>
    /* backgroun styleing */
    html{
        min-width: 100%;
        /* background-image: url("./images/ocean.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center; */
        height: 100vh;
    }
    .rotate_180 {
    -moz-transform: rotate(180deg);
    -webkit-transform: rotate(180deg);
    -o-transform: rotate(180deg);
    -ms-transform: rotate(180deg);
    transform: rotate(180deg);
}
    body{
        margin:0;
        box-sizing: border-box;
    }
    .background-img{
        height: 100vh;
        width: 100vw;
        position: absolute;
        z-index: -1;
    }
/* NAV BAR start */
    nav{
        display:flex;
        height: 4vh;
        justify-content: right;
        text-align: left;
        letter-spacing: 4px;
        padding-top: 7vw;
        margin-right: 10px;
    }
    #nav-items{
        width: 80%;
        right: 0;
        display: none;
        position: absolute;
        z-index: 15;
        list-style: inside;
        list-style-type: none;
        background-color: red;
        opacity: .9;
        border-radius: 20px 0px 0px 20px;
    }
    .CouseMap-img{
        width: 100%;
        display: flex;
        padding-top: 25vw;
        margin-bottom: 7vw;
    }
    .list-style{
        display: flex;
        margin-left: 10px;
        float: right;
        width: 95%;
    }
    .list-style li{
        margin-left: 10px;
    }
    #nav-items h3{
        color: orange;
        margin-left: 10px;
        width:100%;
        border-bottom: 1px solid orange;    
        font-size: 23px; 
    }
    #nav-items li{
        width: 100%;
        padding-bottom: 5vw;
        padding-top: 5vw;
        border-bottom: 1px solid orange;
    }
    #nav-items a{
        width: 100%;
        text-decoration: none;
        color: white;
        font-size: 23px;
    }
    #mb-nav{
        display: block;
        margin-left: 94%;
        height: 40px
    }
    /* NAV BAR END */

     /* red dragon start */

     .reddragon{
        position: absolute;
        width: 100vw;
        top: -7vh;
        z-index: -1;
    }

    /* red dragon end */

    /* main section */

    .main-section{
        top: 29vh;
        flex-direction: column;
        text-align: center;
        position: absolute;
        width: 100vw;
        display: flex;
        align-items: center;
        font-family: 'DIN Condensed', sans-serif;
    }
    .main-section h2{
        color: white; 
        font-size: 7vw;
        z-index: 10;
        letter-spacing: 2vw;
        color: #13BBAF;
    }
    .couseselec{
        display: flex;
        flex-direction: column;
        align-items: center;
    }
    .couseselec img{
        width: 50vw;
        height: 15vh;
        border-radius: 20px;
        border: 1px solid red;
    }
    .course1{
        margin-bottom: 20px;
        width: 50vw;
        height: 18vh;
        background-image: url("./images/homeimg.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 20px;
        border: 1px solid red;
        display:flex;
        align-items: center;
    }
    .course2{
        margin-bottom: 20px;
        width: 50vw;
        height: 18vh;
        background-image: url("./images/homeimg.jpg");
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
        border-radius: 20px;
        border: 1px solid red;
        display:flex;
        align-items: center;
    }
    .text1{
        color: white;
        font-size: 6vw;
        z-index: 10;
        letter-spacing: 2vw;
    }
    /* main section end */

    </style>
<body>
    <img class="background-img rotate_180"src="./images/ocean.jpeg" alt="">

    <!-- start of nav bar -->
    <nav id="nav">
        <ul id="nav-items">
            <div class="CouseMap-img">
                <img src="./images/reshot-icon-map-marker-KS456ZT2P3.svg" alt="map icon">
                <h3>COURSE MAP</h3>
            </div>
            <div class="list-style">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0db.svg" alt="map icon">
                <li><a href="#">CHANGE COURSE</a></li>
            </div>
            <div class="list-style">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0db.svg" alt="map icon">
                <li><a href="#">SAVE GAME</a></li>
            </div>
            <div class="list-style">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0db.svg" alt="map icon">
                <li><a href="#">LEADER BOARD</a></li>
            </div>
            <div class="list-style">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0dbOrange.svg" alt="map icon">
                <li><a href="#" style="font-size:15px; color: orange;">RULES</a></li>
            </div>
            <div class="list-style" style="padding-bottom: 100px;">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0dbOrange.svg" alt="map icon">
                <li style="border-bottom: none;"><a href="#" style="font-size:15px; color: orange;">WAIVER</a></li>
            </div>
        </ul>
        <img id="mb-nav" src="./images/list(1).svg" alt="Hamburger icon for navigation">
    </nav>
    <!-- end of nav bar -->


    <!-- dragon image start -->
    <img class="reddragon" src="./images/Red_Dragon_Cove.svg" alt="">
    <!-- dragon image end -->


    <!-- main content start -->

    <div class="main-section">
        <h2>SELECT COURSE</h2>

        <form class="couseselec" method="POST">
        <a href="./PlayersNameForm.php?course=MC">
            <div class="course1">
                <span class="text1">MARAUNDERS CHALLENGE</span>
            </div>
        </a>
        <a href="./PlayersNameForm.php?course=PP">
            <div class="course2">
                <span class="text1">THE PIRATES PLANK</span>
            </div>
        </a>
        </form>
    </div>


    <!-- main content end -->







    <script>
        const nav = document.getElementById("nav");
        const nav_image = document.getElementById("mb-nav");
        const nav_items = document.getElementById("nav-items");

        function displayNav(){
            if (nav_items.style.display === 'none'){
                nav_items.style.display = "block";
                nav_items.style.transition = "width 2s";
                nav_image.style.display = "none";

            }else{
                nav_items.style.display = "none";
                nav_image.style.display = "block";

            }
        }
        nav.addEventListener("click", displayNav);

    </script>
</body>
</html>