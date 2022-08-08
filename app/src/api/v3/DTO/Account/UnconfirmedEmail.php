<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Account;

class UnconfirmedEmail
{
    private string $email;

    private int $expiresAt;

    public function __construct(string $email, int $expiresAt)
    {
        $this->email = $email;
        $this->expiresAt = $expiresAt;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getExpiresAt(): int
    {
        return $this->expiresAt;
    }
}