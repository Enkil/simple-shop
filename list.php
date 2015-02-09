<?php
//$stmt = $pdo->prepare("SELECT * FROM products WHERE price < :max AND price > :min");
$stmt = $pdo->prepare("SELECT * FROM products");
$stmt->execute([
//    ':min' => 5,
//    ':max' => 15,
]);

$rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "<table>";
    echo "<tr><td>Title</td><td>Price</td><td></td></tr>";
    foreach ($rows as $key => $row) {
        echo "<tr>";
        echo "<td>" . $row['title'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td><a href='index.php?action=delete&id=" . $row['id'] ."'>Удалить</a></td>"
             . "<td><a href='index.php?action=update&id=" . $row['id'] ."'>Редактировать</a></td>";
        echo "</tr>";
    }
echo "</table>";