<?php

class DbConnexion
{
    private static string $DB_HOST = 'localhost';
    private static string $DB_NAME = 'locauto';
    private static string $DB_USER = 'root';
    private static string $DB_PASSWORD = '';
    private static PDO $connexion;

    private function __construct(){}

    public static function getConnexion(): PDO
    {
        if(!isset(self::$connexion)) {
            self::$connexion = new PDO('mysql:host='.self::$DB_HOST.';dbname='.self::$DB_NAME, self::$DB_USER, self::$DB_PASSWORD);
        }
        return self::$connexion;
    }
}