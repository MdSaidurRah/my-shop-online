<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductSale extends Model
{
    use HasFactory;

    protected $table = 'product_sales';
    public $timestamps = false;
    protected $fillable = ['shopId', 'productName', 'saleQuantity', 'saleAmount','date'];

}
