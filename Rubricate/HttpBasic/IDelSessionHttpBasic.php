<?php

namespace Rubricate\HttpBasic;

interface IDelSessionHttpBasic
{
    public function del(string $key): bool;
}

