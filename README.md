# PHP Recursive Function Bug
This repository demonstrates a subtle bug in a PHP recursive function that unexpectedly truncates strings longer than 10 characters within nested arrays. The function intends to process an array, recursively handling nested arrays and truncating strings.  However, the truncation logic interacts unexpectedly with the recursive call, leading to incorrect results.

## Bug Description
The `processData` function is designed to process an array, recursively handling nested arrays.  If an element is a string longer than 10 characters, it should be truncated to 10 characters. The bug lies in how the function handles nested arrays. The recursive call modifies the original array, leading to unexpected behavior and data loss when long strings are encountered in nested arrays.

## How to Reproduce
1. Clone this repository.
2. Run `bug.php`.
3. Observe the unexpected truncation of the 'description' string within the nested 'details' array.