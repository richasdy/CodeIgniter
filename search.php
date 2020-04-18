<?php
    session_start();
    include 'koneksi.php';

    function SearchCaption($search){
        $query = "SELECT * FROM photo where caption LIKE'%search' ";
        return $query;
    }

?>