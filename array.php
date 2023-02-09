<?php
//associative array
echo "<h2>Associative Array</h2>";

$car = ["model" => "BMW", "color" => "Black", "Speed" => "250kph"];
echo $car["model"];
echo "<hr>";
echo $car["color"];
echo "<hr>";
foreach ($car as $key => $property) {
    echo "$key $property <hr>";
}

//Multidimensional Array
echo "<h2>Multidimensional Array</h2>";
$birds = [
    [
        "name" => "Doyel",
        "color" => "Black",
        "Number" => 20
    ],
    [
        "name" => "Doyel",
        "color" => "Black",
        "Number" => 20
    ],
    [
        "name" => "Doyel",
        "color" => "Black",
        "Number" => 20
    ]
];
foreach ($birds as $bird) {
foreach ($bird as $key => $value) {
        echo "$key => $value <hr>";
}

}
echo $birds[2]["name"]

?>