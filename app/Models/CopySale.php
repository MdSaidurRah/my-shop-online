<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CopySale extends Model
{
    use HasFactory;

    protected $table = 'copy_sales';
    public $timestamps = false;
    protected $fillable = ['shopId','productName','saleQuantity','saleAmount','date' ];

}
