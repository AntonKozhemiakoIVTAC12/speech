<?php
session_start();
include "db.class.php";
DB::getInstance();
?>
<!DOCTYPE html>
<html lang="en">
<head> 
<meta charset="UTF-8">
<meta name = "viewport" content ="witdh=device-width">
<link rel="stylesheet" href="styles/styles.css">
<script type="text/javascript" src="scripts/jquery-3.6.0.js"></script>
<script type="text/javascript" src="scripts/scripts.js"></script>
</head>
<div class = "conatainer">
<body bgcolor="white">
<tr>
<div class="panelnav">
        <a href="menu.php" class="double-border-button"><font size=4>Меню</font></a></td>
        <a href="index.php" class="double-border-button"><font size=4>Главная</font></a></td>
        <a href="лабы.php" class="double-border-button"><font size=4>Лабы по дискретке</font></a></td>
        <a href="obomne.php" class="double-border-button"><font size=4>О себе</font></a></td>
        <a href="game.php" class="double-border-button"><font size=4>Моя любимая игра</font></a></td>
        <a href="mydog.php" class="double-border-button"><font size=4>Моя собака</font></a></td>
        <a href="gallery.php" class="double-border-button"><font size=4>Галерея</font></a></td>
        <a href="info_spell.php" class="double-border-button"><font size=4>Диктант</font></a></td>
        <div class="avtorisator">    
    <?php
    if (isset($_SESSION['auth'])) { ?>
        <div class="double-border-button1"><font size=4></font><a href="usaf.php"><?echo "Пользователь: "?></a></div>
        <div class="double-border-button1"><font size=4></font><a href="usaf.php"><?echo "".$_SESSION['name'];?></a></div>
        <div class="double-border-button1"><font size=4></font><a href="exit.php">Выход</a></div>

    <?php } else {?>
        <div class="double-border-button1"><font size=4></font><a href="registr.php">Регистрация</a></div>
        <div class="double-border-button1"><font size=4></font><a href="login.php">Вход</a></div>
    <?php } ?>
        </div>
</div>
<div class="content">
            <div class="me"><img src="/images/1.jpg"></div>
            <div class="info">
                <p class="info1">О чем мой сайт:</p>
                <p class="info2" align="justify"> Обо мне. Я очень известная личность Ульяновской области и Ульяновска во всех играх нашей планеты, я лучший во всем. Приятно познакомиться. Я Антон.

            </div>
        </div>

</div>
<?php
    if (isset($_SESSION['auth'])) {
        $query = "SELECT * FROM `users` WHERE id=".$_SESSION['id']; ////////////вывод аватарки
        $res = DB::query($query);
        $item = DB::fetch_array($res) ?>
        <td><img src="<?=$item['avatar_name']?>" class="profilePhoto"></td>
 <?php } ?>
<div class="cont">
    <a href="https://vk.com/idsh221b"> <div class="icon"> <img src="https://cdn.discordapp.com/attachments/704746673917788211/972065268488626216/vk.png" ></div>    </a>
    <a href="https://github.com/AntonKozhemiakoIVTAC12"> <div class="icon"> <img src="https://cdn.discordapp.com/attachments/704746673917788211/972065268778008626/git.png" ></div>    </a>
    <a href="https://steamcommunity.com/id/pisdolis/"> <div class="icon"><img src="https://cdn.discordapp.com/attachments/704746673917788211/972065800041164850/steam.png"></div></a>
    <div class="info">
    <div class="icons" >
    </div>
    </div>
</div>
</div>



















</tr>






























</body> 
</html>