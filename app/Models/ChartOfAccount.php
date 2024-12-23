<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChartOfAccount extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'project_id',
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
        'payment_type'
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted()
    {
        static::creating(function ($chartofaccount) {
            // Ensure the account code is generated before the record is created
            $chartofaccount->account_code = $chartofaccount->generateAccountCode();
        });
    }

    /**
     * Generate the account code for the current account.
     */
    public function generateAccountCode()
    {
        // Fetch the parent account if it exists
        $parent = $this->parent_account;

        // Generate the code based on the parent code
        if ($parent) {
            $parentCode = $parent->account_code;

            // Get the count of existing child accounts to generate the next sequence
            $childCount = self::where('parent_coa_id', $this->parent_coa_id)->count() + 1;

            if ($childCount <= 9) {
                $code = $parentCode . '-00' . $childCount;
            } elseif ($childCount <= 99) {
                $code = $parentCode . '-0' . $childCount;
            } else {
                $code = $parentCode . '-' . $childCount;
            }
        } else {
            // If no parent, generate a root code
            $rootCount = self::whereNull('parent_coa_id')->count() + 1;
            if ($rootCount <= 9) {
                $code = '00' . $rootCount;
            } elseif ($rootCount <= 99) {
                $code = '0' . $rootCount;
            } else {
                $code = (string) $rootCount;
            }
        }

        return $code;
    }


    /**
     * Get the next available ID for accounts under the same parent.
     */
    protected function getNextIdForParent()
    {
        // Fetch the count of child accounts under the same parent and increment by 1
        return self::where('parent_coa_id', $this->parent_coa_id)->max('id') + 1;
    }

    /**
     * Get the next available ID for root-level accounts (no parent).
     */
    protected function getNextRootId()
    {
        return self::whereNull('parent_coa_id')->max('id') + 1;
    }

    /**
     * Define the parent account relationship.
     */
    public function parent_account()
    {
        return $this->belongsTo(ChartOfAccount::class, 'parent_coa_id', 'id');
    }

    /**
     * Define the child accounts relationship.
     */
    public function child_account()
    {
        return $this->hasMany(ChartOfAccount::class, 'parent_coa_id');
    }

    public function project()
    {
        return $this->belongsTo(Project::class, 'project_id');
    }
}

