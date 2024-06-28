<?php
session_start();
class ProblemsController extends Controller
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

    public function showProblem($params)
    {
        if (!isset($_SESSION['user'])) {
            header("Location: /webpage/public/login");
            exit();
        }

//        $questionId = $params['question_id'];
//        $mode = $params['mode'];
//        echo $questionId . " " . $mode;
//        if ($questionId && $mode) {
//            $problem = Problem::getByIdAndMode($questionId, $mode);
//
//            if ($problem) {
//                $this->view("problems/show", ['problem' => $problem]);
//            } else {
//                http_response_code(404);
//                echo "Problem not found";
//            }
//        } else {
//            http_response_code(400);
//            echo "Invalid parameters";
//        }
    }

    private function showHomePage($data)
    {
        $this->view("problems/problems", $data);
    }
}
