<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompanyWiseBranch extends Model
{
    use HasFactory;

    protected $fillable = ['company_id','branch_id'];

     /**
     * A companywisebranch belongs to a company.
     */
    public function company()
    {
        return $this->belongsTo(Company::class, 'company_id', 'id');
    }

    /**
     * A companywisebranch belongs to a branch.
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }
}
