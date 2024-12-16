```php
function processData(array $data): array {
  foreach ($data as $key => $value) {
    if (is_array($value)) {
      $data[$key] = processData($value); // Recursive call
    } elseif (is_string($value) && strlen($value) > 10) {
      $data[$key] = substr($value, 0, 10); // Truncate strings longer than 10 characters
    }
  }
  return $data;
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