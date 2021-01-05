# AcqualifyAPI-php
The Acqualify API provides services to mortgage brokers and realtors to help applicants qualify for loans.

This PHP package is automatically generated by the [Swagger Codegen](https://github.com/swagger-api/swagger-codegen) project:

- API version: 1.0.0
- Build package: io.swagger.codegen.v3.generators.php.PhpClientCodegen

## Requirements

PHP 5.5 and later

## Installation & Usage
### Composer

Run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
    require_once('/path/to/AcqualifyAPI-php/vendor/autoload.php');
```

## Tests

To run the unit tests:

```
composer install
./vendor/bin/phpunit
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure API key authorization: bearer_token
$config = Acqualify\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Acqualify\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');
$config = Acqualify\Client\Configuration::getDefaultConfiguration()->setHost('http://localhost');

$apiInstance = new Acqualify\Client\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

$first_name = 'John';
$last_name = 'Doe';
$addr_line1 = '417 Montgomery St';
$city = 'San Francisco';
$state = 'CA';
$zip = '94104';
$dob = '01/01/1991';
$addr_line2 = '';
$email = 'johndoe@example.com';
$phone_number = '415-123-4567';
$loan_amount = '2000';

try {
    $result = $apiInstance->lookupApplicant($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->lookupApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

## Documentation for API Endpoints

All URIs are relative to */*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ApplicantsApi* | [**lookupApplicant**](docs/Api/ApplicantsApi.md#lookupapplicant) | **GET** /api/v1/lookup-applicant | Returns public information about a loan applicant

## Documentation For Models

 - [AddrLine1](docs/Model/AddrLine1.md)
 - [AddrLine2](docs/Model/AddrLine2.md)
 - [City](docs/Model/City.md)
 - [Dob](docs/Model/Dob.md)
 - [Email](docs/Model/Email.md)
 - [FirstName](docs/Model/FirstName.md)
 - [InlineResponse200](docs/Model/InlineResponse200.md)
 - [LastName](docs/Model/LastName.md)
 - [LoanAmount](docs/Model/LoanAmount.md)
 - [PhoneNumber](docs/Model/PhoneNumber.md)
 - [State](docs/Model/State.md)
 - [Zip](docs/Model/Zip.md)


## bearer_token

- **Type**: API key
- **API key parameter name**: Authorization
- **Location**: HTTP header



