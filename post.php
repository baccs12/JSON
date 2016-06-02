<?php


$file = "todo.txt";
$title = $_POST['title'];
$message = $_POST['message'];
$date = date("d/m/y : H:i:s", time());
$json = file_get_contents($file, $date);
$arr_data[] = json_decode($json, $date);
$arr_data[] = $_POST;
$json = json_encode($arr_data, JSON_PRETTY_PRINT);
 if(file_put_contents($file, $json, $date)) {
        var_dump($arr_data);
        echo 'Data successfully saved';
    }
    else
        echo "error";
