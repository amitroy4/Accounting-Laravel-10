<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'company_id',
        'created_by',
        'updated_by',
        'parent_coa_id',
        'payment_type_id',
        'account_code',
        'account_name',
        'account_type',
        'is_auto_head',
        'is_active',
        'has_leaf',
    ];

    public function child_account()
    {
        return $this->hasMany(ChartOfAccount::class, 'parent_coa_id');
    }
    public function parent_account()
    {
        return $this->belongsTo(ChartOfAccount::class, 'parent_coa_id','id');
    }
}
