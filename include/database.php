<?php

    class Database {

        // Database Params
        private $host = "localhost";
        private $db_name = "phpshop";
        private $username = "root";
        private $password = "";

        private $conn;
        public function __construct() {
            try {
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            } catch (PDOException $exception) {
                echo "Connection error: " . $exception->getMessage();
            }
        }

        public function readCategories(){

            $query = "
            SELECT ID as id, Title as title, Image as image FROM `categories`
            ";

            $stmt = $this->conn->prepare($query);
            $stmt->execute();

            return $stmt;

        }

        public function readSubcategories(){

        }

    }
