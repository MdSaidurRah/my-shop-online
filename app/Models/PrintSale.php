<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintSale extends Model
{
    use HasFactory;

    protected $table = 'print_sales';
    public $timestamps = 'false';
    protected $fillable = [ 'shopId', 'productName', 'saleQuantity', 'saleAmount'];

}
