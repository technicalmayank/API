<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://raywhiteapi.ep.dynamics.net/v1/listings/');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// curl_setopt($ch, CURLOPT_POST, 1);

$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded; charset=ISO-8859-1';
$headers[] = 'X-APIKey: 64098FFC-D226-4C2F-BFFE-420FCAC56691';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$response = curl_exec($ch);
$result = json_decode($response);
// print_r($result->data);
// exit;
$data = $result->data;
foreach($data as $result){
  $propertyId = $result->value->propertyId;
  $title = $result->value->title;
  $description = $result->value->description;
  $listingStateCode = $result->value->listingStateCode;
  $listingState = $result->value->listingState;
  $type = $result->value->type;
  $price = $result->value->price;
  $bedrooms = $result->value->bedrooms;
  $bathrooms = $result->value->bathrooms;
  $carSpaces = $result->value->carSpaces;
  $streetNumber = $result->value->address->streetNumber;
  $streetName = $result->value->address->streetName;
  $streetType = $result->value->address->streetType;
  $streetTypeCode = $result->value->address->streetTypeCode;
  $suburb = $result->value->address->suburb;
  $region = $result->value->address->region;
  $state = $result->value->address->state;
  $country = $result->value->address->country;
  $postCode = $result->value->address->postCode;
}

if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
}
curl_close($ch);?>
