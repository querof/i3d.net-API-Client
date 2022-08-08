<?php

declare(strict_types=1);

namespace i3D\src\api\v3\DTO\Account;

class Details
{
    private Type $accountType;

    private ?string $companyName;

    private ?string $vatNumber;

    private ?string $cocNumber;

    private string $firstName;

    private string $lastName;

    private string $address;

    private string $streetNumber;

    private string $zipCode;

    private string $city;

    private string $countryCode;

    private string $emailAddress;

    private UnconfirmedEmail $unconfirmedEmail;

    private int $emailAddressValidated;

    private ?string $phoneNumber;

    private ?string $phoneNumberMobile;

    private Language $language;

    private ?string $emailAddressAbuse;

    private ?int $newsletter;

    private ?int $agreeToc;

    private ?int $agreeAup;

    private int $agreeDpa;

    private int $isAllowedFlexMetal;

    public function __construct(
        Type $accountType,
        ?string $companyName,
        ?string $vatNumber,
        ?string $cocNumber,
        string $firstName,
        string $lastName,
        string $address,
        string $streetNumber,
        string $zipCode,
        string $city,
        string $countryCode,
        string $emailAddress,
        UnconfirmedEmail $unconfirmedEmail,
        int $emailAddressValidated,
        ?string $phoneNumber,
        ?string $phoneNumberMobile,
        Language $language,
        ?string $emailAddressAbuse,
        ?int $newsletter,
        ?int $agreeToc,
        ?int $agreeAup,
        int $agreeDpa,
        int $isAllowedFlexMetal)
    {
        $this->accountType = $accountType;
        $this->companyName = $companyName;
        $this->vatNumber = $vatNumber;
        $this->cocNumber = $cocNumber;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->address = $address;
        $this->streetNumber = $streetNumber;
        $this->zipCode = $zipCode;
        $this->city = $city;
        $this->countryCode = $countryCode;
        $this->emailAddress = $emailAddress;
        $this->unconfirmedEmail = $unconfirmedEmail;
        $this->emailAddressValidated = $emailAddressValidated;
        $this->phoneNumber = $phoneNumber;
        $this->phoneNumberMobile = $phoneNumberMobile;
        $this->language = $language;
        $this->emailAddressAbuse = $emailAddressAbuse;
        $this->newsletter = $newsletter;
        $this->agreeToc = $agreeToc;
        $this->agreeAup = $agreeAup;
        $this->agreeDpa = $agreeDpa;
        $this->isAllowedFlexMetal = $isAllowedFlexMetal;
    }

    public function getAccountType(): Type
    {
        return $this->accountType;
    }

    public function getCompanyName(): ?string
    {
        return $this->companyName;
    }

    public function getVatNumber(): ?string
    {
        return $this->vatNumber;
    }

    public function getCocNumber(): ?string
    {
        return $this->cocNumber;
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

    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }

    public function getUnconfirmedEmail(): UnconfirmedEmail
    {
        return $this->unconfirmedEmail;
    }

    public function getEmailAddressValidated(): int
    {
        return $this->emailAddressValidated;
    }

    public function getPhoneNumber(): ?string
    {
        return $this->phoneNumber;
    }

    public function getPhoneNumberMobile(): ?string
    {
        return $this->phoneNumberMobile;
    }

    public function getLanguage(): Language
    {
        return $this->language;
    }

    public function getEmailAddressAbuse(): ?string
    {
        return $this->emailAddressAbuse;
    }

    public function getNewsletter(): ?int
    {
        return $this->newsletter;
    }

    public function getAgreeToc(): ?int
    {
        return $this->agreeToc;
    }

    public function getAgreeAup(): ?int
    {
        return $this->agreeAup;
    }

    public function getAgreeDpa(): int
    {
        return $this->agreeDpa;
    }

    public function getIsAllowedFlexMetal(): int
    {
        return $this->isAllowedFlexMetal;
    }
}
