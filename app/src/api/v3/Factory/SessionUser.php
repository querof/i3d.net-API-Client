<?php

declare(strict_types=1);

namespace i3D\src\api\v3\Factory;

use i3D\src\api\v3\DTO\Account\BillingDetails;
use i3D\src\api\v3\DTO\Account\Details;
use i3D\src\api\v3\DTO\Account\Language;
use i3D\src\api\v3\DTO\Account\Type;
use i3D\src\api\v3\DTO\Account\UnconfirmedEmail;
use i3D\src\api\v3\DTO\Session\AccessLevel;
use i3D\src\api\v3\DTO\Session\User;

class SessionUser
{
    public function create(array $responseBody): User
    {
        return new User(
            $responseBody['userId'],
            $responseBody['userName'],
            $responseBody['email'],
            $responseBody['gender'],
            $responseBody['phone'],
            new AccessLevel($responseBody['accessLevel']),
            $responseBody['validateEmail'],
            $responseBody['requestIp'],
            $responseBody['requestIpCountry'],
            $responseBody['requestIpCountryCode'],
            $this->createDetails($responseBody['details']),
            $this->createBillingDetails($responseBody['billingDetails'])
        );
    }

    private function createDetails(array $details): Details
    {
        return new Details(
            new Type($details['accountType']),
            $details['companyName'],
            $details['$vatNumber'],
            $details['cocNumber'],
            $details['firstName'],
            $details['$lastName'],
            $details['address'],
            $details['streetNumber'],
            $details['zipCode'],
            $details['city'],
            $details['countryCode'],
            $details['emailAddress'],
            new UnconfirmedEmail(
                $details['unconfirmedEmail']['email'],
                $details['unconfirmedEmail']['$expiresAt']
            ),
            $details['emailAddressValidated'],
            $details['phoneNumber'],
            $details['phoneNumberMobile'],
            new Language($details['language']),
            $details['emailAddressAbuse'],
            $details['newsletter'],
            $details['agreeToc'],
            $details['agreeAup'],
            $details['agreeDpa'],
            $details['isAllowedFlexMetal']
        );
    }

    private function createBillingDetails(array $billingDetails): BillingDetails
    {
        return new BillingDetails(
            $billingDetails['firstName'],
            $billingDetails['lastName'],
            $billingDetails['address'],
            $billingDetails['streetNumber'],
            $billingDetails['zipCode'],
            $billingDetails['city'],
            $billingDetails['countryCode'],
            $billingDetails['phoneNumber'],
            $billingDetails['phoneNumberMobile'],
            $billingDetails['emailAddressBilling'],
            $billingDetails['bundleInvoicesOfSameCategory'],
            $billingDetails['receivePaymentConfirmationsViaEmail'],
            $billingDetails['preferredPaymentMethod']
        );
    }
}
