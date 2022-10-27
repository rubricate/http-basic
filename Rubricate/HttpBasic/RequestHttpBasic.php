<?php

namespace Rubricate\HttpBasic;

class RequestHttpBasic implements IRequestHttpBasic
{
    public function get($key = null, $default = null)
    {
        return 
           (func_num_args() === 0)?
           $_GET: self::arr($_GET, $key, $default);
    } 

    public function post($key = null, $default = null)
    {
        return 
           (func_num_args() === 0)?
           $_POST: self::arr($_POST, $key, $default);
    } 

    public function files($key = null, $default = null)
    {
        return 
           (func_num_args() === 0)?
           $_FILES: self::arr($_FILES, $key, $default);
    } 

    public function server($key = null, $default = null)
    {
        $key = ucwords($key);
        return 
           (func_num_args() === 0)?
           $_SERVER: self::arr($_SERVER, $key, $default);
    } 

    public function cookie($key = null, $default = null)
    {
        return 
           (func_num_args() === 0)?
           $_COOKIE: self::arr($_COOKIE, $key, $default);
    } 

    private function arr($arr, $key, $default)
    {
        return (!array_key_exists($key, $arr))? $default: $arr[$key];
    } 
}    

