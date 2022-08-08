<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO;

use i3D\src\api\v3\Enums\HttpMethod;

class APIRequest
{
    private string $url;
    private HttpMethod $method;
    private array $header;
    private string $queryParameter;
    private string $ipAddress;
    private int $requestTimestamp;
    private array $body;

    public function __construct(
        string $url,
        HttpMethod $method,
        array $header,
        string $queryParameter,
        string $ipAddress,
        int $requestTimestamp,
        array $body
    )
    {
        $this->url = $url;
        $this->method = $method;
        $this->header = $header;
        $this->queryParameter = $queryParameter;
        $this->ipAddress = $ipAddress;
        $this->requestTimestamp = $requestTimestamp;
        $this->body = $body;
    }

    public function getUrl(): string
    {
        return $this->url;
    }

    public function getMethod(): HttpMethod
    {
        return $this->method;
    }

    public function getHeader(): array
    {
        return $this->header;
    }

    public function getQueryParameter(): string
    {
        return $this->queryParameter;
    }

    public function getIpAddress(): string
    {
        return $this->ipAddress;
    }

    public function getRequestTimestamp(): int
    {
        return $this->requestTimestamp;
    }

    public function getBody(): array
    {
        return $this->body;
    }
}