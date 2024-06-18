<?php
error_reporting(E_ERROR | E_PARSE);
session_start();

// if (isset($_SESSION['user'])) {
//     header("Location: /webpage/public/home");
//     exit();
// }

class LoginController extends Controller
{
    public function index()
    {
        $error = '';
        if (isset($_SESSION['login_error'])) {
            $error = $_SESSION['login_error'];
            unset($_SESSION['login_error']);
        }
        $this->view('login/login', ['error' => $error]);
    }

    public function handleLogin($postData)
    {
        $username = isset($postData['username']) ? $postData['username'] : '';
        $password = isset($postData['password']) ? $postData['password'] : '';

        if ($username && $password) {
            $user = new User($username, $password);
            $userData = $user->getUserData();
            if ($userData != null) {
                $_SESSION['user'] = $userData;
                header("Location: /webpage/public/home");
            } else {
                $_SESSION['login_error'] = '帳號或密碼錯誤';
                header("Location: /webpage/public/login");
            }
            exit();
        }
    }
}
