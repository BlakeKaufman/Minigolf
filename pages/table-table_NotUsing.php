<?php
$hole1_p1score = "";
$hole1error = "";


if (($_SERVER["REQUEST_METHOD"] == "POST") && (isset($_POST["Submit"]))){
    if (empty($_POST["Hole1-p1"])){
        $hole1error = "Score Required";
    }else{
        $hole1_p1score = $_POST["Hole1-p1"];
        }
    echo $hole1error;
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="../resorces/css/table.css"> -->
    <title>Table</title>
</head>
<style>
*{
    margin: 0;
    box-sizing: border-box;
    font-size: 12px;
}

body{
    height: 100vh;
    width: 100%;
    background-color: darkgray;

}

h2{
    width: 95%;
    margin: 0 auto;
    margin-top: 90px;
    text-align: center;
    font-size: 1.75rem;
    margin-bottom: 10px;
}

/* table */
table td {
    text-align: center;
    padding: 0;
}
input{
    width: 100%;
    padding: 0;
    text-align: center;
    border-style: none;
}
table th{
    font-size: 12px;
    text-align: center;
    padding: 0;

}
table .sticky{
    position: sticky;
    position: -webkit-sticky;
    left:0;
    z-index: 5;
    background-color: black;
    color: white;
}
table .hole{
    background-color: blue;
    opacity: 0.4;
    color: white;
    width: 40px;

}
table .par{
    background-color: red;
    opacity: 0.4;
    color: white;
    width: 40px;
}

tr{
    display:inline-table;
    border-bottom: 3px solid black;
    width: 100%;

}

</style>
<body>
    <h2>MARAUDERS CHALLENGE</h2>
    <form action="" method="POST">
        <table>
            <tr>
                <th class="hole">HOLE</th>
                <th class="par">PAR</th>
                <th class="">AAA</th>
                <th class="">BBB</th>
                <th class="">CCC</th>
                <th>DDD</th>
                <th>EEE</th>
                <th>FFF</th>
            </tr>
            <tbody>
                <tr>
                    <td class="hole">1</td>
                    <td class="par">2</td>
                    <td>
                        <input type="number" id="Hole1-p1" name="Hole1-p1" value="<?php echo $hole1_p1score ?>">
                    </td>
                    <td>
                        <input type="number" id="Hole1-p2" name="Hole1-p2">
                    </td>
                    <td>
                        <input type="number" id="Hole1-p3" name="Hole1-p3">
                    </td>
                    <td>
                        <input type="number" id="Hole1-p4" name="Hole1-p4">
                    </td>
                    <td>
                        <input type="number" id="Hole1-p5" name="Hole1-p5">
                    </td>
                    <td>
                        <input type="number" id="Hole1-p6" name="Hole1-p6">
                    </td>
                </tr>
                <tr>
                    <td class="hole">2</td>
                    <td class="par">2</td>
                    <td>
                        <input type="number" id="Hole2" name="Hole2">
                    </td>
                    <td>
                        <input type="number" id="Hole" name="Hole2">
                    </td>
                    <td>
                        <input type="number" id="Hole3" name="Hole3">
                    </td>
                    <td>
                        <input type="number" id="Hole4" name="Hole4">
                    </td>
                    <td>
                        <input type="number" id="Hole5" name="Hole5">
                    </td>
                    <td>
                        <input type="number" id="Hole6" name="Hole6">
                    </td>
                </tr>
            </tbody>
        </table>
        <input class="submit" type="submit" value="Submit" name="Submit">
        <?php
        echo $hole1_p1score;

        ?>
    </form>
</body>
</html>