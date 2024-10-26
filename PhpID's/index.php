<?php

session_start();

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

// Assign incremental IDs
foreach ($array as $key => $value) {
    $array[$key]['id'] = $key;
}

?>

<html>

<head>
    <title> First Index </title>
</head>

<body>
    <?php
    $_SESSION['id'] = '';
    ?>

    <?php foreach ($array as $book): ?>
        <a href="details.php?a=<?php echo $book['id']; ?>"> Click me to see <?php echo $book['title']; ?> </a><br>
    <?php endforeach; ?>
</body>

</html>