<?php
class ClaseConectar
{
    public $conexion;
    protected $db;
    private $host = "localhost";
    private $usu = "root";
    private $clave = "";
    private $base = "bv";

    public function ProcedimientoConectar()
    {
        $this->conexion = mysqli_connect($this->host, $this->usu, $this->clave, $this->base);
        mysqli_query($this->conexion, "SET NAMES utf8");
        if ($this->conexion == 0) die("error al conectarse con mysql " . mysqli_error($this->conexion));
        $this->db = mysqli_select_db($this->conexion, $this->base);
        if ($this->db == 0) die("error conexión con la base de datos " . mysqli_error($this->conexion));
        return $this->conexion;
    }

    public function ruta()
    {
        define('BASE_PATH', realpath(dirname(__FILE__) . '/../') . '/');

        // Autoload para clases

    }
}
