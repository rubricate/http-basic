<?php

namespace Rubricate\HttpBasic;

use Rubricate\Arr\StemArr;

class RequestHttpBasic implements IRequestHttpBasic
{
    private $arr;

    public function __construct()
    {
        $this->arr = new StemArr();
    }

    public function get($key = null, $default = null)
    {
        if(func_num_args() === 0){
            return $_GET;
        }

        return $this->arr->get($_GET, $key, $default);
    }

    public function post($key = null, $default = null)
    {
        if(func_num_args() === 0){
            return $_POST;
        }

        return $this->arr->get($_POST, $key, $default);
    }

    public function files($key = null, $default = null)
    {
        if(func_num_args() === 0){
            return $_FILES;
        }

        return $this->arr->get($_FILES, $key, $default);
    }

    public function server($key = null, $default = null)
    {
        if(func_num_args() === 0){
            return $_SERVER;
        }

        return $this->arr->get($_SERVER, strtoupper((string) $key), $default);
    }

    public function cookie($key = null, $default = null)
    {
        if(func_num_args() === 0){
            return $_COOKIE;
        }

        return $this->arr->get($_COOKIE, $key, $default);
    }

}    

