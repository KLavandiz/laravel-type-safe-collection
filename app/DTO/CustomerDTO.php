<?php

namespace App\DTO;

class CustomerDTO
{

    public string $name;
    public string $email;
    public string $address;

    public function __construct(string $name, string $email, string $address)
    {
        $this->name = $name;
        $this->email = $email;
        $this->address = $address;

    }

}
