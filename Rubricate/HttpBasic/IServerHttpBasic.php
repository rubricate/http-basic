<?php

namespace Rubricate\HttpBasic;

interface IServerHttpBasic
{
    public function server(?string $key, mixed $default = null): mixed;
}

