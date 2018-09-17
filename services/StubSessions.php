<?php
namespace app\services;


class Sessions
{
    public function __construct()
    {
        session_start();
    }

    public function get($key)
    {
        return $_SESSION[$key];
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public function issetItem($key)
    {
        return isset($_SESSION[$key]);
    }
}