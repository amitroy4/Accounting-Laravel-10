<?php

namespace App\Models;

use App\Models\ProjectFunding;
use App\Models\ProjectApprovalDocument;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;
    protected $fillable = [
        'project_name',
        'project_short_name',
        'project_code',
        'project_area',
        'project_category',
        'parent_project_id',
        'project_budget',
        'currency_type',
        'is_core',
        'status',
        'project_start_date',
        'project_end_date',
        'approval_type',
        'project_approval_authority',
        'approval_reference_number',
        'approval_date',
        'branch_id',
    ];

    // Relationships
    public function funding()
    {
        return $this->hasMany(ProjectFunding::class);
    }

    public function approvalDocuments()
    {
        return $this->hasMany(ProjectApprovalDocument::class);
    }

    public function parentProject()
    {
        return $this->belongsTo(Project::class, 'parent_project_id');
    }

    /**
     * Get the child Project.
     */
    public function childProject()
    {
        return $this->hasMany(Project::class, 'parent_project_id');
    }

    /**
     * Get the branches that belong to the project.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

}
