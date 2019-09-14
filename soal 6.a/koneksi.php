<?php
    $connect=new mysqli("localhost","root","","developer");
    if(!$connect){
        echo "koneksi gagal";
        exit();
    }
?>