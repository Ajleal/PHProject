<?php

#conexao banco de dados php;

    $hostname = 'localhost';
    $database = 'dataprocuradoria';
    $username = 'root';
    $password = '';


    try{
        $conn = new PDO("mysql:host={$hostname}; dbname={$database}", $username, $password);
        $conn->exec("set names utf8");


    } catch (PDOException $e){
        echo $e->getMessage ();
    }


