<?php


class Authorisation
{
    /**
     * Login method
     */
    static public function main()
    {
        if (($_SERVER['REQUEST_METHOD'] === 'POST') && isset($_POST['action'])) {
            if ($_POST['action'] === 'login') {
                $userDB = new User();
                $userData = filter_input_array(INPUT_POST);
                $result = $userDB->checkUser($userData['login'], $userData['password']);
                if ($result) {
                    $_SESSION['username'] = $userData['login'];
                }
                Router::redirect('/admin.php');
            }
        } else {
            self::session_check();
        }
    }

    /**
     * Check session on successfully logged in
     */
    static public function session_check()
    {
        if (isset($_SESSION['username'])) {
            $userDB = new User();
            $result = $userDB->getUserByLogin($_SESSION['username']);
            if ($result) {
                Router::init();
            } else {
                session_destroy();
                $view = new View('authorisation_form.php', 'index_template.php');
                $view->render();
            }
        } else {
            $view = new View('authorisation_form.php', 'index_template.php');
            $view->render();
        }
    }
}