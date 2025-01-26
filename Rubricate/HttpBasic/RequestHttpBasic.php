<?php

namespace Rubricate\HttpBasic;

use Rubricate\Arr\StemArr;

class RequestHttpBasic implements IRequestHttpBasic
{
    private StemArr $arr;

    public function __construct()
    {
        $this->arr = new StemArr();
    }

    public function get(?string $key = null, mixed $default = null): mixed
    {
        return self::arr($_GET, $key, $default);
    }

    public function post(?string $key, mixed $default = null): mixed
    {
        return self::arr($_POST, $key, $default);
    }

    public function files(?string $key, mixed $default = null): mixed
    {
        return self::arr($_FILES, $key, $default);
    }

    public function server(?string $key, mixed $default = null): mixed
    {
        $key = ($key === null)? null: strtoupper($key);

        return self::arr($_SERVER, $key, $default);
    }

    public function cookie(?string $key, mixed $default = null): mixed
    {
        return self::arr($_COOKIE, $key, $default);
    }

    private function arr(array $arr, ?string $key, mixed $default = null): mixed
    {
        return($key === null)? $arr: $this->arr->get($type, $key, $default);
    }

}    

