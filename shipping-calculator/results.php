<?php
    $weight = $_GET["weight"];
    $distance = $_GET["distance"];
    $cost = calculateShipping($weight, $distance);
    function calculateShipping($weight, $distance)
    {
        $price = $weight/20 + $distance/20;
        return $price;
    }

?>

<!DOCTYPE html>
<html>
<head>
    <title>Shipping Costs</title>
</head>
<body>
    <h1>Your shipping costs:</h1>
    <p>A package weiging <?php echo $weight . " oz and travelling " . $distance . " miles will cost: " . $cost; ?></p>
</body>
</html>
