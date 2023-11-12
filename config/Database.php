<?php
    function ConnectDB($_server, $_username, $_password, $_database) {
        try {
            $conn = new \PDO("mysql:host=$_server;dbname=$_database", $_username, $_password);
            $conn->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
            return $conn;
        } catch (\PDOException $e) {
            print_r("Kết nối không thành công: " . $e->getMessage());
        }
    }
?>