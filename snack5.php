<?php

$paragrafo = 'Lorem ipsum dolor sit amet. consectetur adipisicing elit. 
Repellendus reiciendis delectus ad rerum modi. exercitationem inventore 
id earum est laudantium. nisi consequatur molestias eligendi laborum 
fugiat quae deserunt aperiam placeat a. Ducimus nobis, quos iusto quia quod nihil? 
Velit exercitationem totam ea cupiditate.
 pariatur fugiat eaque nemo repudiandae quibusdam architecto.';

$testo = explode('. ', $paragrafo);



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

 for($i = 0; $i < count($testo); $i++){
     ?>
<p>
<?php
echo $testo[$i]. '.';
?>
</p>

<?php
     
 };

?>


    
</body>
</html>