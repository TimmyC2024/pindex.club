<?php 

class Connection
{
    public PDO $pdo;

    public function __construct()
    {
        if ($_SERVER["SERVER_NAME"] == "localhost") {
            echo "<p class='debug'>Connection going " . $_SERVER["SERVER_NAME"] . "[local]</p>";
            $this->pdo = new PDO("mysql:host=localhost;dbname=p10", "root", "");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } else {
            echo "<p class='debug'>Connection going " . $_SERVER["SERVER_NAME"] . "[web]</p>" ;
            $this->pdo = new PDO("mysql:host=mysql10.iomart.com;dbname=carrww135;port=3306", "carrww135", "timgy418");
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
    }

    public function getBarcodes()
    {
        $statement = $this->pdo->prepare("SELECT * FROM parkrunners ORDER BY pindex DESC");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    
    public function getBarcode($barcode)
    {
        $statement = $this->pdo->prepare("SELECT * FROM parkrunners WHERE barcode = :barcode");
        $statement->bindValue('barcode', $barcode);
        $statement->execute();
        return $statement->fetch(PDO::FETCH_ASSOC);
    }

}
return new Connection();