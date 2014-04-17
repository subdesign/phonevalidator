# Laravel 4 custom validation rule for Phone numbers

### Example

    +36 (30) 123-4567

### Allowed characters

    0-9, +, -, (, ), 'space'

### Usage
```php   
$rules = [  
    'phoneNumber' => 'required|phone'  
];  
```