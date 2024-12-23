<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Branch extends Model
{
    use HasFactory;
    protected $fillable = [
        'branch_name',
        'branch_code',
        'parent_branch',
        'company_id',
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

    /**
     * A branch belongs to a company through companywisebranch.
     */
    public function company()
    {
        return $this->belongsToMany(Company::class, CompanyWiseBranch::class, 'branch_id', 'company_id');
    }

    public function companyWiseBranch()
    {
        return $this->hasOne(CompanyWiseBranch::class, 'branch_id', 'id');
    }

    /**
     * Get the projects that belong to the branch.
     */
    public function projects()
    {
        return $this->hasMany(Project::class);
    }

    public function user()
    {
        return $this->hasOne(User::class, 'branch_id', 'id');
    }

}
