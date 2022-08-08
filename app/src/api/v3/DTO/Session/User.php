<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Session;

use i3D\src\api\v3\DTO\Account\BillingDetails;
use i3D\src\api\v3\DTO\Account\Details;

class User
{
    private int $userId;

    private string $userName;

    private string $email;

    private string $firstName;

    private string $lastName;

    private string $gender;

    private string $phone;

    private AccessLevel $accessLevel;

    private int $validateEmail;

    private string $requestIp;

    private string $requestIpCountry;

    private string $requestIpCountryCode;

    private Details $details;

    private BillingDetails $billingDetails;

    public function __construct(
        int $userId,
        string $userName,
        string $email,
        string $gender,
        string $phone,
        AccessLevel $accessLevel,
        int $validateEmail,
        string $requestIp,
        string $requestIpCountry,
        string $requestIpCountryCode,
        Details $details,
        BillingDetails $billingDetails
    )
    {
        $this->userId = $userId;
        $this->userName = $userName;
        $this->email = $email;
        $this->gender = $gender;
        $this->phone = $phone;
        $this->accessLevel = $accessLevel;
        $this->validateEmail = $validateEmail;
        $this->requestIp = $requestIp;
        $this->requestIpCountry = $requestIpCountry;
        $this->requestIpCountryCode = $requestIpCountryCode;
        $this->details = $details;
        $this->billingDetails = $billingDetails;
    }

    public function getUserId(): int
    {
        return $this->userId;
    }

    public function getUserName(): string
    {
        return $this->userName;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getGender(): string
    {
        return $this->gender;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function getAccessLevel(): AccessLevel
    {
        return $this->accessLevel;
    }

    public function getValidateEmail(): int
    {
        return $this->validateEmail;
    }

    public function getRequestIp(): string
    {
        return $this->requestIp;
    }

    public function getRequestIpCountry(): string
    {
        return $this->requestIpCountry;
    }

    public function getRequestIpCountryCode(): string
    {
        return $this->requestIpCountryCode;
    }

    public function getDetails(): Details
    {
        return $this->details;
    }

    public function getBillingDetails(): BillingDetails
    {
        return $this->billingDetails;
    }
}