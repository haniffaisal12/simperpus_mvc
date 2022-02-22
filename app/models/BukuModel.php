<?php

class BukuModel
{
    private $table = 'buku',
        $allowed_fields = ['id', 'isbn', 'judul', 'idpengarang', 'stok', 'gambar'],
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBuku()
    {
        return $this->db->fetchAll("SELECT $this->table.id AS id, isbn, judul, nama, stok, gambar FROM $this->table INNER JOIN pengarang ON pengarang.id=$this->table.idpengarang ORDER BY $this->table.id ASC");
    }

    public function getDetailBuku($id)
    {
        return $this->db->fetchSingle("SELECT $this->table.id AS id, isbn, judul, nama, stok, gambar FROM $this->table INNER JOIN pengarang ON pengarang.id=$this->table.idpengarang WHERE $this->table.id=$id");
    }
}
