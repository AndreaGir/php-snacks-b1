<?php

$nome = $_GET['nome'];

$email = $_GET['email'];

$age = $_GET['age'];

$chiocciola = strpos($email, '@');
    
$punto = strpos($email, '.');

$lunghezzaNome = strlen($nome)

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
    if($lunghezzaNome >= 3 && $chiocciola && $punto && is_numeric($age)){
        ?>
        <p>Accesso eseguito</p>
       <?php 
    }else{
        ?>
        <p>Accesso non eseguito</p>
       <?php
    }


?>
<!-- 
<p>
    <?php
        if($lunghezzaNome >= 3){
            ?>
            <p>nome più lungo di 3 caratteri</p>
           <?php 
        }else{
            ?>
            <p>nome più corto di 3 caratteri</p>
           <?php 
        }
        
    ?>
</p>
<p>
    <?php

    

        if($chiocciola && $punto){
            ?>
            email corretta 
            <?php
        }else{
            ?> no 
            <?php
            
        }
        
    ?>
</p>
<p>
    <?php
        if(is_numeric($age)){
            ?>
            <p>è un numero</p>
           <?php 
        }else{
            ?>
            <p>non è un numero</p>
           <?php 
        }
    ?>
</p> -->
    
</body>
</html>