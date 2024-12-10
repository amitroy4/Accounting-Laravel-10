<?php

namespace App\Models;

use App\Models\Project;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProjectFunding extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_id',
        'funding_organization_id',
        'funded_percentage',
        'funded_amount',
    ];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
    public function fundingOrganization()
    {
        return $this->hasMany(FundingOrganization::class);
    }
}
