<?php

namespace Rubricate\HttpBasic;

interface IGetHttpBasic
{
    public function get(?string $key, mixed $default = null): mixed;
}

