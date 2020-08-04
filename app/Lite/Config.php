<?php

namespace Lite;

class Config
{
    private $host = 'localhost';
    private $database = 'lite';
    private $username = 'root';
    private $password = '';

    public function getHost()
    {
        return $this->host;
    }

    public function getDatabase()
    {
        return $this->database;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getPassword()
    {
        return $this->password;
    }

}