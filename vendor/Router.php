<?php

/**
 * Class Router
 * ответная реакция на все действия на странице (на все запросы) get & post
 */
class Router
{
    /**
     * init method
     */
    static public function init()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if ($_POST['object'] === 'user') {
                self::usersRequest();
            }
            if ($_POST['object'] === 'news') {
                self::newsRequest();
            }

        } else {
            if (isset($_GET["show"])) {
                $getInfo = filter_input_array(INPUT_GET);
                if ($getInfo["show"] === "post") {
                    Show_content::showNews('post_by_id.php', 'post');
                }
                if ($getInfo["show"] === "users") {
                    Show_content::showUsers();
                }
                if ($getInfo["show"] === "news") {
                    Show_content::showNews('posts_admin.php');
                }
                if ($getInfo["show"] === "addPost") {
                    $view = new View('add_post.php');
                    $view->render();
                }
                if ($getInfo["show"] === "logout") {
                    session_destroy();
                    self::redirect('/admin.php');
                }
            } elseif ($_SERVER["REQUEST_URI"] === "/admin.php") {
                Show_content::showNews('posts.php'); //TODO show something for admin main page;
            } else {
                Show_content::showNews('posts.php');
            }
        }

    }

    /**
     * method for delete or add users
     */
    static public function usersRequest()
    {
        $userDB = new User();
        $errors = [];
        if (isset($_POST["delete"])) {
            $id = filter_input(INPUT_POST, "delete");
            $userDB->deleteUser($id);
        } elseif (isset($_POST["addUser"])) {
            $user = filter_input_array(INPUT_POST);
            if ($userDB->getUserByLogin($user['login'])) {
                $errors[] = 'this user already registered';
            } else {
                $validate = new Validation();
                $result = $validate->validateUserData($user['login'], $user['password']);
                if (is_bool($result) && $result) {
                    if ($user['password'] === $user['password_confirm']) {
                        $userDB->addUser($user['login'], $user['password'], $user['email']);
                    } else {
                        $errors[] = 'Password mismatch';
                    }
                } else {
                    $errors = $result;
                }
            }
        }

        $_SESSION['error'] = $errors;
        $uri = $_SERVER['REQUEST_URI'];
        self::redirect($uri);
    }

    /**
     * method for delete or add posts
     */
    static public function newsRequest()
    {
        $newsDB = new News();
        if (isset($_POST["delete"])) {
            $id = filter_input(INPUT_POST, "delete");
            $newsDB->deletePost($id);
        } elseif (isset($_POST["update"])) {
            $news = filter_input_array(INPUT_POST);
            $newsDB->editPost($news['name'], $news['short_text'], $news['main_text'], $news['update']);
        } elseif (isset($_POST["edit"])) {
            $id = filter_input(INPUT_POST, "edit");
            $post = $newsDB->getNewsById($id);
            $view = new View('edit_post.php');
            $view->news = $post;
            $view->render();
            exit();
        } elseif (isset($_POST["insert"])) {
            $news = filter_input_array(INPUT_POST);
            $newsDB->addPost($news['name'], $news['short_text'], $news['main_text'], $news['insert']);
            self::redirect('/admin.php?show=news');
            exit();
        }

        $uri = $_SERVER['REQUEST_URI'];
        self::redirect($uri);
    }

    /**
     * redirect to main page
     * @param $uri
     */
    static public function redirect($uri)
    {
        header("Location: $uri");
    }
}