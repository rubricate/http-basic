<?php

namespace Rubricate\HttpBasic;

interface IHasSessionHttpBasic
{
    public function has(string $key): bool;
}

