<?php

namespace App\Allday;

class Product
{
    public string $name;
    
    public int $priceInCents;
    
    public static function priceify($price)
    {
        $price = number_format($price / 100, 2);
        
        return '$' . $price;
    }
    
    public function __construct(string $name, int $priceInCents, int $priceInCentsOnSale = -1)
    {
        //
    }
    
    public function getPrice() : string
    {
        return self::priceify($this->priceInCents);
    }
}

?>