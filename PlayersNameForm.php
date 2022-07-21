<?php
// sending name 
$nameError = "";
if (isset($_POST["Submit"])){
    $p1_name = $_POST['P1-name'];
    $p2_name = $_POST['P2-name'];
    $p3_name = $_POST['P3-name'];
    $p4_name = $_POST['P4-name'];
    $p5_name = $_POST['P5-name'];
    $p6_name = $_POST['P6-name'];
    $course = $_GET['course'];

    // $players = 'ScorecardMC.php?';
    // if (!empty($p1_name)){
    //     $players .= 'p1='.$p1_name. '&';
    // }
    // if (!empty($p2_name)){
    //     $players .= 'p2='.$p2_name.'&';
    // }
    // if (!empty($p3_name)){
    //     $players .= 'p3='.$p3_name.'&';
    // }
    // if (!empty($p4_name)){
    //     $players .= 'p4='.$p4_name.'&';
    // }
    // if (!empty($p5_name)){
    //     $players .= 'p5='.$p5_name.'&';
    // }
    // if (!empty($p6_name)){
    //     $players .= 'p6='.$p6_name.'&';
    // }
    // $players .= 'course='.$course;

    echo "<script>window.open('ScorecardMC.php?p1=$p1_name&p2=$p2_name&p3=$p3_name&p4=$p4_name&p5=$p5_name&p6=$p6_name&course=$course','_self') </script>";

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="http://fonts.cdnfonts.com/css/blackpearl" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/490a4d8d3a78b2c0ba5e434c76234790?family=DIN+Alternate" rel="stylesheet" type="text/css"/>
    <link href="http://fonts.cdnfonts.com/css/din-condensed" rel="stylesheet">
    <link href="http://fonts.cdnfonts.com/css/gotham" rel="stylesheet">
    <link href="//db.onlinewebfonts.com/c/20b8e550dbac9d31e068a148a2393128?family=Minion+Pro" rel="stylesheet" type="text/css"/>
                
    <title>ENTER PLAYERS</title>
</head>
<style>
     html{
        min-width: 100%;
        background-image: url("./images/Map_Blue.jpeg");
        background-size: cover;
        background-repeat: no-repeat;
        background-position: left center;
        height: 100vh;
    }
    body{
        margin:0;
        box-sizing: border-box;
    }
    /* NAV BAR start */
    nav{
        display:flex;
        height: 18px;
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
        height: 40px;
    }
    /* NAV BAR END */

    h2{
        color: #13BBAF;
        letter-spacing: 2px;
        font-weight: 400;
        text-align: center;
        margin-bottom: 9vw
    }

    /* red dragon start */

    .reddragon{
        position: absolute;
        width: 100vw;
        top: -13vh;
        z-index: -1;
    }

    /* red dragon end */


    /* fomr start */
    form{
        display: flex;
        flex-direction: column;
        margin-top: 23vh;
        height: fit-content;
    }
    form h2{
        margin-top: 1vh;
        font-family: 'DIN Condensed', sans-serif;
        font-size: 8vw;
        letter-spacing: 2vw;

    }
    .form-field{
        align-items: center;
        justify-content: space-between;
        display: inline-flex;
        margin-bottom: 8.5vw;
    }
    .form-field label{
        background: blue;
        position: absolute;
        color: white;
        padding: 10px 12px;
        display:flex;
        align-items: center;
    }
    .form-field input{
        width: 90%;
        height: 25px;
        text-align: center;
        border-radius: 0px 20px 20px 0px;
        border: none;
    }
    .form-field img{
        left: -2vw;
        position: absolute;
        width: 28vw;
    }
    .player-flag{
        align-items: center;
        display: flex;
        background-image: url("./images/flag.svg");
        background-size: contain;
        position: absolute;
        background-repeat: no-repeat;
        height: 15vh;
        left: -2vw;
        width: 30vw;
    }
    .player-number{
        font-size: 7vw;
        color: white;
        margin-left: 3vw;
        display: inline-flex;
        align-items: center;
        width: 21vw;
        justify-content: space-between;

    }
    .blackPerl{
        font-family: 'BlackPearl', sans-serif;
        font-size: 3.75vw;
        opacity: 0.6;
    }

    /* submit button start */
    .submit-btn{
        display:flex;
        justify-content: center;
        align-items: center;
        width: 100%;
    }
    .submit-btn input{
        align-self: center;
        width: 175px;
        letter-spacing: 3px;
        border-style: none;
        border-radius: 20px;
        background-color: red;
        color: white;
        padding: 10px 50px;
    }

    /* glow effect start  */
    .glow {
        color: #fff;
        -webkit-animation: glow 1s ease-in-out infinite alternate;
        -moz-animation: glow 1s ease-in-out infinite alternate;
        animation: glow 1s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
  from {
    box-shadow: 0 0 1px #fff, 0 0 2px #fff, 0 0 3px red, 0 0 4px red, 0 0 5px red, 0 0 6px red, 0 0 7px red;
  }
  
  to {
    box-shadow: 0 0 4px #fff, 0 0 5px #f23939, 0 0 6px #f23939, 0 0 7px #f23939, 0 0 8px #f23939, 0 0 9px #f23939, 0 0 10px #f23939;
  }
}


    /* glow effect end */

    /* submit button end */


    /* form end */


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
    <img class="reddragon" src="./images/REd(1).svg" alt="">
    <!-- dragon image end -->



    <!-- form start -->
    <form action="" method="POST" id="form">
    <h2>ENTER PLAYERS</h2>
        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 1</span>
            </div>
            <input type="text" id="P1-name" name="P1-name" placeholder="PLAYER 1 NAME">
        </div>


        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 2</span>
            </div>
            <input type="text" id="P2-name" name="P2-name" placeholder="PLAYER 2 NAME">
        </div>

        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 3</span>
            </div>
            <input type="text" id="P3-name" name="P3-name" placeholder="PLAYER 3 NAME"> 
        </div>

        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 4</span>
            </div>
            <input type="text" id="P4-name" name="P4-name" placeholder="PLAYER 4 NAME">

        </div>

        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 5</span>
            </div>
            <input type="text" id="P5-name" name="P5-name" placeholder="PLAYER 5 NAME">
        </div>

        <div class="form-field">
            <div class="player-flag">
                <span class="player-number"><span class="blackPerl">Player</span> 6</span>
            </div>
            <input type="text" id="P6-name" name="P6-name" placeholder="PLAYER 6 NAME">
        </div>
        <div class="submit-btn">
            <input class="glow" type="Submit" name="Submit" value="BEGIN">
        </div>

    </form>
    <!-- form end  -->



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