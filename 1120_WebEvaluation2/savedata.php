<?php
include 'database.php';
$obj=new Database();

$array= [
    'name'=>$_POST['ammar'],
    'reg'=>$_POST['1120'],
    'class'=>$_POST['class']
];

$obj->insert("20-1120", $array);
header("Location: index.php");
?>