<?php

declare(strict_types=1);

namespace i3D\test\api\v3;

use i3D\src\api\v3\Client;
use i3D\src\api\v3\DTO\Account\BillingDetails;
use i3D\src\api\v3\DTO\Account\Details;
use i3D\src\api\v3\DTO\Account\Language;
use i3D\src\api\v3\DTO\Account\Type;
use i3D\src\api\v3\DTO\Account\UnconfirmedEmail;
use i3D\src\api\v3\DTO\Session\AccessLevel;
use i3D\src\api\v3\DTO\Session\User;
use i3D\src\api\v3\Factory\SessionUser;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;
use Symfony\Contracts\HttpClient\HttpClientInterface;
use Symfony\Contracts\HttpClient\ResponseInterface;

class ClientTest extends TestCase
{
    /**
     * @var MockObject|HttpClientInterface
     */
    private $httpClientInterface;

    /**
     * @var SessionUser|MockObject
     */
    private $sessionUserFactory;

    /**
     * @var MockObject|ResponseInterface
     */
    private $response;


    private Client $client;

    public function testSuccessfullyGetSessionUser(): void
    {
        $this->response->method('toArray')
            ->willReturn($this->getResponseContentArrayMock());

        $this->httpClientInterface->method('request')
            ->willReturn($this->response);

        $this->sessionUserFactory->method('create')
            ->willReturn($this->getSessionUserMock());

        $response = $this->client->getUser();

        self::assertEquals($this->getSessionUserMock(), $response);
    }

    private function getResponseContentArrayMock(): array
    {
        return [
            "userId" => 0,
            "userName" => "string",
            "email" => "string",
            "firstName" => "string",
            "lastName" => "string",
            "gender" => "string",
            "phone" => "string",
            "accessLevel" => 0,
            "validateEmail" => 0,
            "requestIp" => "string",
            "requestIpCountry" => "string",
            "requestIpCountryCode" => "string",
            "details" => [
                "accountType" => 10,
                "companyName" => "string",
                "vatNumber" => "string",
                "cocNumber" => "string",
                "firstName" => "string",
                "lastName" => "string",
                "address" => "string",
                "streetNumber" => "string",
                "zipCode" => "string",
                "city" => "string",
                "countryCode" => "string",
                "emailAddress" => "string",
                "unconfirmedEmail" => [
                    "email" => "string",
                    "expiresAt" => 0
                ],
                "emailAddressValidated" => 0,
                "phoneNumber" => "string",
                "phoneNumberMobile" => "string",
                "language" => 0,
                "emailAddressAbuse" => "string",
                "newsletter" => 0,
                "agreeToc" => 0,
                "agreeAup" => 0,
                "agreeDpa" => 0,
                "isAllowedFlexMetal" => 0
            ],
            "billingDetails" => [
                "firstName" => "string",
                "lastName" => "string",
                "address" => "string",
                "streetNumber" => "string",
                "zipCode" => "string",
                "city" => "string",
                "countryCode" => "string",
                "phoneNumber" => "string",
                "phoneNumberMobile" => "string",
                "emailAddressBilling" => "string",
                "bundleInvoicesOfSameCategory" => 0,
                "receivePaymentConfirmationsViaEmail" => 0,
                "preferredPaymentMethod" => 0
            ]
        ];
    }

    private function getSessionUserMock(): User
    {
        return new User(
            0,
            'string',
            'string',
            'string',
            'string',
            new AccessLevel(0),
            0,
            'string',
            'string',
            'string',
            $this->getDetailsMock(),
            $this->getBillingDetailsMock()
        );
    }

    private function getDetailsMock(): Details
    {
        return new Details(
            new Type(1),
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            new UnconfirmedEmail(
                'string',
                0
            ),
            0,
            'string',
            'string',
            new Language(0),
            'string',
            0,
            0,
            0,
            0,
            0
        );
    }

    private function getBillingDetailsMock(): BillingDetails
    {
        return new BillingDetails(
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            'string',
            0,
            0,
            0
        );
    }

    protected function setUp(): void
    {
        $this->httpClientInterface = $this->createMock(HttpClientInterface::class);
        $this->sessionUserFactory = $this->createMock(SessionUser::class);
        $this->response = $this->createMock(ResponseInterface::class);

        $this->client = new Client($this->httpClientInterface, $this->sessionUserFactory);
    }
}
