<?php 

class Connection
{
    public PDO $pdo;

    public function __construct()
    {
        $this->pdo = new PDO("mysql:server=localhost;dbname=p10", "root", "");
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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