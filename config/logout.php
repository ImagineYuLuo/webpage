<?php
session_start();

session_unset();
session_destroy();

header("Location: /webpage/public/login");
exit();