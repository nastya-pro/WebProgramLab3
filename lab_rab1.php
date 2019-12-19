<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=windows-1251">
    <link rel="stylesheet" href="style/lab1.css" type="text/css" media="screen"/>
    <title>Лабораторная работа №1</title>
</head>
<body>
<h3>Табличная структура:</h3>
<table class="color_table">
    <tr>
        <td bgcolor="blue"></td>
        <td colspan="2.5"></td>
        <td rowspan="2" colspan="2"></td>
        <td rowspan="2" colspan="2"></td>
    </tr>
    <tr>
        <td rowspan="4"></td>
        <td rowspan="4" colspan="2.5"></td>
    </tr>
    <tr>
        <td colspan="2" bgcolor="red"></td>
        <td colspan="2"></td>
    </tr>
    <tr>
        <td rowspan="4" colspan="2"></td>
        <td rowspan="4" colspan="2"></td>
    </tr>
    <tr>

    </tr>
    <tr>
        <td colspan="2.5"></td>
        <td bgcolor="green"></td>
    </tr>
    <tr>
        <td rowspan="2" colspan="2.5"></td>
        <td rowspan="2"></td>
    </tr>
    <tr>
        <td colspan="4" bgcolor="yellow"></td>
    </tr>
</table>
<h3>Форма заказа услуги в туристическом агенстве:</h3>
<form action="POST">
    <table class="order">
        <tr>
            <td>Страна</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>Отель</td>
            <td><input type="text"/></td>
        </tr>
        <tr>
            <td>Дата вылета</td>
            <td><input type="datetime" name="created"></td>
        </tr>
        <tr>
            <td>Дата прилета</td>
            <td><input type="datetime" name="created"></td>
        </tr>
        <tr>
            <td>Количество человек</td>
            <td><input type="number"/></td>
        </tr>
        <tr>
            <td>Ваше имя</td>
            <td><input type="text" name="name1"/></td>
        </tr>
        <tr>
            <td>Контактный номер</td>
            <td><input type="text" name="number"/></td>
        </tr>
        <tr>
            <td>Ваш e-mail</td>
            <td><input type="text" name="email"/></td>
        </tr>
        <tr>
            <td>Тип питания</td>
            <td align="left">
                <input type="radio" name="all" value="yes" />Все включено<br/>
                <input type="radio" name="bd" value="yes" />
                Завтрак и ужин<br/>
                <input type="radio" name="bl" value="yes" />Завтрак и обед<br/>
            </td>
        </tr>
    </table>
    <textarea rows="5" cols="45" name="comments">Пожелания</textarea>
    <div><input type="submit" value="Отправить"/></div>
</form>
</body>
</html>