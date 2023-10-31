<?php
session_start();
$conn=mysqli_connect(
    'localhost',
    'root',
    '',
    'tarea'
);

if(isset($conn)){
    echo "DB is connected";
}
?>
