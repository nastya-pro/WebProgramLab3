<form method='POST' enctype="multipart/form-data" xmlns="http://www.w3.org/1999/html">
    <p>Длина квартиры (м):<input type='number' name="length"></p>
    <p>Ширина квартиры (м):<input type='number' name="width"></p>
    <p>Цена за квадратный метр (₽):<input type='number' name="price"></p>
    <p>Наличие:</p>
    <p><input type='checkbox' name="facing">Отделка</p>
    <p><input type='checkbox' name="furniture">Мебель</p>
    <p><input type='radio' name="balcony">Балкон</p>
    <p><input type='radio' name="loggia">Лоджия</p>
    <p><input type='checkbox' name="bathroom">Совмещенность санузла</p>
    <p>Этаж:<input type='number' name="floor"></p>
    <p><input type='submit' value='Расчитать'></p>
</form>
<?php
$advantage_count = 0;
$ADVANTAGE_COST = 100000;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $length = trim(strip_tags($_POST['length']));
    $width = trim(strip_tags($_POST['width']));
    $price = trim(strip_tags($_POST['price']));
    if (!empty($_POST['facing'])) {
        $advantage_count += 1;
    }
    if (!empty($_POST['furniture'])) {
        $advantage_count += 1;
    }
    if (!empty($_POST['balcony'])) {
        $advantage_count += 1;
    }
    if (!empty($_POST['loggia'])) {
        $advantage_count += 1;
    }
    if (!empty($_POST['bathroom'])) {
        $advantage_count += 1;
    }
    if (!empty($_POST['floor'])) {
        $advantage_count += 1;
    }
    $square = $length * $width;
    $sq_cost = $square * $price;
    $factor_cost = $advantage_count * $ADVANTAGE_COST;
    $result = $sq_cost + $factor_cost;
    ?>
    <table border='1' width='300'>
        <tr>
            <th>Площадь</th>
            <td><?= $square ?></td>
        </tr>
        <tr>
            <th>Цена за м2</th>
            <td><?= $price ?></td>
        </tr>
        <tr>
            <th>Стоимость площади</th>
            <td><?= $sq_cost ?></td>
        </tr>
        <tr>
            <th>Стоимость преимуществ</th>
            <td><?= $factor_cost ?></td>
        </tr>
        <tr>
            <th>Итоговая стоимость</th>
            <td><?= $result ?></td>
    </table>
    <?php
}
?>