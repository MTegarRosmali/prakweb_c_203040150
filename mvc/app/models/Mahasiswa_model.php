<?php

class Mahasiswa_model
{
    private $table = 'mahasiswa';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }


    public function getAllMahasiswa()
    {
        $this->db->query('SELECT * FROM' . $this->table);
        return $this->db->resultSet();
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
}