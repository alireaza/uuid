<?php

namespace AliReaza\UUID;

use Throwable;

class V4
{
    public function __toString(): string
    {
        try {
            $binary = random_bytes(16);
        } catch (Throwable) {
            $binary = sha1(time() . rand(), true);
        }

        $hex = bin2hex($binary);

        return implode('-', [
            substr($hex, 0, 8),
            substr($hex, 8, 4),
            substr($hex, 12, 4),
            substr($hex, 16, 4),
            substr($hex, 20, 12),
        ]);
    }
}
