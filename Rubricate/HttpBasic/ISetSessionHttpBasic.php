<?php

namespace Rubricate\HttpBasic;

interface ISetSessionHttpBasic
{
    public function set(string $key, mixed $value): self;
}

