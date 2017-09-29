<?php

/*
 *
 * @package     RubricatePHP
 * @author      Estefanio NS <estefanions AT gmail DOT com>
 * @link        https://github.com/rubricate/http
 * @copyright   2017
 * 
 */

namespace Rubricate\Http;



class RequestHttp
{





    public function get($key = NULL, $default = NULL)
    {
       return 
           (func_num_args() === 0)?
           $_GET: self::arr($_GET, $key, $default);
    } 








    public function post($key = NULL, $default = NULL)
    {
       return 
           (func_num_args() === 0)?
           $_POST: self::arr($_POST, $key, $default);
    } 







    public function files($key = NULL, $default = NULL)
    {
       return 
           (func_num_args() === 0)?
           $_FILES: self::arr($_FILES, $key, $default);
    } 







    public function server($key = NULL, $default = NULL)
    {
        $key = ucwords($key);
       return 
           (func_num_args() === 0)?
           $_SERVER: self::arr($_SERVER, $key, $default);
    } 







    public function cookies($key = NULL, $default = NULL)
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



