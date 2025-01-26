<?php

declare(strict_types=1);

namespace Rubricate\HttpBasic;

use Rubricate\Arr\StemArr;

class SessionHttpBasic implements ISessionHttpBasic
{
    private StemArr $arr;

    public function __construct()
    {
        $this->arr = new StemArr();
    }

    public function cacheLimiter(?string $limiter = null): string|false
    {
        return session_cache_limiter($limiter);
    }

    public function cacheExpire(?int $num = null): int|false
    {
        return session_cache_expire($num);
    }

    public function start(array $option = []): bool
    {
        if (session_status() === PHP_SESSION_NONE) {
            return session_start($option);
        }

        return false;
    }

    public function destroy(): bool
    {
        if (session_status() === PHP_SESSION_ACTIVE) {
            session_unset();
            return session_destroy();
        }

        return false;
    }

    public function set(string $key, mixed $value): self
    {
        $_SESSION[$key] = $value;
        return $this;
    }

    public function get(string $key): mixed
    {
        return $this->arr->get($_SESSION, $key);
    }

    public function del(string $key): bool
    {
        if($this->has($key)) {
            unset($_SESSION[$key]);
            return true;
        }

        return false;
    }

    public function id(?string $id = null): string|false
    {
        if ($id !== null) {
            return session_id($id);
        }

        return session_id();
    }

    public function all(): array
    {
        return $_SESSION;
    }

    public function has(string $key): bool
    {
        return (!empty(self::get($key)));
    }
}

