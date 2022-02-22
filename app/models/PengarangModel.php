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
        return $this->db->fetchAll("SELECT * FROM $this->table WHERE id=$id");
    }
}
