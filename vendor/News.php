<?php

/**
 * Class News
 * описывает все действия что будут с новостями (постами). Создание, удаление, перезапись/update, получить все новости и получить одну новость по id
 */
class News extends Connect
{
    /**
     * @param int $pageNumber
     * @param int $limit
     * @return array|null
     * creating assoc array with news
     */
    public function getAllNews(int $pageNumber = 1, int $limit = 3): ?array
    {
        $sql = "SELECT posts.id, posts.name, posts.short_text AS view_text, posts.creation_date, users.login FROM posts LEFT OUTER JOIN users ON posts.user_id = users.id ORDER BY `posts`.`creation_date` DESC LIMIT ".$limit." OFFSET ".($pageNumber*3-3).";";
        $result = $this->db->query($sql);
        if ($result) {
            $news = [];
            while ($post = $result->fetch_assoc()) {
                $news[] = $post;
            }
            return $news;
        }
        return null;
    }

    public function countPosts(): ?array
    {
        $sql = "SELECT COUNT(posts.id) FROM `posts`;";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->fetch_array();
        }
        return null;
    }

    public function countPages(int $limit = 3): float
    {
        $countPosts = $this->countPosts();
        return ceil($countPosts[0]/$limit);
    }

    /**
     * @param $id
     * @return array|null
     */
    public function getNewsById($id): ?array
    {
        $sql = "SELECT posts.id, posts.name, posts.main_text AS view_text, posts.short_text, posts.creation_date, users.login FROM posts LEFT OUTER JOIN users ON posts.user_id = users.id where posts.id = '$id';";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->fetch_assoc();
        }
        return null;
    }

    /**
     * @param string $id
     */
    public function deletePost(string $id)
    {
        $sql = "DELETE FROM posts WHERE id = '$id'";
        $this->db->query($sql);
    }

    /**
     * @param string $name
     * @param string $shortText
     * @param string $mainText
     * @param string $author
     */
    public function addPost(string $name, string $shortText, string $mainText, string $author)
    {
        $sql = "INSERT INTO `posts` (`id`, `name`, `short_text`, `main_text`, `creation_date`, `user_id`) VALUES (NULL, '$name', '$shortText', '$mainText', CURRENT_TIMESTAMP, (SELECT users.id FROM users WHERE users.login LIKE '$author' LIMIT 1));";
        $this->db->query($sql);
    }

    /**
     * @param string $name
     * @param string $shortText
     * @param string $mainText
     * @param string $id
     */
    public function editPost(string $name, string $shortText, string $mainText, string $id)
    {
        $sql = "UPDATE `posts` SET `name` = '$name', `short_text` = '$shortText', `main_text` = '$mainText' WHERE `posts`.`id` = '$id';";
        $this->db->query($sql);
    }
}