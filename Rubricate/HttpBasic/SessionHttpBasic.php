<?php

namespace Rubricate\HttpBasic;

use Rubricate\Arr\StemArr;

class SessionHttpBasic
{
    private $arr;

    public function __construct()
    {
        $this->arr = new StemArr();
    }

    public function cacheLimiter($limiter = null)
    {
        return session_cache_limiter($limiter);
    }

    public function cacheExpire($num = null)
    {
        return session_cache_expire($num);
    }

    public function start($optionArr = [])
    {
        if(!self::id()) {
            session_start($optionArr);
        }

        return $this;
    }

    public function destroy() 
    {
        session_unset();
        session_destroy();

        return $this;
    }

    public function set($key, $value)
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function get($key, $default = '') 
    {
        return $this->arr->get($_SESSION, $key);
    }

    public function del($key) 
    {
        if(!$this->is($key)) {
            return false;
        }

        unset($_SESSION[$key]);
        return true;
    }

    public function id() 
    {
        return session_id();
    }

    public function all()
    {
        return $_SESSION;
    }

    public function is($key) 
    {
        return (!empty(self::get($key)));
    }

}

