<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" href="style/lab2.css" type="text/css" media="screen"/>
    <title>Лабораторная работа №2</title>
</head>
<body>
    <h2>Анализ заданного числа:</h2>
    <table>
        <tbody>
            <?php
                $source = rand(-1000, 1000);
                $parity = ($source % 2) == 0 ? 'Четное' : 'Нечетное';
                $sign = $source < 0 ? 'Отрицательное' : 'Положительное';
                $digitsCount = strlen((string) abs($source))
            ?>
            <tr><th>Исходное число</th><td><?= $source ?></td></tr>
            <tr><th>Четность</th><td><?= $parity ?></td></tr>
            <tr><th>Знак</th><td><?= $sign ?></td></tr>
            <tr><th>Количество разрядов</th><td><?= $digitsCount ?></td></tr>
        </tbody>
    </table>
    <h2>Генерация случайной строки:</h2>
    <table>
        <tbody>
            <?php
                function generate_string($input, $strength) {
                    $input_length = strlen($input);
                    $random_string = '';
                    for($i = 0; $i < $strength; $i++) {
                        $random_character = $input[mt_rand(0, $input_length - 1)];
                        $random_string .= $random_character;
                    }
                    return $random_string;
                }

                $length = 10;
                $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
                $string = generate_string($permitted_chars, $length);
                $reverse = strrev($string);
            ?>
            <tr><th>Длина строки</th><td><?= $length ?> </td></tr>
            <tr><th>Строка</th><td><?= $string ?> </td></tr>
            <tr><th>Обратная строка</th><td><?= $reverse ?> </td></tr>
        </tbody>
    </table>
</body>
</html>