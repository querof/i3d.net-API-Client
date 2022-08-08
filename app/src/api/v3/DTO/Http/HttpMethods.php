<?php

declare(strict_types=1);

namespace i3D\src\api\v3\Enums;

use InvalidArgumentException;

class HttpMethod
{
    public const HTTP_METHOD_GET = 'GET';

    public const HTTP_METHOD_POST = 'POST';

    public const HTTP_METHOD_PUT = 'PUT';

    public const HTTP_METHOD_DELETE = 'DELETE';

    private string $value;

    public function __construct(int $value)
    {
        if(
            !in_array(
            $value,
            [
                self::HTTP_METHOD_GET,
                self::HTTP_METHOD_POST,
                self::HTTP_METHOD_PUT,
                self::HTTP_METHOD_DELETE
            ]
        )
        )
        {
            throw new InvalidArgumentException('Invalid Http method');
        }

        $this->value = $value;
    }

    public function getValue(): int
    {
        return $this->value;
    }
}