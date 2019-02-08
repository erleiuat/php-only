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

    public function readType(){

        $query = "SELECT ID as id, Title as title FROM `types`";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        return $stmt;

    }

    public function readCategory($type = false, $id = false){

        $query = "
        SELECT cat.ID as id, cat.Title as title, cat.Image as image, COUNT(item.ID) AS itemcount FROM categories AS cat
        LEFT JOIN subcategories As subcat ON subcat.CategoryID = cat.ID
        LEFT JOIN items AS item ON item.SubcategoryID = subcat.ID";
        if($id){
            $query .= " WHERE cat.ID = ?";
        } else if($type){
            $query .= " WHERE cat.TypeID = ?";
        }
        $query .= " GROUP BY cat.ID";

        $stmt = $this->conn->prepare($query);

        if($id){
            $stmt->bindParam(1, $id);
            $stmt->execute();
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else if($type){
            $stmt->bindParam(1, $type);
            $stmt->execute();
            return $stmt;
        } else {
            $stmt->execute();
            return $stmt;
        }


    }

    public function readSubcategory($categorie = false, $id = false){

        $query = "
        SELECT subcat.ID as id, subcat.Title as title, COUNT(item.ID) as itemcount FROM subcategories AS subcat
        LEFT JOIN items AS item ON item.SubcategoryID = subcat.ID ";
        if($id){
            $query .= " WHERE subcat.ID = ?";
        } else if($categorie){
            $query .= "WHERE subcat.CategoryID = ? ";
        }
        $query .= "GROUP BY subcat.ID";


        $stmt = $this->conn->prepare($query);
        if($id){
            $stmt->bindParam(1, $id);
        } else if($categorie){
            $stmt->bindParam(1, $categorie);
        }
        $stmt->execute();

        if($id){
            return $stmt->fetch(PDO::FETCH_ASSOC);
        } else {
            return $stmt;
        }

    }

    public function readItems($categorie, $subcategorie = false){

        $query = "
        SELECT item.ID as id, item.Title as title, item.Image as image, item.Price as price FROM `items` As item
        LEFT JOIN subcategories AS subcat ON subcat.ID = item.SubcategoryID
        WHERE subcat.CategoryID = ?
        ";

        if($subcategorie){
            $query .= " AND SubcategoryID = ?";
        }

        $query .= "GROUP BY ID";


        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $categorie);
        if($subcategorie){
            $stmt->bindParam(2, $subcategorie);
        }
        $stmt->execute();

        return $stmt;

    }

}
