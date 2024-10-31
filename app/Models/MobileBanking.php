<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBanking extends Model
{
    use HasFactory;

    protected $table = 'mobile_banking';
    public $timestamps = false;
    protected $fillable = ['shop_id', 'customer_number', 'provider', 'transactionType', 'amount', 'date' ];

}

