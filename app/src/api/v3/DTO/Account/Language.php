<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Account;

use InvalidArgumentException;

class Language
{
    public const ENGLISH = 0;

    public const DUTCH = 1;

    private int $value;

    public function __construct(int $value)
    {
        if (!in_array($value, [self::ENGLISH, self::DUTCH])) {
            throw new InvalidArgumentException('Invalid Language: ' . $value);
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}
