<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/home.css" rel="stylesheet">
    <link href="../public/css/navbar.css" rel="stylesheet">
    <title>程式自學系統</title>
</head>
<body>

<?php require_once "../app/views/navbar.php"; ?>

<div class="total-container">

    <div class="col-md-5 left-side">
        <div class="board-container">

        </div>

        <div class="base-content">
            <div class="tab">
                <button class="tablinks" onclick="openTab(event, 'Notice')" id="defaultOpen">Notice</button>
                <button class="tablinks" onclick="openTab(event, 'Today')">Today</button>
                <button class="tablinks" onclick="openTab(event, 'Week')">Week</button>
            </div>

            <div id="Notice" class="tab-content">
                <h3 style="color: white">Notice</h3>
            </div>

            <div id="Today" class="tab-content">
                <h3 style="color: white">Today</h3>
            </div>

            <div id="Week" class="tab-content">
                <h3 style="color: white">Week</h3>
            </div>
        </div>
    </div>

    <div class="col-md-1 right-side">
        <div class="side-bar">
        </div>
    </div>

</div>


<script src="../public/js/home.js"></script>
</body>
</html>

<?php




/**
 * 顯示資料
 * if (isset($data)) {
 *     echo "Username: " . $data['username'] . "<br />" . "Password: " . $data['password'];
 * }
 *
 * 顯示本日最多完成的人
 * SELECT * FROM completed_problems WHERE DATE(completed_problems.completed_at) = CURDATE()
 *
 * 顯示本周最多完成的人
 * SELECT * FROM completed_problems WHERE YEARWEEK(completed_at, 1) = YEARWEEK(CURDATE(), 1);
 *
 * 排行
 * 顯示答對幾題，以及可以切換
 *
 *
 */