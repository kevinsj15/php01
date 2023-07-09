<?php
date_default_timezone_set('Asia/Tokyo');

$name = $_POST['name'];
$email = $_POST['email'];
$question1 = $_POST['question1'];
$question2 = $_POST['question2'];
$question3 = $_POST['question3'];
$timestamp = date("Y-m-d H:i:s");

$data = $name . "," . $email . "," . $question1 . "," . $question2 . "," . $question3 . "," . $timestamp . "\n";

$file = fopen('result.txt', 'a');
fwrite($file, $data);
fclose($file);

header('Location: read.php');
