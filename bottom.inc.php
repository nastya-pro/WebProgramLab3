<div class="bottom">
    <ul>
        <!-- Нижняя часть сайта -->
        <li> Ваш последний визит:<?=$_COOKIE['dateVisit']?></li>
        <li> Системное время: <?= date("d.m.Y H:i") ?></li>
        <li> Информация о сервере: <?= $_SERVER['SERVER_SOFTWARE'] ?></li>
    </ul>
</div>