<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!empty($_POST['product']) && !empty($_POST['country']) && !empty($_POST['description'])) {
        session_start();
        $_SESSION['Item']['product'] = strip_tags(trim($_POST['product']));
        $_SESSION['Item']['country'] = strip_tags(trim($_POST['country']));
        $_SESSION['Item']['description'] = strip_tags(trim($_POST['description']));
        uploadImage();
        header("Location: index.php?page=catalog");
        exit;
    } else echo 'Полностью заполните форму';
}
?>
<form method='POST' action='index.php?page=add' enctype="multipart/form-data">
    <p>Продукт:<input type='text' name='product'></p>
    <p>Страна:<input type='text' name='country'></p>
    <p>Описание:<input type="text" name="description"></p>
    <p>Изображение: <input type='file' name='uploadfile' accept="image/jpeg"></p>
    <p><input type='submit' value='Добавить'></p>
</form>

