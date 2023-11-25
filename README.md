<h1 align="center">
 Laravel Type-Safe Collection Class
</h1>


## Usage

```php
class CustomerCollection extends BaseCollection //extend base collection class
{
    public string $collectionClass = CustomerDTO::class; //mention your DTO object
	
    public function toArray($collect): array
    {
        return [
            'name' => $collect->name,
            'email' => $collect->email,
            'address' => $collect->address
        ];
    }
}
```

```php

		$customers = Customer::all(); 
        return new CustomerCollection($customers);
		
		when calling
		
		$CollectionList =  $customerCollection->getAllCustomers()->get() // An array of DTO
		
```

## Licence and Postcardware

This software is open source and licensed under the [MIT license](LICENSE.md).

If you use this software in your daily development we would appreciate to receive a postcard

Please send it to: kemal@lavandiz.com