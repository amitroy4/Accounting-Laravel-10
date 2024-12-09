<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FundingOrganization extends Model
{
    use HasFactory;
    protected $fillable = [
        'funding_organization_name',
        'organization_address',
        'organization_code',
        'country',
        'donor_type',
        'organization_contact_number',
        'organization_email',
        'organization_website',
        'status',
        'contact_person_name',
        'contact_person_designation',
        'contact_person_number',
        'contact_person_whatsapp_number',
        'contact_person_email',
    ];
    // Relationship with FundingOrganization
    public function fundingOrganizationdocument()
    {
        return $this->hasMany(FundingOrganizationDocument::class);
    }
}
