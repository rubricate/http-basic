<?php

namespace Rubricate\HttpBasic;

interface IIdSessionHttpBasic
{
    public function id(?string $id = null): string|false;
}

