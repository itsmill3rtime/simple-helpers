# Simple Helpers

Helper functions for laravel to ease development and increase readability

### Installation

Simple Helpers requires Laravel >= 5.1

Install Package:

```sh
$ composer require itsmill3rtime/simple-helpers
```

Add provider to Laravel config.php

```
'providers' => [
 ...
    \Itsmill3rtime\Helpers\SimpleHelpersProvider::class,
]
```

Some functions include a final parameter called $loose. This if set to true will use the == operator instead of ===

### Condition Helpers

| Function | |
| ------ | ------ |
| not_null($value) | returns true if value is not null, false if is null |
| is_false($value, $loose = false) | returns true if value is false, false if value is true |
| not_false($value, $loose = false) | returns true if value is not false, false if value is false |
| is_true($value, $loose = false) | returns true if value is true, false if value is false |
| not_true($value, $loose = false) | return true if value is not true, false if value is true |
| not_in_array($needle, $haystack) | returns true if value is not found in array, false if value is found |
| not_empty($value) | returns true if value is not empty, false if value is empty |


### Eloquent Helpers
| Function | |
| ------ | ------ |
| getInputs($request, $merge_in = []) | Takes laravel custom requests and returns only the fields present in $request->rules() array. $mergin_in field will merge in key pairs provided into the final output (useful for adding user_id, etc.) |
| enumMigration() | Call inside your migration when modifying a table that has enum columns. Allows updates without getting errors due to Doctrine not fully supporting enum type by emulating the enum column as string |

### Environment Helpers
| Function | |
| ------ | ------ |
| server($key) | returns $_SERVER($key), if key not found will return null |