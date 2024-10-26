<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DuePayment extends Model
{
    use HasFactory;

    protected $table = 'due_payments';
    public $timestamps = false;
    protected $fillable = ['shopId', 'customerName', 'referenceItem', 'amount','date','balance'];

}
