<?php

namespace Rubricate\HttpBasic;

interface ICacheExpireSessionHttpBasic
{
    public function cacheExpire(?int $num = null): int|false;
}


