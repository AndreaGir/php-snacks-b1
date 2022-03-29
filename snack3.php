<?php

$post = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

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

<h1>10/01/2019</h1>

<p> 
    <?php
        echo $post['10/01/2019'][0]['title']
    ?>
</p>
<p>
    <?php
        echo $post['10/01/2019'][0]['author']
    ?>
</p>
<p>
    <?php
        echo $post['10/01/2019'][0]['text']
    ?>
</p>

<h1>10/01/2019</h1>

<p> 
    <?php
        echo $post['10/01/2019'][1]['title']
    ?>
</p>
<p>
    <?php
        echo $post['10/01/2019'][1]['author']
    ?>
</p>
<p>
    <?php
        echo $post['10/01/2019'][1]['text']
    ?>
</p>

<h1>10/02/2019</h1>

<p> 
    <?php
        echo $post['10/02/2019'][0]['title']
    ?>
</p>
<p>
    <?php
        echo $post['10/02/2019'][0]['author']
    ?>
</p>
<p>
    <?php
        echo $post['10/02/2019'][0]['text']
    ?>
</p>

<h1>15/05/2019</h1>

<p> 
    <?php
        echo $post['15/05/2019'][0]['title']
    ?>
</p>
<p>
    <?php
        echo $post['15/05/2019'][0]['author']
    ?>
</p>
<p>
    <?php
        echo $post['15/05/2019'][0]['text']
    ?>
</p>
    
</body>
</html>