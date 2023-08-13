<?php
namespace controller;

use \PDO;

abstract class Database{
    protected function connect(){
        try{
            $pdo = new PDO("mysql:host=localhost;dbname=pagina-institucional", 'dhiego', 'ganon1987');
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        } catch(PDOException $error){
            echo $error;
        }
    }
}