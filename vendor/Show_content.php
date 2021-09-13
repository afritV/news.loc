<?php


class Show_content
{
    /**
     * show all users and form to add new user
     */
    static public function showUsers()
    {
        $userDB = new User();
        $view = new View('users_admin.php');
        $users = $userDB->getAllUsers();
        $view->users = $users;
        $view->render();
    }

    /**
     * show all news or one post by Id for Index.php
     * @param $page (posts.php for all news, or post_by_id for one post)
     * @param null $show can be null or 'post' if we wont to show one post
     */
    static public function showNews($page, $show = null)
    {
        $getInfo = filter_input_array(INPUT_GET);
        if ($_SERVER["PHP_SELF"] === "/admin.php") {
            $template = 'admin_template.php';
            $limit = 9;
        } else {
            $template = 'index_template.php';
            $limit = 3;
        }
        $newsDB = new News();
        $view = new View($page, $template);
        if ($show === 'post') {
            $news = $newsDB->getNewsById($getInfo['id']);
        } elseif (isset($getInfo['page'])) {
            $news = $newsDB->getAllNews($getInfo['page'], $limit);
        } else {
            $news = $newsDB->getAllNews(1, $limit);
        }
        $view->news = $news;
        $view->pages = $newsDB->countPages($limit);
        $view->render();
    }
}