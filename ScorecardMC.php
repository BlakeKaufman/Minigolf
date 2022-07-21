<?php
include_once("./includes/Scorecardcalc.php");
include_once("./includes/testNamefunc.php");
include_once("./includes/ScoreCardcalc_secondnine.php");

// setting up name
$p1_name = $_GET["p1"];
$p2_name = $_GET["p2"];
$p3_name = $_GET["p3"];
$p4_name = $_GET["p4"];
$p5_name = $_GET["p5"];
$p6_name = $_GET["p6"];


// Ending name 


// scoreing and sending to leaderboard
// first nine
$p1score = 0;
$p2score = 0;
$p3score = 0;
$p4score = 0;
$p5score = 0;
$p6score = 0;

// second nine
$p1score_snine = 0;
$p2score_snine = 0;
$p3score_snine = 0;
$p4score_snine = 0;
$p5score_snine = 0;
$p6score_snine = 0;


if (isset($_POST["Calc-score"]) || isset($_POST["Move-on"])){
    $GLOBALS["p1score"] = calculateScorep1_nine(
        $_POST["Hole1-p1"],
        $_POST["Hole2-p1"],
        $_POST["Hole3-p1"],
        $_POST["Hole4-p1"],
        $_POST["Hole5-p1"],
        $_POST["Hole6-p1"],
        $_POST["Hole7-p1"],
        $_POST["Hole8-p1"],
        $_POST["Hole9-p1"]
    );
    $GLOBALS["p1score_snine"] = calculateScorep1_snine(
        $_POST["Hole10-p1"],
        $_POST["Hole11-p1"],
        $_POST["Hole12-p1"],
        $_POST["Hole13-p1"],
        $_POST["Hole14-p1"],
        $_POST["Hole15-p1"],
        $_POST["Hole16-p1"],
        $_POST["Hole17-p1"],
        $_POST["Hole18-p1"]
    );
    $GLOBALS["p2score"] = calculateScorep2_nine(
        $_POST["Hole1-p2"],
        $_POST["Hole2-p2"],
        $_POST["Hole3-p2"],
        $_POST["Hole4-p2"],
        $_POST["Hole5-p2"],
        $_POST["Hole6-p2"],
        $_POST["Hole7-p2"],
        $_POST["Hole8-p2"],
        $_POST["Hole9-p2"]
    );
    $GLOBALS["p2score_snine"] = calculateScorep2_snine(
        $_POST["Hole10-p2"],
        $_POST["Hole11-p2"],
        $_POST["Hole12-p2"],
        $_POST["Hole13-p2"],
        $_POST["Hole14-p2"],
        $_POST["Hole15-p2"],
        $_POST["Hole16-p2"],
        $_POST["Hole17-p2"],
        $_POST["Hole18-p2"]
    );
    $GLOBALS["p3score"] = calculateScorep3_nine(
        $_POST["Hole1-p3"],
        $_POST["Hole2-p3"],
        $_POST["Hole3-p3"],
        $_POST["Hole4-p3"],
        $_POST["Hole5-p3"],
        $_POST["Hole6-p3"],
        $_POST["Hole7-p3"],
        $_POST["Hole8-p3"],
        $_POST["Hole9-p3"]
    );
    $GLOBALS["p3score_snine"] = calculateScorep3_snine(
        $_POST["Hole10-p3"],
        $_POST["Hole11-p3"],
        $_POST["Hole12-p3"],
        $_POST["Hole13-p3"],
        $_POST["Hole14-p3"],
        $_POST["Hole15-p3"],
        $_POST["Hole16-p3"],
        $_POST["Hole17-p3"],
        $_POST["Hole18-p3"]
    );
    $GLOBALS["p4score"] = calculateScorep4_nine(
        $_POST["Hole1-p4"],
        $_POST["Hole2-p4"],
        $_POST["Hole3-p4"],
        $_POST["Hole4-p4"],
        $_POST["Hole5-p4"],
        $_POST["Hole6-p4"],
        $_POST["Hole7-p4"],
        $_POST["Hole8-p4"],
        $_POST["Hole9-p4"]
    );
    $GLOBALS["p4score_snine"] = calculateScorep4_snine(
        $_POST["Hole10-p4"],
        $_POST["Hole11-p4"],
        $_POST["Hole12-p4"],
        $_POST["Hole13-p4"],
        $_POST["Hole14-p4"],
        $_POST["Hole15-p4"],
        $_POST["Hole16-p4"],
        $_POST["Hole17-p4"],
        $_POST["Hole18-p4"]
    );
    $GLOBALS["p5score"] = calculateScorep5_nine(
        $_POST["Hole1-p5"],
        $_POST["Hole2-p5"],
        $_POST["Hole3-p5"],
        $_POST["Hole4-p5"],
        $_POST["Hole5-p5"],
        $_POST["Hole6-p5"],
        $_POST["Hole7-p5"],
        $_POST["Hole8-p5"],
        $_POST["Hole9-p5"]
    );
    $GLOBALS["p5score_snine"] = calculateScorep5_snine(
        $_POST["Hole10-p5"],
        $_POST["Hole11-p5"],
        $_POST["Hole12-p5"],
        $_POST["Hole13-p5"],
        $_POST["Hole14-p5"],
        $_POST["Hole15-p5"],
        $_POST["Hole16-p5"],
        $_POST["Hole17-p5"],
        $_POST["Hole18-p5"]
    );
    $GLOBALS["p6score"] = calculateScorep6_nine(
        $_POST["Hole1-p6"],
        $_POST["Hole2-p6"],
        $_POST["Hole3-p6"],
        $_POST["Hole4-p6"],
        $_POST["Hole5-p6"],
        $_POST["Hole6-p6"],
        $_POST["Hole7-p6"],
        $_POST["Hole8-p6"],
        $_POST["Hole9-p6"]
    );
    $GLOBALS["p6score_snine"] = calculateScorep6_snine(
        $_POST["Hole10-p6"],
        $_POST["Hole11-p6"],
        $_POST["Hole12-p6"],
        $_POST["Hole13-p6"],
        $_POST["Hole14-p6"],
        $_POST["Hole15-p6"],
        $_POST["Hole16-p6"],
        $_POST["Hole17-p6"],
        $_POST["Hole18-p6"]
    );

    if(isset($_POST["Move-on"])){
        $p1_totalscore = $p1score + $p1score_snine;
        $p2_totalscore = $p2score + $p2score_snine;
        echo "<script>window.open('LeaderboardNew.php?p1s=$p1_totalscore&p1n=$p1_name&p2s=$p2score&p2n=$p2_name&p3s=$p3score&p3n=$p3_name&p4s=$p4score&p4n=$p4_name&p5s=$p5score&p5n=$p5_name&p6s=$p6score&p6n=$p6_name','_self')</script>";
    }

}

// end of scoring and sending to leaderboard

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
    <title>Table</title>
</head>
<style>
    html{
        min-width: 100%;
        background-image: url("./images/Map_Blue.jpeg");
        background-size: cover;
        background-repeat: repeat-y;
        background-position: left center;
        height: 100vh;
    }
    *{
    margin: 0;
    box-sizing: border-box;
    font-size: 12px;
}


body{
    height: 100vh;
    box-sizing: border-box;
}
    /* NAV BAR start */
    nav{
        width: 100%;
        display:inline-flex;
        justify-content: space-between;
        align-items: center;
        text-align: left;
        letter-spacing: 4px;
        margin-top: 4vh;
        height: 5vh;
    }
    #nav-items{
        width: 85%;
        right: 0;
        top: 0;
        display: none;
        position: absolute;
        z-index: 5;
        list-style: inside;
        list-style-type: none;
        background-color: red;
        opacity: .9;
        border-radius: 20px 0px 0px 20px;
        margin-top: 10vw;
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
        height: 40px;
    }
    /* NAV BAR END */

    /* red dragon start */
    .reddragon{
        position: absolute;
        width: 100vw;
        top: -31vw;
        left: 0;
        z-index: -1;
    }

    /* red dragon end */
    .course{
        font-size: 18px;
        margin-left: 3vw;
        color: lightgray;
        display: inline-flex;
    }
    .course2{
        font-size: 18px;
        margin-left: 3vw;
    }

.number1-h3{
    text-align: center;
    font-size: 5vw;
    border-radius: 50%;
    background-color: orange;
    padding-left: 4px;
    width: 6vw;
    height: 100%;
}
.number2-h3{
    text-align: center;
    font-size: 5vw;
    border-radius: 50%;
    background-color: lightblue;
    padding-left: 4px;
    width: 6vw;
    height: 100%;
    color: black;
}

h2{
    width: 95%;
    margin: 0 auto;
    text-align: center;
    font-size: 1.75rem;
    margin-bottom: 10px;
}
.PP-h2{
    width: 95%;
    margin: 0 auto;
    text-align: center;
    font-size: 1.75rem;
    margin-bottom: 10px;
    color: lightblue;
}
/* grid */
.grid-container{
    display:grid;
    grid-template-columns: repeat(2, 0.65fr) repeat(6, 1fr);
    text-align: center;
    height: 100%;
    overflow: scroll;
    width: 100vw;
    

}
.grid-items{
    display: flex;
    align-items: center;
    justify-content: center;
    border-right: 1px solid white;
    border-bottom: 1px solid white;
    font-size: 1.25rem;

}
.th{
    background-color: white;
    color: black;
    border-style: none;
}
.hole{
    background-color: blue;
    opacity: 0.4;
    color: white;
    height: 30px;
    width: 40px;
    border-right: none;
}
.par{
    background-color: #A60C34;
    opacity: 0.4;
    color: white;
    height: 30px;
    width: 40px;
    border-right: none;

}
input{
    border-style: none;
    padding: 0;
    width:100%;
    text-align: center;
    height: 100%;
    color: black;
    opacity: 0.6;
}
form{
    width: 100%;
    margin-top: 18vh;
    height: 60vh;
}
form h2{
    color: orange;
}
.buttons{
    width:90%;
    margin: 10px 0 0 5%;
    display:inline-flex;
    justify-content: space-between;
    text-align: center;
}
.button{
    width: 45%;
    font-size: 3vw;
    padding: 10px;
    border-radius: 10px;
    background-color: red;
    color: white;
    opacity: 1;
    font-family: 'Gotham Book', sans-serif;
}
/* grid styleing strat */

.mb-2{
    margin-bottom: 2px;
}
.darkblue-row{
    background-color: #0089B7;
    opacity: 0.6;
}
.lightblue-row{
    background-color: #00BFFF;
    opacity: 0.6;
}
.score-row{
    background-color: white;
}
.static{
    position: sticky;
    top: 0;
    opacity: 1;
    z-index: 1;
}
.gray{
    background: #ECF0F1;
}

/* grid styling end */

</style>
<body>
     <!-- start of nav bar -->
     <nav id="nav">

         <?php 
         if ($_GET['course'] === 'MC'){

         ?>
        <h3 class="course">COURSE <div class="number1-h3">1</div></h3>

     <?php } else if ($_GET['course'] === 'PP'){ ?>
        <h3 class="course">COURSE <div class="number2-h3">2</div></h3>
     <?php  } ?>
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

    <form action="" method="POST">

    <?php 
        if ($_GET['course'] === 'MC'){

    ?>
        <h2>MARAUDERS CHALLENGE</h2>

    <?php } else{ ?>
        <h2 class="PP-h2">THE PIRATES PLANK</h2>
    <?php  } ?>
        <div class="grid-container">
            <div class="grid-items hole mb-2 static">Hole</div>
            <div class="grid-items par mb-2 static">Par</div>
            <div class="grid-items th mb-2 static gray"><?php echo $p1_name; ?></div>
            <div class="grid-items th mb-2 static gray"><?php echo $p2_name; ?></div>
            <div class="grid-items th mb-2 static gray"><?php echo $p3_name; ?></div>
            <div class="grid-items th mb-2 static gray"><?php echo $p4_name; ?></div>
            <div class="grid-items th mb-2 static gray"><?php echo $p5_name; ?></div>
            <div class="grid-items th mb-2 static gray"><?php echo $p6_name; ?></div>
            <!-- row 1 -->
            <div class="grid-items hole">1</div>
            <div class="grid-items par">2</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p1" value="<?php echo $_POST["Hole1-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p2" value="<?php echo $_POST["Hole1-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p3" value="<?php echo $_POST["Hole1-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p4" value="<?php echo $_POST["Hole1-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p5" value="<?php echo $_POST["Hole1-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole1-p1" name="Hole1-p6" value="<?php echo $_POST["Hole1-p6"] ?>"></div>
            <!-- row 2 -->
            <div class="grid-items hole">2</div>
            <div class="grid-items par">2</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p1" name="Hole2-p1" value="<?php echo $_POST["Hole2-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p2" name="Hole2-p2" value="<?php echo $_POST["Hole2-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p3" name="Hole2-p3" value="<?php echo $_POST["Hole2-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p4" name="Hole2-p4" value="<?php echo $_POST["Hole2-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p5" name="Hole2-p5" value="<?php echo $_POST["Hole2-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole2-p6" name="Hole2-p6" value="<?php echo $_POST["Hole2-p6"] ?>"></div>
            <!-- row 3 -->
            <div class="grid-items hole">3</div>
            <div class="grid-items par">2</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p1" name="Hole3-p1" value="<?php echo $_POST["Hole3-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p2" name="Hole3-p2" value="<?php echo $_POST["Hole3-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p3" name="Hole3-p3" value="<?php echo $_POST["Hole3-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p4" name="Hole3-p4" value="<?php echo $_POST["Hole3-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p5" name="Hole3-p5" value="<?php echo $_POST["Hole3-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole3-p6" name="Hole3-p6" value="<?php echo $_POST["Hole3-p6"] ?>"></div>
            <!-- row 4 -->
            <div class="grid-items hole">4</div>
            <div class="grid-items par">3</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p1" name="Hole4-p1" value="<?php echo $_POST["Hole4-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p2" name="Hole4-p2" value="<?php echo $_POST["Hole4-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p3" name="Hole4-p3" value="<?php echo $_POST["Hole4-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p4" name="Hole4-p4" value="<?php echo $_POST["Hole4-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p5" name="Hole4-p5" value="<?php echo $_POST["Hole4-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole4-p6" name="Hole4-p6" value="<?php echo $_POST["Hole4-p6"] ?>"></div>
            <!-- row 5 -->
            <div class="grid-items hole">5</div>
            <div class="grid-items par">2</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p1" name="Hole5-p1" value="<?php echo $_POST["Hole5-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p2" name="Hole5-p2" value="<?php echo $_POST["Hole5-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p3" name="Hole5-p3" value="<?php echo $_POST["Hole5-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p4" name="Hole5-p4" value="<?php echo $_POST["Hole5-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p5" name="Hole5-p5" value="<?php echo $_POST["Hole5-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole5-p6" name="Hole5-p6" value="<?php echo $_POST["Hole5-p6"] ?>"></div>
            <!-- row 6 -->
            <div class="grid-items hole">6</div>
            <div class="grid-items par">3</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p1" name="Hole6-p1" value="<?php echo $_POST["Hole6-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p2" name="Hole6-p2" value="<?php echo $_POST["Hole6-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p3" name="Hole6-p3" value="<?php echo $_POST["Hole6-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p4" name="Hole6-p4" value="<?php echo $_POST["Hole6-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p5" name="Hole6-p5" value="<?php echo $_POST["Hole6-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole6-p6" name="Hole6-p6" value="<?php echo $_POST["Hole6-p6"] ?>"></div>
            <!-- row 7 -->
            <div class="grid-items hole">7</div>
            <div class="grid-items par">4</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p1" name="Hole7-p1" value="<?php echo $_POST["Hole7-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p2" name="Hole7-p2" value="<?php echo $_POST["Hole7-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p3" name="Hole7-p3" value="<?php echo $_POST["Hole7-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p4" name="Hole7-p4" value="<?php echo $_POST["Hole7-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p5" name="Hole7-p5" value="<?php echo $_POST["Hole7-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole7-p6" name="Hole7-p6" value="<?php echo $_POST["Hole7-p6"] ?>"></div>
            <!-- row 8 -->
            <div class="grid-items hole">8</div>
            <div class="grid-items par">5</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p1" name="Hole8-p1" value="<?php echo $_POST["Hole8-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p2" name="Hole8-p2" value="<?php echo $_POST["Hole8-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p3" name="Hole8-p3" value="<?php echo $_POST["Hole8-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p4" name="Hole8-p4" value="<?php echo $_POST["Hole8-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p5" name="Hole8-p5" value="<?php echo $_POST["Hole8-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole8-p6" name="Hole8-p6" value="<?php echo $_POST["Hole8-p6"] ?>"></div>
            <!-- row 9 -->
            <div class="grid-items hole">9</div>
            <div class="grid-items par">5</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p1" name="Hole9-p1" value="<?php echo $_POST["Hole9-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p2" name="Hole9-p2" value="<?php echo $_POST["Hole9-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p3" name="Hole9-p3" value="<?php echo $_POST["Hole9-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p4" name="Hole9-p4" value="<?php echo $_POST["Hole9-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p5" name="Hole9-p5" value="<?php echo $_POST["Hole9-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole9-p6" name="Hole9-p6" value="<?php echo $_POST["Hole9-p6"] ?>"></div>
            <!-- row 10 total -->
            <div class="grid-items hole">Total:</div>
            <div class="grid-items par">28</div>
            <div class="grid-items score-row gray"><?php if($p1score != 0){ echo $p1score; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p2score != 0){ echo $p2score; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p3score != 0){ echo $p3score; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p4score != 0){ echo $p4score; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p5score != 0){ echo $p5score; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p6score != 0){ echo $p6score; } else{ echo"<p> NA </p>"; } ?></div>

            <!-- Second 9 holes  -->

             <!-- row 10 -->
             <div class="grid-items hole">1</div>
            <div class="grid-items par">2</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p1" name="Hole10-p1" value="<?php echo $_POST["Hole10-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p2" name="Hole10-p2" value="<?php echo $_POST["Hole10-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p3" name="Hole10-p3" value="<?php echo $_POST["Hole10-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p4" name="Hole10-p4" value="<?php echo $_POST["Hole10-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p5" name="Hole10-p5" value="<?php echo $_POST["Hole10-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole10-p6" name="Hole10-p6" value="<?php echo $_POST["Hole10-p6"] ?>"></div>
            <!-- row 11 -->
            <div class="grid-items hole">2</div>
            <div class="grid-items par">2</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p1" name="Hole11-p1" value="<?php echo $_POST["Hole11-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p2" name="Hole11-p2" value="<?php echo $_POST["Hole11-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p3" name="Hole11-p3" value="<?php echo $_POST["Hole11-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p4" name="Hole11-p4" value="<?php echo $_POST["Hole11-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p5" name="Hole11-p5" value="<?php echo $_POST["Hole11-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole11-p6" name="Hole11-p6" value="<?php echo $_POST["Hole11-p6"] ?>"></div>
            <!-- row 12 -->
            <div class="grid-items hole">3</div>
            <div class="grid-items par">2</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p1" name="Hole12-p1" value="<?php echo $_POST["Hole12-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p2" name="Hole12-p2" value="<?php echo $_POST["Hole12-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p3" name="Hole12-p3" value="<?php echo $_POST["Hole12-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p4" name="Hole12-p4" value="<?php echo $_POST["Hole12-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p5" name="Hole12-p5" value="<?php echo $_POST["Hole12-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole12-p6" name="Hole12-p6" value="<?php echo $_POST["Hole12-p6"] ?>"></div>
            <!-- row 13 -->
            <div class="grid-items hole">4</div>
            <div class="grid-items par">3</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p1" name="Hole13-p1" value="<?php echo $_POST["Hole13-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p2" name="Hole13-p2" value="<?php echo $_POST["Hole13-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p3" name="Hole13-p3" value="<?php echo $_POST["Hole13-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p4" name="Hole13-p4" value="<?php echo $_POST["Hole13-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p5" name="Hole13-p5" value="<?php echo $_POST["Hole13-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole13-p6" name="Hole13-p6" value="<?php echo $_POST["Hole13-p6"] ?>"></div>
            <!-- row 14 -->
            <div class="grid-items hole">5</div>
            <div class="grid-items par">2</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p1" name="Hole14-p1" value="<?php echo $_POST["Hole14-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p2" name="Hole14-p2" value="<?php echo $_POST["Hole14-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p3" name="Hole14-p3" value="<?php echo $_POST["Hole14-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p4" name="Hole14-p4" value="<?php echo $_POST["Hole14-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p5" name="Hole14-p5" value="<?php echo $_POST["Hole14-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole14-p6" name="Hole14-p6" value="<?php echo $_POST["Hole14-p6"] ?>"></div>
            <!-- row 15 -->
            <div class="grid-items hole">6</div>
            <div class="grid-items par">3</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p1" name="Hole15-p1" value="<?php echo $_POST["Hole15-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p2" name="Hole15-p2" value="<?php echo $_POST["Hole15-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p3" name="Hole15-p3" value="<?php echo $_POST["Hole15-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p4" name="Hole15-p4" value="<?php echo $_POST["Hole15-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p5" name="Hole15-p5" value="<?php echo $_POST["Hole15-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole15-p6" name="Hole15-p6" value="<?php echo $_POST["Hole15-p6"] ?>"></div>
            <!-- row 16 -->
            <div class="grid-items hole">7</div>
            <div class="grid-items par">4</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p1" name="Hole16-p1" value="<?php echo $_POST["Hole16-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p2" name="Hole16-p2" value="<?php echo $_POST["Hole16-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p3" name="Hole16-p3" value="<?php echo $_POST["Hole16-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p4" name="Hole16-p4" value="<?php echo $_POST["Hole16-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p5" name="Hole16-p5" value="<?php echo $_POST["Hole16-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole16-p6" name="Hole16-p6" value="<?php echo $_POST["Hole16-p6"] ?>"></div>
            <!-- row 17 -->
            <div class="grid-items hole">8</div>
            <div class="grid-items par">5</div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p1" name="Hole17-p1" value="<?php echo $_POST["Hole17-p1"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p2" name="Hole17-p2" value="<?php echo $_POST["Hole17-p2"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p3" name="Hole17-p3" value="<?php echo $_POST["Hole17-p3"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p4" name="Hole17-p4" value="<?php echo $_POST["Hole17-p4"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p5" name="Hole17-p5" value="<?php echo $_POST["Hole17-p5"] ?>"></div>
            <div class="grid-items darkblue-row"><input type="number" id="Hole17-p6" name="Hole17-p6" value="<?php echo $_POST["Hole17-p6"] ?>"></div>
            <!-- row 18 -->
            <div class="grid-items hole">9</div>
            <div class="grid-items par">5</div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p1" name="Hole18-p1" value="<?php echo $_POST["Hole18-p1"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p2" name="Hole18-p2" value="<?php echo $_POST["Hole18-p2"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p3" name="Hole18-p3" value="<?php echo $_POST["Hole18-p3"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p4" name="Hole18-p4" value="<?php echo $_POST["Hole18-p4"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p5" name="Hole18-p5" value="<?php echo $_POST["Hole18-p5"] ?>"></div>
            <div class="grid-items lightblue-row"><input type="number" id="Hole18-p6" name="Hole18-p6" value="<?php echo $_POST["Hole18-p6"] ?>"></div>
            <!-- row 19 total -->
            <div class="grid-items hole">Total:</div>
            <div class="grid-items par">28</div>
            <div class="grid-items score-row gray"><?php if($p1score_snine != 0){ echo $p1score_snine; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p2score_snine != 0){ echo $p2score_snine; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p3score_snine != 0){ echo $p3score_snine; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p4score_snine != 0){ echo $p4score_snine; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p5score_snine != 0){ echo $p5score_snine; } else{ echo"<p> NA </p>"; } ?></div>
            <div class="grid-items score-row gray"><?php if($p6score_snine != 0){ echo $p6score_snine; } else{ echo"<p> NA </p>"; } ?></div>
        </div>

        <div class="buttons">
            <input class="button" type="Submit" name="Calc-score" value="Calculate Current Score">
            <input class="button" type="Submit" name="Move-on" value="See Winner">
        </div>
    </form>

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