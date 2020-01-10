 <ul class="menu">
    <li class="title">
        <div>
            <img src="https://img7.socratify.net/94b0198875cbe8806b_600x338.jpg" alt="Логотип"/>
            <span>Дорога вкуса</span>
        </div>
    </li>
    <li class="menu_right">
        <label>Поиск: <input type="text" class="top_right"/></label>
    </li>
         <?php
         if (!empty($_SESSION['user_login'])){
             echo "<li class='menu_right'><a href='index.php?logout=true'>Выход</a></li>";
             echo "<li class='menu_right hello'>Привет, {$_SESSION['user_login']}!</li>";
         }
?>
</ul>
