<?php

namespace App\Http\Resources;



use App\DTO\CustomerDTO;
use App\Http\Resources\BaseCollection\BaseCollection;

class CustomerCollection extends BaseCollection //extend base collection class
{
    public string $collectionClass = CustomerDTO::class;
    public function toArray($collect): array
    {
        return [
            'name' => $collect->name,
            'email' => $collect->email,
            'address' => $collect->address
        ];
    }
}
