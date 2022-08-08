<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO;

class APIResponse
{
    private float $responseTime;
    private int $code;
    private array $body;

    public function __construct(float $responseTime, int $code, array $body)
    {
        $this->responseTime = $responseTime;
        $this->code = $code;
        $this->body = $body;
    }

    public function getResponseTime(): float
    {
        return $this->responseTime;
    }

    public function getCode(): int
    {
        return $this->code;
    }

    public function getBody(): array
    {
        return $this->body;
    }
}
