<?php
class ConnectDB{
    public $con;
    protected $server = "localhost";
    protected $user = "root";
    protected $password ="";
    protected $db = "webquanlyktx";

    function __construct(){
        $this->con = mysqli_connect($this->server,$this->user,$this->password);
        mysqli_select_db($this->con,$this->db);
        mysqli_query($this->con,"SET NAMES 'utf8'");
    }
}
?>