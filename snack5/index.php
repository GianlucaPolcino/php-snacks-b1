<?php

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Maiores quis vitae, expedita fugit eum adipisci ex. Quo id distinctio culpa numquam, doloribus recusandae aspernatur libero reiciendis, natus eum cupiditate accusamus.";

$stringInArray = explode('.', $string);

echo '<pre>';

var_dump($stringInArray);

echo '</pre>';

for($i = 0; $i < count($stringInArray); $i++){
    echo $stringInArray[$i] . '<br>';
};


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>

</body>
</html>