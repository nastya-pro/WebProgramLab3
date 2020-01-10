<?php
//Инициализация переменных
$product = "";
$country = "";
$description= "";
$uploadlink= "";
if (isset($_POST['delete']) && isset($_POST['cbs']))
{
    unlink($_SESSION['Item']['uploadlink']);
    unset($_SESSION['Item']);
    header("Location: index.php?page=catalog");
}
if (!empty($_SESSION['Item']['product']))
{
    $product = $_SESSION['Item']['product'];
    $country = $_SESSION['Item']['country'];
    $description= $_SESSION['Item']['description'];
    if (!empty($_SESSION['Item']['uploadlink']))
        $uploadlink = $_SESSION['Item']['uploadlink'];
}

echo "<table border='1' width='300'>
<tr>
<th width='30%'>Продукт</th>
<th width='20%'>Страна</th>
<th width='20%'>Описание</th>
<th width='10%'></th>
</tr>
<tr>
<td><a href='index.php?page=item&product=$product&country=$country&description=$description&uploadlink=$uploadlink'>$product</a></td>
<td>$country</td>
<td>$description</td>
<td>
<form method='POST'>
<input type='checkbox' name='cbs[]' value=$product />
</td></tr>
</table><input  id='delete' type='submit' class='button' name='delete' value='Удалить' style='position:relative;bottom:-25px;left:150px;' /></form>";
?>
<br/>
<button onclick="location.href='index.php?page=add';" style="margin-left:20px">Добавить</button>
