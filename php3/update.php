<?php

include 'database.php';

$sql = "
UPDATE categories 
SET name = 'kategori 1'
WHERE id = 1
";

if ($conn->query($sql)===true){
    echo 'proses update berhasil';
}else{
    echo 'gagal: ' . $conn->error;
}