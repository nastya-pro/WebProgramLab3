<?php

function clearData($data)
{
    return trim(strip_tags($data));
}


function resize($file, $tmp_path)
{
    //Ограничение по ширине в пикселях
    $max_size = 250;
    //Cоздание исходного изображения на основе исходного файла
    $src = imagecreatefromjpeg($file['tmp_name']);
    //Определение ширины и высоты изображения
    $w_src = imagesx($src);
    $h_src = imagesy($src);
    If ($w_src > $max_size) {
//Вычисление пропорций
        $ratio = $w_src / $max_size;
        $w_dest = round($w_src / $ratio);
        $h_dest = round($h_src / $ratio);
//Создание пустого изображения
        $dest = imagecreatetruecolor($w_dest, $h_dest);
//Копирование старого изображения в новое с изменением параметров
        imagecopyresampled($dest, $src, 0, 0, 0, 0, $w_dest, $h_dest, $w_src, $h_src);
//Вывод изображения и очистка памяти
        imagejpeg($dest, $tmp_path . $file['name']);
        imagedestroy($dest);
        imagedestroy($src);
        return $file['name'];
    } else {
//Вывод изображения без изменения и очистка памяти
        imagejpeg($src, $tmp_path . $file['name']);
        imagedestroy($src);
        return $file['name'];
    }
}

function uploadImage(){
    if (!empty($_FILES['uploadfile']['name'])) {
        $tmp_path = 'tmp/';
        $file_path = 'img/';
        $result = imageCheck();
        if ($result == 1) {
            $name = resize($_FILES['uploadfile'], $tmp_path);
            $uploadfile = $file_path . $name;
            if (@copy($tmp_path . $name, $file_path . $_POST['product'] . '.jpg'))
                $uploadlink = "img/" . $_POST['product'] . '.jpg';
            unlink($tmp_path . $name);
            $_SESSION['Item']['uploadlink'] = $uploadlink;
        } else {
            echo $result;
            exit;
        }
    }
}

function imageCheck()
{
    if ($_FILES['uploadfile']['type'] == "image/jpeg") {
        if ($_FILES['uploadfile']['size'] <= 1024000)
            return 1;
        else
            return "Размер файла не должен превышать 1000Кб";
    } else
        return "Файл должен иметь jpeg-расширение";
}

?>
