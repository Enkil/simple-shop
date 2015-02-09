<form method="post" action="">
    <div><input type="text" name="title" value="" /></div>
    <div><input type="text" name="price" value="" /></div>
    <div><input type="text" name="category" value="" /></div>
    <div><textarea name="description"></textarea></div>
    <div><input type="submit" name="submit" /></div>
</form>

<?php
if (!empty($_POST)) {
    var_dump($_POST);
    $insert = "INSERT INTO products 
              (title, price, category, description)
              VALUES ('" . $_POST['title'] . "', 
                      '" . $_POST['price'] . "', 
                      '" . $_POST['category'] . "', 
                      '" . $_POST['description'] . "')
               ";
    var_dump($insert);
    $stmt = $pdo->exec($insert);
}

//header("Location: ".$_SERVER['HTTP_REFERER']);