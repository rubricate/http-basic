<?php

namespace Rubricate\HttpBasic;

interface ICacheLimiterHttpBasic
{
    public function cacheLimiter(?string $limiter = null): string|false;
}


