<?php
require('src/functions.php');
//Задача 1
echo "<h2>Задача 1</h2>" . PHP_EOL;
calc("+", 10, 5, 4);
calc("-", 10, 5, 4);
calc("*", 10, 5, 4);
calc("/", 10, 5, 4);
calc("/", 10, 5, 4, 0, 1);
//Задача 2
echo "<h2>Задача 2</h2>" . PHP_EOL;
xmlfileparse();
//Задача 3
echo "<h2>Задача 3</h2>" . PHP_EOL;
jsoned();
//Задача 4
echo "<h2>Задача 4</h2>" . PHP_EOL;
csvtask();
//Задача 5
echo "<h2>Задача 5</h2>" . PHP_EOL;
$data = curl('https://en.wikipedia.org/w/api.php','action=query&titles=Main Page&prop=revisions&rvprop=content&format=json');
$parsed_data = json_decode($data, true);
foreach ($parsed_data['query']['pages'] as $page) {
    echo 'Page ID: ' . $page['pageid'] . '<br>';
    echo 'Title: ' . $page['title'] . '<br>';
}
