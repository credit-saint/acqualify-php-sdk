# Acqualify\Client\ApplicantsApi

All URIs are relative to */*

Method | HTTP request | Description
------------- | ------------- | -------------
[**lookupApplicant**](ApplicantsApi.md#lookupapplicant) | **GET** /api/v1/lookup-applicant | Returns public information about a loan applicant

# **lookupApplicant**
> \Acqualify\Client\Model\InlineResponse200 lookupApplicant($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount)

Returns public information about a loan applicant

See publicly available financial info about a loan applicant including credit score, based on name, address and date of birth

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: bearer_token
$config = Acqualify\Client\Configuration::getDefaultConfiguration()->setApiKey('Authorization', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = Acqualify\Client\Configuration::getDefaultConfiguration()->setApiKeyPrefix('Authorization', 'Bearer');

$apiInstance = new Acqualify\Client\Api\ApplicantsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$first_name = new \Acqualify\Client\Model\FirstName(); // \Acqualify\Client\Model\FirstName | Applicant first name
$last_name = new \Acqualify\Client\Model\LastName(); // \Acqualify\Client\Model\LastName | Applicant last name
$addr_line1 = new \Acqualify\Client\Model\AddrLine1(); // \Acqualify\Client\Model\AddrLine1 | Address line 1
$city = new \Acqualify\Client\Model\City(); // \Acqualify\Client\Model\City | City
$state = new \Acqualify\Client\Model\State(); // \Acqualify\Client\Model\State | State (2-letter abbreviation)
$zip = new \Acqualify\Client\Model\Zip(); // \Acqualify\Client\Model\Zip | Zip code
$dob = new \Acqualify\Client\Model\Dob(); // \Acqualify\Client\Model\Dob | Date of birth (MM/DD/YYYY)
$addr_line2 = new \Acqualify\Client\Model\AddrLine2(); // \Acqualify\Client\Model\AddrLine2 | Address line 2
$email = new \Acqualify\Client\Model\Email(); // \Acqualify\Client\Model\Email | Applicant email address
$phone_number = new \Acqualify\Client\Model\PhoneNumber(); // \Acqualify\Client\Model\PhoneNumber | Phone number
$loan_amount = new \Acqualify\Client\Model\LoanAmount(); // \Acqualify\Client\Model\LoanAmount | Loan amount

try {
    $result = $apiInstance->lookupApplicant($first_name, $last_name, $addr_line1, $city, $state, $zip, $dob, $addr_line2, $email, $phone_number, $loan_amount);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApplicantsApi->lookupApplicant: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **first_name** | [**\Acqualify\Client\Model\FirstName**](../Model/.md)| Applicant first name |
 **last_name** | [**\Acqualify\Client\Model\LastName**](../Model/.md)| Applicant last name |
 **addr_line1** | [**\Acqualify\Client\Model\AddrLine1**](../Model/.md)| Address line 1 |
 **city** | [**\Acqualify\Client\Model\City**](../Model/.md)| City |
 **state** | [**\Acqualify\Client\Model\State**](../Model/.md)| State (2-letter abbreviation) |
 **zip** | [**\Acqualify\Client\Model\Zip**](../Model/.md)| Zip code |
 **dob** | [**\Acqualify\Client\Model\Dob**](../Model/.md)| Date of birth (MM/DD/YYYY) |
 **addr_line2** | [**\Acqualify\Client\Model\AddrLine2**](../Model/.md)| Address line 2 | [optional]
 **email** | [**\Acqualify\Client\Model\Email**](../Model/.md)| Applicant email address | [optional]
 **phone_number** | [**\Acqualify\Client\Model\PhoneNumber**](../Model/.md)| Phone number | [optional]
 **loan_amount** | [**\Acqualify\Client\Model\LoanAmount**](../Model/.md)| Loan amount | [optional]

### Return type

[**\Acqualify\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearer_token](../../README.md#bearer_token)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

