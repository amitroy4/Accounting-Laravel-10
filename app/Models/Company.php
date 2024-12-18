<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $fillable = [
        'company_name',
        'company_short_name',
        'company_address',
        'company_district',
        'company_zip_code',
        'company_code',
        'company_registration_number',
        'company_logo',
        'status',
        'company_contact_number',
        'company_land_line',
        'company_whatsapp_number',
        'company_email',
        'company_website',
    ];

    /**
     * A company has many branches through companywisebranch.
     */
    public function branches()
    {
        return $this->hasManyThrough(Branch::class, CompanyWiseBranch::class, 'company_id', 'id', 'id', 'branch_id');
    }

}
