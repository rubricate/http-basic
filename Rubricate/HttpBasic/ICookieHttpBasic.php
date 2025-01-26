<?php

namespace Rubricate\HttpBasic;

interface ICookieHttpBasic
{
    public function cookie(?string $key, mixed $default = null): mixed;
}

