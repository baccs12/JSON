<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Jaeson-ToDo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<?php
/**
 * 1st
 */

// $trimmed = file('todo.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// echo $trimmed;

// var_dump($trimmed);

/**
 * 3rd
 */
// $line = file("todo.txt");
// var_dump(json_decode($line));
// var_dump($line);

/**
 * 2nd
 */

// $lines = file('todo.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

// foreach($lines as $line)
// {
//     // echo($line. "<br>");
//     var_dump($line);
// }

/**
 * 4th
 */

$file = "todo.txt";
$json = file_get_contents($file, $date);
$arr_data = json_decode($json, true);
echo '<pre>';
print_r($arr_data);

// foreach ($arr_data as $data => $file)
//     echo $arr_data ." " . $data. "<br>";



?>
</html>