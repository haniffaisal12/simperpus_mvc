<?php

class CabangModel
{
    private $table = 'cabang',
        $allowed_fields = ['id', 'kode_cabang', 'nama_cabang', 'alamat'],
        $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllCabang()
    {
        return $this->db->fetchAll("SELECT * FROM $this->table ORDER BY id ASC");
    }

    public function getDetailCabang($id)
    {
        return $this->db->fetchSingle("SELECT * FROM $this->table WHERE id=$id");
    }

    public function insertDataCabang($data)
    {
        $kode_cabang = $data['kode_cabang'];
        $nama_cabang = $data['nama_cabang'];
        $alamat = $data['alamat'];

        $this->db->execute("INSERT INTO $this->table VALUES ('', '$kode_cabang', '$nama_cabang', '$alamat')");

        return $this->db->affectedRows();
    }

    public function deleteDataCabang($id)
    {
        $this->db->execute("DELETE FROM $this->table WHERE id=$id");
        return $this->db->affectedRows();
    }

    public function editDataCabang($data)
    {
        $id = $data['id'];
        $kode_cabang = $data['kode_cabang'];
        $nama_cabang = $data['nama_cabang'];
        $alamat = $data['alamat'];

        $this->db->execute("UPDATE $this->table SET kode_cabang='$kode_cabang', nama_cabang='$nama_cabang', alamat='$alamat' WHERE id=$id");

        return $this->db->affectedRows();
    }
}
