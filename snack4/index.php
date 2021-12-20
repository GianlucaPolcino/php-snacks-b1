<?php

$randomArray = getRandomArray(1, 100, 15);

foreach($randomArray as $item){
    echo $item . '<br>';
};

function getRandomArray($min, $max, $nItems){

    $newArray = [];
  
    if(($max - $min) < $nItems){
      $nItems = $max - $min;
    }
  
    while(count($newArray) <  $nItems){
      $number = rand($min,$max);
      if(!in_array($number,$newArray)){
        $newArray[] = $number;
      }
  
    }
  
    return $newArray;
  
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 2</title>
</head>
<body>
    
</body>
</html>