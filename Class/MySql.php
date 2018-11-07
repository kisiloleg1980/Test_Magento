<?php

require_once('db_options.php');

class MySqlDatabase {
    const ERROR_CONNECT = "Ошибка подключения к базе данных";
    private $db;

    public function connect($host, $user, $pass, $dbName){
        $this->db = new mysqli($host, $user, $pass, $dbName) or die(self::ERROR_CONNECT.": ".mysqli_connect_error());
    }

    public function query_select($query){
        $result = $this->db->query($query);
        $arResult = array();
        if($result){
            while ($row = $result->fetch_assoc()) {
                $arResult[] = $row;
            }
            $result->close();
        }
        return $arResult;
    }

    public function __destruct()
    {
        $this->db->close();
    }
}