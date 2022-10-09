<?php

class Mahasiswa_model
{
    private $dbh;
    private $stmt;

    public function __construct()
    {
        // data source name
        $dsn = 'mysql:host=localhost;dbname=phpmvc';

        try
        {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e)
        {
            die($e->getMessage());
        }
    }

    // private$mhs = 
    // [
    //     [
    //     "nama" => "M.Tegar Nurul Fuad Rosmali",
    //     "nrp" => "203040150",
    //     "email" => "02tegarrosmali@gmail.com",
    //     "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Akbar Maulana",
    //         "nrp" => "203040136",
    //         "email" => "akbarmaulana@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //     ],
    //     [
    //         "nama" => "Fresabayu Anggoro",
    //         "nrp" => "203040134",
    //         "email" => "fresabayu@gmail.com",
    //         "jurusan" => "Teknik Informatika"
    //         ],
    // ];

    public function getAllMahasiswa()
    {
        $this->stmt = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stmt->execute();
        return $this->stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}