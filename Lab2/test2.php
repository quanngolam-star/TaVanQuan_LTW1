<?php
    // khoiw
    $menus=["Trang chủ","Tin tức","Liên hệ","Giới thiệu"];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    *{
        margin: 0;
        padding :0;
        box-sizing: border-box;
    }
nav{
    background:rgb(4,40,94);

}
nav ul{
    list-style :none;
    display :flex;

}

nav li{
    flex: 1;

}
nav a{
    color: white;
    text-decoration: none;
    font-weight: bold;
    display: block;
    padding: 15px;
    text-align: center;
}
nav ul li:hover {
background: #084298;
}


    </style>
</head>
<body>
<nav>
    <ul>
        <?php foreach ($menus as $menu) { ?>
            <li>
                <a href="#"><?= $menu ?></a>
            </li>
        <?php } ?>
    </ul>
</nav>
</body>
</html>