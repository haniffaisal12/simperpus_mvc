<?php

class Database
{
    private $db_host = DB_HOST,
        $db_user = DB_USER,
        $db_pass = DB_PASS,
        $db_name = DB_NAME,
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
            echo "<script>history.go(-1);</script>";
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

    public function affectedRows()
    {
        return mysqli_affected_rows($this->conn);
    }
}
