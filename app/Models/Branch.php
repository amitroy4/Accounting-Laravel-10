<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_name',
        'branch_code',
        'parent_branch',
        'opening_time',
        'closing_time',
        'branch_address',
        'branch_district',
        'branch_zipcode',
        'contact_person_name',
        'branch_contact_number',
        'branch_land_line',
        'branch_whatsapp',
        'branch_email',
        'branch_logo',
        'status',
    ];

    /**
     * Get the parent branch.
     */
    public function parentBranch()
    {
        return $this->belongsTo(Branch::class, 'parent_branch');
    }

    /**
     * Get the child branches.
     */
    public function childBranches()
    {
        return $this->hasMany(Branch::class, 'parent_branch');
    }
}
