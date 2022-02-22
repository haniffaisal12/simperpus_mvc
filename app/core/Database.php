<?php

class Database
{
    private $db_host = 'localhost',
        $db_user = 'root',
        $db_pass = '',
        $db_name = 'bootcamp',
        $conn,
        $stmt;

    public function __construct()
    {
        $this->conn = mysqli_connect($this->db_host, $this->db_user, $this->db_pass, $this->db_name);
        if (mysqli_connect_errno()) {
            echo "<script>alert('Error : " . mysqli_connect_error() . "')</script>";
            exit();
        }
    }

    public function execute(string $sql)
    {
        $this->stmt = mysqli_query($this->conn, $sql);

        if (!$this->stmt) {
            echo "<script>alert('Error : " . mysqli_error($this->conn) . "')</script>";
            exit();
        }

        return $this->stmt;
    }

    public function fetchAll(string $sql)
    {
        $fetchAll = $this->execute($sql);

        for ($i = 0; $result[$i] = mysqli_fetch_assoc($fetchAll); $i++);
        array_pop($result);

        return $result;
    }

    public function fetchSingle(string $sql)
    {
        $fetchSingle = $this->execute($sql);

        return $this->stmt = mysqli_fetch_assoc($fetchSingle);
    }
}
