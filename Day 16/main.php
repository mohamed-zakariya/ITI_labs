<?php

class Database{
    public static function connectToDatabase($user, $password) {
        $dsn = 'mysql:dbname=php_db;host=localhost;port=3306';
        try {
            $pdo = new PDO($dsn, $user, $password);
            return $pdo;
        } catch (PDOException $e) {
            // Handle error by logging or displaying a helpful message
            echo "Connection failed: " . $e->getMessage();
            return null;
        } finally {
            // Close the database connection
            $pdo = null;
        }
    } 
    }
?>