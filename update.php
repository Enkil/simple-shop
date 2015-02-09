<?php

    if (!empty($_GET['id'])) {

        $stmt = $pdo->prepare(
            "SELECT * FROM products WHERE id = :id"
        );

        $stmt->execute([
            ':id' => $_GET['id']
        ]);

        if (!$row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            echo "wrong id";
            exit;
        }
    } else {
        echo "id is required";
        exit;
    }

?>

<form method="post" action="">
    <form method="post" action="">
        <div><input type="text" name="title" value="<?=$row['title'] ?>" /></div>
        <div><input type="text" name="price" value="<?=$row['price'] ?>" /></div>
        <div><input type="text" name="category" value="<?=$row['category'] ?>" /></div>
        <div><textarea name="description" value="<?=$row['description'] ?>"></textarea></div>
        <div><input type="submit" name="submit" /></div>
    </form>

<?php
    if (!empty($_POST)) {

        $insert = $pdo->prepare("UPDATE products SET
                  title = :title,
                  price = :price,
                  category = :category,
                  description = :description
                  WHERE id = :id
                   ");

        $insert->execute([
            ':id' => $_GET['id'],
            ':title' => $_POST['title'],
            ':price' => $_POST['price'],
            ':category' => $_POST['category'],
            ':description' => $_POST['description']
        ]);
        header("Location: ".$_SERVER['PHP_SELF']);
    }

