<?php

declare(strict_types=1);

namespace i3D\src\api\v3;

use i3d\src\api\SessionManagementInterface;
use i3D\src\api\v3\DTO\Session\User;
use i3D\src\api\v3\Factory\SessionUser;
use Symfony\Contracts\HttpClient\Exception\ClientExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\RedirectionExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\ServerExceptionInterface;
use Symfony\Contracts\HttpClient\Exception\TransportExceptionInterface;
use Symfony\Contracts\HttpClient\HttpClientInterface;

class Client implements SessionManagementInterface
{
    private const BASE_URL = 'https://api.i3d.net/v3/';

    private const APIKEY = 'hD5546xK23e8Y5803J2p';

    private const SESSION_MANAGEMENT_USER_URL = self::BASE_URL . 'session/user';

    private HttpClientInterface $httpClient;

    private SessionUser $sessionUserFactory;

    public function __construct(HttpClientInterface $httpClient, SessionUser $sessionUserFactory)
    {
        $this->httpClient = $httpClient;
        $this->sessionUserFactory = $sessionUserFactory;
    }

    /**
     * @throws ClientException
     */
    public function getUser(): User
    {
        try {
            $response = $this->httpClient->request(
                'GET',
                self::SESSION_MANAGEMENT_USER_URL,
                [
                    'headers' => [
                        'PRIVATE-TOKEN' => self::APIKEY,
                    ],
                ]
            );

            return $this->sessionUserFactory->create((array)$response->getContent());
        } catch (
            ClientExceptionInterface |
            RedirectionExceptionInterface |
            ServerExceptionInterface |
            TransportExceptionInterface $exception
        ) {
            throw new ClientException($exception->getMessage(), $exception->getCode(), $exception);
        }
    }
}
