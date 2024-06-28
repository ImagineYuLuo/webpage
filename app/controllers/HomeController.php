<?php
session_start();
class HomeController extends Controller
{
    public function index()
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /webpage/public/login");
            exit();
        }

        $userData = $_SESSION['user'];
        $this->showHomePage($userData);
    }

    private function showHomePage($data)
    {
        $this->view("home/home", $data);
    }
}
