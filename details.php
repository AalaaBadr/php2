<?php
include_once 'db.php';

$i = $_GET['id'] - 1 ;

 echo "<link href='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css' rel='stylesheet' integrity='sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi' crossorigin='anonymous'>
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js' integrity='sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3' crossorigin='anonymous'></script>";

echo "
<div class='card' style='width: 500px ; margin: 50px ; text-align: center'>
    <img class='card-img-top' src=".$result[$i]['image']." alt='image' >
    <div class='card-body'>
      <h5 class='card-title'>".$result[$i]['name']."</h1>
      <h5 class='card-price'>".$result[$i]["price"]."</h5>
      <p class='card-text'>".$result[$i]['details']."</p>
    </div>
</div>
";