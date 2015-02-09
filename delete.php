<?php
/*
 * Delete from table
 */


if (!empty($_GET['id'])) {
    $stmt = $pdo->prepare(
      "DELETE FROM products WHERE id = :id"
    );

    $stmt->execute([
       ':id' => $_GET['id']
    ]);
}

header("Location: ".$_SERVER['HTTP_REFERER']);