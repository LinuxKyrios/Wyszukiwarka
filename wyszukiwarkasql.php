<?php
session_start();
    //Połączenie z bazą danych.
    $db = mysqli_connect('localhost', 'root', '', 'shop');
    //Sprawdzenie połączenia
    if (mysqli_connect_errno()) {
       echo "Błąd połączenia z bazą danych MySQL: " . mysqli_connect_error();
    }
?>