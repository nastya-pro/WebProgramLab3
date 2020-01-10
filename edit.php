<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $product = clearData($_GET['product']);
    $country = clearData($_GET['country']);
    $description = clearData($_GET['description']);
    $uploadlink = clearData($_GET['uploadlink']);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    if (!empty($_POST['product']) && !empty($_POST['country']) && !empty($_POST['description']))
    {
        $_SESSION['Item']['product'] = clearData($_POST['product']);
        $_SESSION['Item']['country'] = clearData($_POST['country']);
        $_SESSION['Item']['description'] = clearData($_POST['description']);
        uploadImage();
        header("Location: index.php?page=catalog");
        exit;
    }
    else
        echo 'Полностью заполните форму';
}
?>

<h3>Редактировать продукт</h3>
<table align='center'>
    <tr><td>
            <form method='POST' action='index.php?page=edit' ENCTYPE='multipart/form-data'>
                <p>Продукт:<input type='text' name='product' value='<?=$product?>'></p>
                <p>Страна:<input type='text' name='country' value='<?=$country?>'></p>
                <p>Описание:<textarea name='description' cols='70' rows='10' style='resize:none'><?=$description?></textarea></p>
                <p>Изображение: <input type='file' name='uploadfile' accept="image/jpeg"></p>
                <p><input type='submit' value='Сохранить'></p>
            </form>
        </td></tr>
</table>