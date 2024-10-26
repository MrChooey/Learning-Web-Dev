<?php

session_start();

$_SESSION['id'] = $_GET['a'];

$array = [
    [
        'title' => 'Don Quixote',
        'author' => 'Miguel de Cervantes'
    ],
    [
        'title' => 'Pilgrim\'s Progress',
        'author' => 'John Bunyan'
    ],
    [
        'title' => 'Robinson Crusoe',
        'author' => 'Daniel Defoe'
    ],
    [
        'title' => 'Gulliver\'s Travels',
        'author' => 'Jonathan Swift'
    ],
    [
        'title' => 'Tom Jones',
        'author' => 'Henry Fielding'
    ]
];

?>

<html>

<head>
    <title>
        <?php echo $array[$_SESSION['id']]['title']; ?>
    </title>
</head>

<body>
    <p> <?php echo "The ID is " . $_SESSION['id'] . "."; ?> </p> <br>
    <p> <?php echo "The book you chose is ".$array[$_SESSION['id']]['title']; ?> </p>
    <a href="index.php"> Return </a>
</body>

</html>