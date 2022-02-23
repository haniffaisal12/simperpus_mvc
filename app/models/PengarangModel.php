<?php

class PengarangModel
{
    private $table = 'pengarang',
        $allowed_fields = ['id', 'nama', 'email'],
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengarang()
    {
        return $this->db->fetchAll("SELECT * FROM $this->table ORDER BY id ASC");
    }

    public function getDetailPengarang($id)
    {
        return $this->db->fetchSingle("SELECT * FROM $this->table WHERE id=$id");
    }

    public function insertDataPengarang($data)
    {
        $nama = $data['nama'];
        $email = $data['email'];

        $this->db->execute("INSERT INTO $this->table VALUES ('', '$nama', '$email')");

        return $this->db->affectedRows();
    }
}
