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

    protected static function booted()
    {
        static::created(function ($chartofaccount) {

            // Get the parent account
            $parent = $chartofaccount->parent_account; // Assuming the relationship is defined as 'parent_account'

            // Check if the account has a parent and generate the account code
            if ($parent) {
                $parentCode = $parent->account_code;

                // Generate the code based on the current account's ID
                if ($chartofaccount->id > 0 && $chartofaccount->id <= 9) {
                    $code = $parentCode . '-00' . $chartofaccount->id;
                } elseif ($chartofaccount->id > 9 && $chartofaccount->id <= 99) {
                    $code = $parentCode . '-0' . $chartofaccount->id;
                } else {
                    $code = $parentCode . '-' . $chartofaccount->id;
                }
            } else {
                // If no parent, use the ID directly as the base
                if ($chartofaccount->id > 0 && $chartofaccount->id <= 9) {
                    $code = '00' . $chartofaccount->id;
                } elseif ($chartofaccount->id > 9 && $chartofaccount->id <= 99) {
                    $code = '0' . $chartofaccount->id;
                } else {
                    $code = (string)$chartofaccount->id;
                }
            }

            // Assign and save the generated code
            $chartofaccount->account_code = $code;
            $chartofaccount->save();
        });
    }


    public function child_account()
    {
        return $this->hasMany(ChartOfAccount::class, 'parent_coa_id');
    }
    public function parent_account()
    {
        return $this->belongsTo(ChartOfAccount::class, 'parent_coa_id','id');
    }
}
