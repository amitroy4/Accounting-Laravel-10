<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CurrencyType extends Model
{
    use HasFactory;
    protected $fillable = [
        'currency_name',
        'currency_short_name',
        'currency_code',
        'status',
    ];
}
