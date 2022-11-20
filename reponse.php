<?php
$points=$_GET['points'];
if ($points==""){
    $points=0;
}
echo "<h1>Vous avez $points/1</h1>";
if ($points>=1) {
    echo "<br><h1>Vous avez gagné!</h1>";
} else {
    echo "<br><h1>Vous avez perdu</h1>";
}

?>