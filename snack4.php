<?php

$numeriCasuali = [];

$numeriRandom = rand(1 , 100)



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

<?php

    echo $numeriRandom;

    $numeriPushati = array_push($numeriCasuali , $numeriRandom);

    for($numeriRandom = 0 ; $numeriRandom < 15 ; $numeriRandom++ );{
        var_dump($numeriCasuali);
    };

    

    
?>
    
</body>
</html>