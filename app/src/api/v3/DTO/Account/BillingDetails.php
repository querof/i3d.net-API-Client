<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Account;

class BillingDetails
{
    private string $firstName;

    private string $lastName;

    private string $address;

    private string $streetNumber;

    private string $zipCode;

    private string $city;

    private string $countryCode;

    private ?string $phoneNumber;

    private ?string $phoneNumberMobile;

    private ?string $emailAddressBilling;

    private int $bundleInvoicesOfSameCategory;

    private int $receivePaymentConfirmationsViaEmail;

    private int $preferredPaymentMethod;

    public function __construct(
        string $firstName,
        string $lastName,
        string $address,
        string $streetNumber,
        string $zipCode,
        string $city,
        string $countryCode,
        ?string $phoneNumber,
        ?string $phoneNumberMobile,
        ?string $emailAddressBilling,
        int $bundleInvoicesOfSameCategory,
        int $receivePaymentConfirmationsViaEmail,
        int $preferredPaymentMethod
    )
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->streetNumber = $streetNumber;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->phoneNumber = $phoneNumber;
        $this->phoneNumberMobile = $phoneNumberMobile;
        $this->emailAddressBilling = $emailAddressBilling;
        $this->bundleInvoicesOfSameCategory = $bundleInvoicesOfSameCategory;
        $this->receivePaymentConfirmationsViaEmail = $receivePaymentConfirmationsViaEmail;
        $this->preferredPaymentMethod = $preferredPaymentMethod;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getAddress(): string
    {
        return $this->address;
    }

    public function getStreetNumber(): string
    {
        return $this->streetNumber;
    }

    public function getZipCode(): string
    {
        return $this->zipCode;
    }

    public function getCity(): string
    {
        return $this->city;
    }

    public function getCountryCode(): string
    {
        return $this->countryCode;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getPhoneNumberMobile(): ?string
    {
        return $this->phoneNumberMobile;
    }

    public function getEmailAddressBilling(): ?string
    {
        return $this->emailAddressBilling;
    }

    public function getBundleInvoicesOfSameCategory(): int
    {
        return $this->bundleInvoicesOfSameCategory;
    }

    public function getReceivePaymentConfirmationsViaEmail(): int
    {
        return $this->receivePaymentConfirmationsViaEmail;
    }

    public function getPreferredPaymentMethod(): int
    {
        return $this->preferredPaymentMethod;
    }
}
