<?php

$partite = [
    [
    'casa' => 'Basket Milano',
    'opsite' => 'Basket Roma',
    'punti_casa' => 45,
    'punti_opsite' => 21,
    ],
    [
    'casa' => 'Basket Geonoa',
    'opsite' => 'Francia',
    'punti_casa' => 90,
    'punti_opsite' => 12,
    ],
    [
    'casa' => 'Italia',
    'opsite' => 'Germania',
    'punti_casa' => 76,
    'punti_opsite' => 32,
    ],
    [
    'casa' => 'Lakers',
    'opsite' => 'Cittadella',
    'punti_casa' => 2,
    'punti_opsite' => 70,
    ],
    ]

?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>




<ul>

<?php
    for($i = 0; $i < count($partite); $i++){
        ?>
            <li>
            <?php
                echo $partite[$i]['casa'];
                ?>
                 - 
                 <?php
                 echo $partite[$i]['opsite'];
                 ?>
                  | 
                  <?php
                  echo $partite[$i]['punti_casa'];
                  ?>
                   - 
                   <?php
                   echo $partite[$i]['punti_opsite'];
            ?>
            </li>
        <?php
    };
?>
    

    
</ul>


    
</body>
</html>