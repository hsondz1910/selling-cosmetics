<?php
    class Database
    {
        public static $connect;
        protected $severName = "localhost";
        protected $userName = "root";
        protected $passWord = "";
        protected $dbName = "mypham";

        function __construct()
        {
            self::$connect = mysqli_connect($this->severName,$this->userName,$this->passWord,$this->dbName);
            mysqli_select_db(self::$connect,$this->dbName);
            mysqli_query(self::$connect, "SET NAMES 'utf8'");
        }
    }
?>