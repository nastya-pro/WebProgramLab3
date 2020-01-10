<?php
if ($_SERVER['REQUEST_METHOD'] == 'GET')
{
    $product = clearData($_GET['product']);
    $country = clearData($_GET['country']);
    $description = clearData($_GET['description']);
    $uploadlink = clearData($_GET['uploadlink']);
}
?>
<br/>
<a href='index.php?page=catalog' style='margin-left:40px'>Назад</a>
<a href='index.php?page=edit&product=<?=$product?>&country=<?=$country?>&description=<?=$description?>&uploadlink=<?=$uploadlink?>' style='margin-left:20px'>Редактировать</a>
<br/><br/>
<table class="data_table" border="1">
    <tr>
        <th width="20%" bgcolor="#ff7f50">Продукт</th>
        <td colspan="2" width="45%" style="padding:0px 0px 0px 5px;"><?= $product ?></td>
        <td rowspan="6"><img src="<?= $uploadlink ?>" width="100%" height="100%"></td>
    </tr>
    <tr>
        <th width="15%" bgcolor="#ff7f50">Страна</th>
        <td colspan="2" style="padding:0px 0px 0px 5px;"><?= $country ?></td>
    </tr>
    <tr height="250">
        <th width="15%" bgcolor="#ff7f50">Описание</th>
        <td colspan="2" style="padding:0px 0px 0px 5px;"><?= $description ?></td>
    </tr>
</table>
<br/>
