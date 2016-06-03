<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title>Jaeson-ToDo</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>
<?php

$date = date_create();
$file = "todo.txt";
$title = $_POST['title'];
$message = $_POST['message'];
$date = $_POST['date'];
$json = file_get_contents($file, $date);
$arr_data = json_decode($json, $date);
$arr_data[] = $_POST;
$json = json_encode($arr_data, JSON_PRETTY_PRINT);
 if(file_put_contents($file, $json, $date)) {
        echo '<pre>';
        print_r($arr_data);
        var_dump($date);
        echo 'Data successfully saved';
    }
    else
        echo "error";
?>
</html>