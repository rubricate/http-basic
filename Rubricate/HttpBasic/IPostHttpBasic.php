<?php

namespace Rubricate\HttpBasic;

interface IPostHttpBasic
{
    public function post(?string $key, mixed $default = null): mixed;
}

