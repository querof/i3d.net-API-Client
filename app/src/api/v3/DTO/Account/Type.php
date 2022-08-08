<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Account;

use InvalidArgumentException;

class Type
{
    public const CONSUMER = 1;

    public const BUSINESS = 2;

    private int $value;

    public function __construct(int $value)
    {
        if(!in_array($value, [self::CONSUMER, self::BUSINESS]))
        {
            throw new InvalidArgumentException('Invalid Account type');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}