```php
function processData(array $data): array {
  $processedData = [];
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $processedData[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $processedData[$key] = substr($value, 0, 10);
    } else {
      $processedData[$key] = $value; // Handle other data types
    }
  }
  return $processedData;
}

$data = [
  'name' => 'John Doe',
  'address' => '123 Main St, Anytown, CA 91234',
  'details' => [
    'age' => 30,
    'city' => 'Anytown',
    'description' => 'A very long description that exceeds the 10 character limit.'
  ]
];

$processedData = processData($data);
print_r($processedData); 
```