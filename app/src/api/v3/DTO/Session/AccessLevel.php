<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Session;

use InvalidArgumentException;

class AccessLevel
{
    public const GUEST = 0;

    public const REGULAR_LOGGED_IN_USER = 10;

    public const GAME_HOSTING_MANAGEMENT_ACCESS = 20;

    private int $value;

    public function __construct(int $value)
    {
        if(
            !in_array(
                $value,
                [
                    self::GUEST,
                    self::REGULAR_LOGGED_IN_USER,
                    self::GAME_HOSTING_MANAGEMENT_ACCESS
                ]
            )
        )
        {
            throw new InvalidArgumentException('Invalid Access level');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}