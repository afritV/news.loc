<?php


class Validation
{
    /**
     * @param string $login
     * @param string $password
     * @return array|bool
     */
    public function validateUserData(string $login, string $password): bool|array
    {
        $errors = [];
        if (strlen($login) < 6){
            $errors[] = 'Login less than 6 chars';
        }
        if (strlen($password) < 6){
            $errors[] = 'Password less than 6 chars';
        }
        if (!$this->containDigit($password)){
            $errors[] = 'Password should contain at least 1 digit';
        }
        if (!$this->containUpper($password)){
            $errors[] = 'Password should contain at least 1 upper symbol';
        }
        if (!$this->containLower($password)){
            $errors[] = 'Password should contain at least 1 lower symbol';
        }
        if (count($errors)){
            return $errors;
        } else {
            return true;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public function containDigit(string $string): bool
    {
        $contain = false;
        $count = strlen($string);
        for ($i = 0; $i < $count; $i++){
            if (ctype_digit($string[$i])){
                $contain = true;
                break;
            }
        }

        if ($contain){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public function containLower(string $string): bool
    {
        $contain = false;
        $count = strlen($string);
        for ($i = 0; $i < $count; $i++){
            if (ctype_lower($string[$i])){
                $contain = true;
                break;
            }
        }

        if ($contain){
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $string
     * @return bool
     */
    public function containUpper(string $string): bool
    {
        $contain = false;
        $count = strlen($string);
        for ($i = 0; $i < $count; $i++){
            if (ctype_upper($string[$i])){
                $contain = true;
                break;
            }
        }

        if ($contain){
            return true;
        } else {
            return false;
        }
    }
}