<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO;

class APILog
{
    private APIRequest $request;
    private APIResponse $response;

    public function __construct(APIRequest $request, APIResponse $response)
    {
        $this->request = $request;
        $this->response = $response;
    }

    public function getRequest(): APIRequest
    {
        return $this->request;
    }

    public function getResponse(): APIResponse
    {
        return $this->response;
    }
}