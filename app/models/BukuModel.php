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

    public function insertDataBuku($data, $upload)
    {
        $isbn = $data['isbn'];
        $judul = $data['judul'];
        $idpengarang = $data['idpengarang'];
        $stok = $data['stok'];

        if (isset($upload['gambar'])) {
            $errors = array();
            $file_name = trim($upload['gambar']['name']);
            $file_size = $upload['gambar']['size'];
            $file_tmp = $upload['gambar']['tmp_name'];
            $file_type = $upload['gambar']['type'];
            $file_ext = strtolower(end(explode('.', $upload['gambar']['name'])));
            $expensions = array("jpeg", "jpg", "png");
            if (in_array($file_ext, $expensions) === false) {
                echo "file harus berupa JPEG or PNG file.";
            } else if ($file_size > 2097152) {
                echo 'ukuran file max 2 MB';
            } else {
                move_uploaded_file($file_tmp, "image/$file_name");
            }
        }

        $this->db->execute("INSERT INTO $this->table VALUES ('', '$isbn', '$judul', '$idpengarang', '$stok', '$file_name')");

        return $this->db->affectedRows();
    }

    public function deleteDataBuku($id)
    {
        $this->db->execute("DELETE FROM $this->table WHERE id=$id");
        return $this->db->affectedRows();
    }

    public function cariBukuByJudul($judul)
    {
        return $this->db->fetchAll("SELECT $this->table.*,pengarang.nama FROM buku INNER JOIN pengarang ON pengarang.id=$this->table.idpengarang WHERE judul LIKE '%$judul%'");
    }
}
