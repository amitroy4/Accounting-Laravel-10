<?php

namespace App\Models;

use App\Models\FundingOrganization;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class FundingOrganizationDocument extends Model
{
    use HasFactory;
    protected $fillable = [
        'funding_organization_id',
        'file_name',
        'file_path',
    ];

    // Relationship with FundingOrganization
    public function fundingOrganization()
    {
        return $this->belongsTo(FundingOrganization::class);
    }
}
