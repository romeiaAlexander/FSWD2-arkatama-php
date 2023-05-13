<?php

include 'database.php';

$sql = "SELECT products.id, categories.name FROM products
INNER JOIN categories ON products.category_id = categories.id";

echo '<style>';
include "style.css";
echo '</style>';


$result = $conn->query($sql);
if ($result->num_rows > 0){

    echo '<table border="1" rules="ALL" align="center">';
    echo '<td> ID </td>';
    echo '<td> Kategori </td>';
    while($row = $result->fetch_assoc()){
        echo '<tr>';
        echo '<td>' . $row['id'] . '</td>';
        echo '<td>' . $row['name'] . '</td>';
        echo '</tr>';
    }
    echo '</table>';

}



/* echo '<pre>';
print_r($result);
echo '<pre>'; */