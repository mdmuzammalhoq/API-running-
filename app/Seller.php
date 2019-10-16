<?php

namespace App;

use App\User;
use App\Product;

class Seller extends User
{
    public function products(){
    	return $this->hasMnay(Product::class);
    }
}
