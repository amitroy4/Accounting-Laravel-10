<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('project_name');
            $table->string('project_short_name')->nullable();
            $table->string('project_code')->nullable();
            $table->unsignedBigInteger('parent_project_id')->nullable();
            $table->string('project_area')->nullable();
            $table->string('project_category')->nullable();
            $table->decimal('project_budget')->nullable();
            $table->string('currency_type')->nullable();
            $table->boolean('is_core')->default(1);
            $table->boolean('status')->default(1);
            $table->date('project_start_date')->nullable();
            $table->date('project_end_date')->nullable();
            $table->string('approval_type')->nullable();
            $table->string('project_approval_authority')->nullable();
            $table->string('approval_reference_number')->nullable();
            $table->date('approval_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects');
    }
};
