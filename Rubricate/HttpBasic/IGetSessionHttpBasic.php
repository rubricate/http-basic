<?php

namespace Rubricate\HttpBasic;

interface IGetSessionHttpBasic
{
    public function get(string $key): mixed;
}

