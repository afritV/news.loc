<?php

/**
 * Class Connect
 * connection to database
 */
class Connect
{
    /**
     * @var mysqli
     */
    public mysqli $db;

    /**
     * User constructor.
     */
    public function __construct()
    {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    }
}