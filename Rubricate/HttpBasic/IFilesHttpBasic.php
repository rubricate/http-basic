<?php

namespace Rubricate\HttpBasic;

interface IFilesHttpBasic
{
    public function files(?string $key, mixed $default = null): mixed;
}

