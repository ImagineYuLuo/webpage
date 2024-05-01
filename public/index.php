<?php

/**
 * Check session exist and make the route
 */

session_start();

if (!isset($_SESSION['user_id'])) {
    header('Location: ../app/login/login.html');
    exit();
}