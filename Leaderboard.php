<?php

include_once("./includes/LeaderboardCheckNum.php");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaderboard</title>
</head>
<body>
    <h1 style="text-align: center;">LeaderBoard</h1>
<?php
$playerArray = [
    $_GET["p1n"] => $_GET["p1s"],
    "P2 score" => $_GET["p2s"],
    "P3 score" => $_GET["p3s"],
    "P4 score" => $_GET["p4s"],
    "P5 score" => $_GET["p5s"],
    "P6 score" => $_GET["p6s"],
];
asort($playerArray);

foreach($playerArray as $key => $val){
    if ($val == 0){
        continue;
    }


?>
<ol>
    <li><?php echo $key. " = ". $val;?></li>
</ol>


<?php } ?>
    
</body>
</html>