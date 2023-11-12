<?php
    function getRow () {
        include_once 'Database.php';

        $conn = ConnectDB('localhost', 'root', 'Tin18082002', 'db_squirellblog');
        $sql = "SELECT count(*) as Record FROM db_squirellblog.posts";
        $result = $conn->query($sql);
        return $result->fetch();
    }
?>