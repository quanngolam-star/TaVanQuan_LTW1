<?php
// khoiw
$menus = ["Trang chủ", "Tin tức", "Liên hệ", "Giới thiệu"];
$subjects = [
    "HTML",
    "CSS",
    "JavaScripst",
    "PHP",
    "MYSQL",
];
$students = [
    [
        "id" => "SV001",
        "name" => "Nguyễn Văn An",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV002",
        "name" => "Trần Thị Bình",
        "gender" => "Nữ",
        "class" => "CNTT2"
    ],
    [
        "id" => "SV003",
        "name" => "Lê Văn Cường",
        "gender" => "Nam",
        "class" => "CNTT1"
    ],
    [
        "id" => "SV004",
        "name" => "Phạm Thị Dung",
        "gender" => "Nữ",
        "class" => "CNTT3"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        nav {
            background: rgb(4, 40, 94);

        }

        nav ul {
            list-style: none;
            display: flex;

        }

        nav li {
            flex: 1;

        }

        nav a {
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

        body {
            padding: 20px;
        }

        .s1 {
            max-width: 500px;
            margin: auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.15);

        }

        .s1 h3 {
            text-align: center;
            color: #0d6efd;
            margin-bottom: 20px;
            ;
        }

        .s1 ul {
            list-style: none;
        }

        .s1 li {
            padding: 12px;
            margin-bottom: 10px;
            background: #e7f1ff;
            border-left: 5px solid #0d6efd;
            border-radius: 5px;
            transition: .3s;
        }

        .s1 li:hover {
            background: #cfe2ff;
            transform: translateX(5px);
        }

        .s2 {
            max-width: 700 px;
            margin: 10px auto;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
        }

        .s2 h3 {
            color: black;
            margin-top: 0;
        }

        .s2 table {
            width: 100%;
            border-collapse: collapse;
        }

        .s2 th,
        .s2 td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: center;
        }

        .s2 th {
            background-color: #0d6efd;
            color: white;
        }

        .s2 tbody tr:hover {
            background-color: #dbe8ff;
            color: red;
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
    <section class="s1">
        <h3>Danh sách ngôn ngữ sử dung trong môn học</h3>
        <ul>
            <!--Hiển thị dữ liệu -->
            <?php
            foreach ($subjects as $subject) {
                echo "<li>$subject</li>";
            }
            ?>
                        
        </ul>
    </section>

    <section class="s2"></section>
    <section class="s2">
                <h3>Danh sách sinh viên</h3>
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Mã sinh viên</th>
                            <th>Họ và tên</th>
                            <th>Giới tính</th>
                            <th>Lớp</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($students as $index => $student) { ?>
                            <tr>
                                <td><?= $index + 1 ?></td>
                                <td><?= $student["id"] ?></td>
                                <td><?= $student["name"] ?></td>
                                <td><?= $student["gender"] ?></td>
                                <td><?= $student["class"] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
</body>

</html>