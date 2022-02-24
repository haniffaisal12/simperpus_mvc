<?php

class PenjualanModel
{
    private $table = 'penjualan',
        $allowed_fields = ['id', 'idcabang', 'idbuku', 'jumlah'],
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        return $this->db->fetchAll("SELECT $this->table.id AS id, idcabang, nama_cabang, idbuku, judul, jumlah FROM $this->table INNER JOIN cabang ON cabang.id=$this->table.idcabang INNER JOIN buku ON buku.id=$this->table.idbuku ORDER BY $this->table.id ASC");
    }

    public function getDetailPenjualan($id)
    {
        return $this->db->fetchSingle("SELECT $this->table.id AS id, nama_cabang, judul, jumlah FROM $this->table INNER JOIN cabang ON cabang.id=$this->table.idcabang INNER JOIN buku ON buku.id=$this->table.idbuku WHERE $this->table.id=$id");
    }

    public function insertDataPenjualan($data)
    {
        $idcabang = $data['idcabang'];
        $idbuku = $data['idbuku'];
        $jumlah = $data['jumlah'];

        $this->db->execute("INSERT INTO $this->table VALUES ('', '$idcabang', '$idbuku', '$jumlah')");

        return $this->db->affectedRows();
    }
}
