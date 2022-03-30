<?php

$classe = [
    [
        'nome' => 'mimmo',
        'cognome'=> 'roberto',
        'voti' => [31,22,28,34]
    ],
    [
        'nome' => 'franco',
        'cognome'=> 'gigini',
        'voti' => [30,22,58,27]
    ],
    [
        'nome' => 'andrea',
        'cognome'=> 'giro',
        'voti' => [30,29,28,32]
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

<?php

for($i= 0 ; $i < count($classe); $i++){
    $studente = $classe[$i];
    $voti = $studente['voti'];
?>
<p>
    <?php
    echo $studente['nome'] . ' ' .$studente['cognome']; array_sum($voti)/count($voti)
    ?>
</p>
   <?php 
}


?>
    
</body>
</html>