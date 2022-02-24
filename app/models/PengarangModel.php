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

    public function deleteDataPengarang($id)
    {
        $this->db->execute("DELETE FROM $this->table WHERE id=$id");
        return $this->db->affectedRows();
    }

    public function editDataPengarang($data)
    {
        $id = $data['id'];
        $nama = $data['nama'];
        $email = $data['email'];

        $this->db->execute("UPDATE $this->table SET nama='$nama', email='$email' WHERE id=$id");

        return $this->db->affectedRows();
    }
}
