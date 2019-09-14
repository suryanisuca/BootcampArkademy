<?php
    include 'koneksi.php';

    $sql  = ' SELECT  name.name as nama, work.name as kerja, kategori.salary as gaji';
    $sql .= '  FROM kategori INNER JOIN (work INNER JOIN name ON work.id = name.id_work) ON kategori.id = name.id_salary';

    $queryResult=$connect->query($sql);
    $result=array();
    while($fetchData=$queryResult->fetch_assoc()){
        $result[]=$fetchData;
    }

    echo json_encode($result);

?>