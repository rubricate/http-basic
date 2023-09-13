<?php

declare(strict_types=1);

namespace Rubricate\HttpBasic;

use Rubricate\Arr\StemArr;

class SessionHttpBasic
{
    private $arr;

    public function __construct()
    {
        $this->arr = new StemArr();
    }

    public function cacheLimiter($limiter = null): ?string
    {
        return session_cache_limiter($limiter);
    }

    public function cacheExpire($num = null): ?int
    {
        return session_cache_expire($num);
    }

    public function start($optionArr = []): object
    {
        if(!self::id()) {
            session_start($optionArr);
        }

        return $this;
    }

    public function destroy(): object
    {
        session_unset();
        session_destroy();

        return $this;
    }

    public function set($key, $value): object
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function get($key) 
    {
        return $this->arr->get($_SESSION, $key);
    }

    public function del($key): bool
    {
        if(!$this->is($key)) {
            return false;
        }

        unset($_SESSION[$key]);
        return true;
    }

    public function id(): ?string
    {
        return session_id();
    }

    public function all(): array
    {
        return $_SESSION;
    }

    public function is($key): bool 
    {
        return (!empty(self::get($key)));
    }

}

