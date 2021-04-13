<?php
class Waifu_model {
    // private $wfu = [   
    //     [
    //         "nama" => "Keqing",
    //         "nis" => "181910065",
    //         "email" => "keqingwangy@gmail.com",
    //         "jurusan" => "RPL"
    //     ],

    //     [
    //         "nama" => "Ganyu",
    //         "nis" => "181910012",
    //         "email" => "ganyuwangy@gmail.com",
    //         "jurusan" => "MM"
    //     ],

    //     [
    //         "nama" => "Ayaka",
    //         "nis" => "181910044",
    //         "email" => "ayakagwangy@gmail.com",
    //         "jurusan" => "RPL"
    //     ],
    // ];

    private $dbh, $stmt; // database handler, statment

    public function __construct() {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch (PDOException $e) {
            die($e->getMessage);
        }
    }

    public function getAllWaifu() {
        $this->stmt = $this->dbh->prepare('SELECT * FROM waifu');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}