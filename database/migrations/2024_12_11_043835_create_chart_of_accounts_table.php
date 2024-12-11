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
        Schema::create('chart_of_accounts', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('company_id')->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->unsignedBigInteger('updated_by')->nullable();
            $table->unsignedBigInteger('parent_coa_id')->nullable();
            $table->unsignedBigInteger('payment_type_id')->nullable();
            $table->unsignedBigInteger('project_id')->nullable();
            $table->string('account_code');
            $table->string('account_name');
            $table->string('account_type')->nullable();
            $table->boolean('is_auto_head')->default(true);
            $table->boolean('is_active')->default(true);
            $table->unsignedBigInteger('has_leaf')->default(false);

            // Corrected foreign key constraints
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('restrict');
            $table->foreign('created_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('restrict');
            $table->foreign('parent_coa_id')->references('id')->on('chart_of_accounts')->onDelete('restrict'); // Ensure 'chart_of_accounts' is the intended table
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chart_of_accounts');
    }
};
