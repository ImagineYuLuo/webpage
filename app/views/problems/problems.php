<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="../libs/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../public/css/problem.css" rel="stylesheet">
    <link href="../public/css/navbar.css" rel="stylesheet">
    <title>程式自學系統</title>
</head>
<body>

<?php require_once "../app/views/navbar.php"; ?>


<div class="explore-container">
    <p class="explore-title">Problems Page</p>
    <div class="showcase">
        <p class="small-title">Algorithm</p>
        <div class="card-container">
            <div class="explore-card">
                <div class="card-title-easy">
                    <p class="type-difficult">Easy</p>
                    <div class="card-content">
                        <p>Finish: 90%</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
            <div class="explore-card">
                <div class="card-title-normal">
                    <p class="type-difficult">Normal</p>
                    <div class="card-content">
                        <p>Finish: 60%</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
            <div class="explore-card">
                <div class="card-title-hard">
                    <p class="type-difficult">Hard</p>
                    <div class="card-content">
                        <p>Finish: 20%</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
        </div>

        <p class="small-title">Data Structure</p>
        <div class="card-container">
            <div class="explore-card">
                <div class="card-title-easy">
                    <p class="type-difficult">Easy</p>
                    <div class="card-content">
                        <p>Finish: 90%</p>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 90%"
                                 aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
            <div class="explore-card">
                <div class="card-title-normal">
                    <p class="type-difficult">Normal</p>
                    <div class="card-content">
                        <p>Finish: 60%</p>
                        <div class="progress">
                            <div class="progress-bar bg-warning" role="progressbar" style="width: 60%"
                                 aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
            <div class="explore-card">
                <div class="card-title-hard">
                    <p class="type-difficult">Hard</p>
                    <div class="card-content">
                        <p>Finish: 20%</p>
                        <div class="progress">
                            <div class="progress-bar bg-danger" role="progressbar" style="width: 20%"
                                 aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
                <div class="card-group">
                    <button class="btn-next">Choose</button>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

<?php

/**
 * 使用迴圈抓取資料庫的資料
 * small-title -> 哪種類別 (Math, String, Array, etc.)
 * type-difficult -> small-title 的難度 (Easy, Normal, Hard)
 * finish -> 使用者對應 type-difficult 的完成度
 *
 * class="progress-bar bg-success" 根據 finish 來顯示對應的完成度顏色
 * success = 80% - 100%
 * warning = 30% - 79%
 * danger = 0% - 29%
 * style="width: $finish %" aria-valuenow="finish"
 */