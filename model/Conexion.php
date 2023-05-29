<?php
class Database {
    private $host = "localhost";
    private $user = "root";
    private $password = "";
    private $database = "log";

    public $conn;

    public function __construct() {
        $this->conn = mysqli_connect($this->host, $this->user, $this->password, $this->database);

        if (!$this->conn) {
            die("Error al conectar con la base de datos: " . mysqli_connect_error());
        }
    }

    public function query($sql) {
        $result = mysqli_query($this->conn, $sql);

        if (!$result) {
            die("Error al ejecutar consulta: " . mysqli_error($this->conn));
        }

        return $result;
    }
}
?>