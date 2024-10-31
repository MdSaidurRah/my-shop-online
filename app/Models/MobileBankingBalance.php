<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobileBankingBalance extends Model
{
    use HasFactory;

    protected $table = 'mobile_banking_accounts';
    public $timestamps = false;
    protected $fillable = ['providerNmae', 'onlineAmount' ];

}

