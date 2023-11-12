<?php
    class ConnectDB {
        private $root_URL;
        public function __construct($_root_URL) {
            $this->root_URL = $_root_URL;
        }
        function db_squirellblog () {
            include_once './config/Database.php';

            $conn = ConnectDB('localhost', 'root', 'Tin18082002', 'db_squirellblog');
            return $conn;
        }
    }
?>