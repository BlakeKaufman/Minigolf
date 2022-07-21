<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resorces/css/login.css">
    <link href="http://fonts.cdnfonts.com/css/blackpearl" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/490a4d8d3a78b2c0ba5e434c76234790?family=DIN+Alternate" rel="stylesheet" type="text/css"/>
    <link href="//db.onlinewebfonts.com/c/d45f96029e61832fd84afffd3068b768?family=DIN+Condensed" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/20b8e550dbac9d31e068a148a2393128?family=Minion+Pro" rel="stylesheet" type="text/css"/>
    <title>Login</title>
</head>
<style>
    /* backgroun styleing */
    html{
        min-width: 100%;
        background-image: url("./images/homeimg.jpg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center center;
        height: 100vh;
    }
    body{
        margin:0;
        box-sizing: border-box;
    }
/* NAV BAR start */
.change-my-color {
  fill: white;
}
    nav{
        display:flex;
        height: 4vh;
        justify-content: right;
        text-align: left;
        letter-spacing: 4px;
        margin-top: 7vw;
        margin-right: 10px;
    }
    #nav-items{
        width: 80%;
        right: 0;
        display: none;
        position: absolute;
        z-index: 5;
        list-style: inside;
        list-style-type: none;
        background-color: red;
        opacity: .9;
        border-radius: 20px 0px 0px 20px;
    }
    .CouseMap-img{
        width: 100%;
        display: flex;
        padding-top: 12vh;
        margin-bottom: 4vh;
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
        font-size: 7vw; 
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
        font-size: 6.5vw;
    }
    #mb-nav{
        display: block;
        margin-left: 94%;
        height: 40px
    }
    /* NAV BAR END */
    .main-section{
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .logo{
        height: 45vh;
        margin-top: 2vh;
    }
    .button{
        width: 35vw;
        display: flex;
        flex-direction: column;
        align-items: center;
        font-family: 'Gotham Book', sans-serif;
    }
    .btn-style{
        width: 100%;
        text-align: center;
        padding: 6px 18px;
        border-radius: 50px;
    }
    .red{
        background-color: red;
        color: white;
    }
    .gray{
        background-color: rgb(65, 85, 100);
        color: white;
    }
    .mb{
        margin-bottom: 1.5vh;
    }
    a{
        color:white;
        text-decoration: none;
    }

    </style>
<body>
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
                <li><a href="#" style="font-size:4vw; color: orange;">RULES</a></li>
            </div>
            <div class="list-style" style="padding-bottom: 7vh;">
                <img src="./images/reshot-icon-bold-right-arrow-STPW6DFVRY-7b0dbOrange.svg" alt="map icon">
                <li style="border-bottom: none;"><a href="#" style="font-size:4vw; color: orange;">WAIVER</a></li>
            </div>
        </ul>
        <img id="mb-nav" src="./images/list(1).svg" alt="Hamburger icon for navigation">
    </nav>
    <!-- end of nav bar -->
    <div class="main-section">
        <img class="logo" src="./images/Logowithlabel.png" alt="a skull with two swoards coming out of it">

        <div class="button">
            <span class="btn-style red mb"><a href="./SelectCourse.php">START ROUND</a></span>
            <span class="btn-style gray">LOG IN</span>
        </div>

    </div>








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