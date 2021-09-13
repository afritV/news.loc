<?php

/**
 * Class User
 * описывает все действия что будут с пользователем. Создание пользователя, удаление, получить список всех пользователей
 */
class User extends Connect
{
    /**
     * @return array|null
     * creating assoc array with users
     */
    public function getAllUsers(): ?array
    {
        $sql = "SELECT * FROM users;";
        $result = $this->db->query($sql);
        if ($result) {
            $users = [];
            while ($user = $result->fetch_assoc()) {
                $users[] = $user;
            }
            return $users;
        }
        return null;
    }

    /**
     * @param string $login
     * @return array|null
     */
    public function getUserByLogin(string $login): ?array
    {
        $sql = "SELECT * FROM users where login like '$login';";
        $result = $this->db->query($sql);
        if ($result) {
            return $result->fetch_assoc();
        }
        return null;
    }

    /**
     * @param string $login
     * @param string $password
     * @return bool|null
     */
    public function checkUser(string $login, string $password): ?bool
    {
        $userData = $this->getUserByLogin($login);
        if ($userData) {
            if (password_verify($password, $userData['password'])) {
                return true;
            } else {
                $_SESSION['error'] = 'password is invalid';
                return null;
            }
        } else {
            $_SESSION['error'] = 'no such user';
            return null;
        }
    }

    /**
     * @param string $login
     * @param string $password
     * @param string $email
     * adding new user to DB
     */
    public function addUser(string $login, string $password, string $email)
    {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $sql = "INSERT INTO users (login, password, email) VALUES ('$login','$password', '$email')";
        $this->db->query($sql);
    }

    /**
     * @param string $id
     * delete user from DB
     */
    public function deleteUser(string $id)
    {
        $sql = "DELETE FROM users WHERE id = '$id'";
        $this->db->query($sql);
    }
}