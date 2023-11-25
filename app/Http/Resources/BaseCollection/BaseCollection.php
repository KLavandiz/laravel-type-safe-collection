<?php

namespace App\Http\Resources\BaseCollection;

use App\DTO\CustomerDTO;
use Illuminate\Support\Collection;


class BaseCollection
{
    private string $abstract;
    private Collection $collection;
    public string $collectionClass;

    private array $data = array();

    /**
     * @throws \ReflectionException
     */
    public function __construct(Collection $collection)
    {

        if(!isset($this->collectionClass) || !class_exists($this->collectionClass)){
            throw new \Exception("Reflection class is not exists");
        }

        $DTO = new \ReflectionClass($this->collectionClass);

        foreach ($collection as $collect){
            $props = $this->toArray($collect);
            $instance = $DTO->newInstanceArgs(array_values($props));
            $this->add($instance);
        }
       return $this->get();
    }

    public function  get():array{
        return $this->data;
    }

    public function add($instance):void{
        $this->data[] =$instance;
    }

    public function toArray($collect):array{
        return [];
    }
}
