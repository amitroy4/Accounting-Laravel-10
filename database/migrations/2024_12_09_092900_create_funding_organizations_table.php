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
        Schema::create('funding_organizations', function (Blueprint $table) {
            $table->id();
            $table->string('funding_organization_name');
            $table->string('Organization_address');
            $table->string('organization_code')->nullable();
            $table->string('country')->nullable();
            $table->integer('donor_type')->nullable();
            $table->string('organization_contact_number')->nullable();
            $table->string('organization_email')->nullable();
            $table->string('organization_website')->nullable();
            $table->boolean('status')->default(1);
            $table->string('contact_person_name')->nullable();
            $table->string('contact_person_designation')->nullable();
            $table->string('contact_person_number')->nullable();
            $table->string('contact_person_whatsapp_number')->nullable();
            $table->string('contact_person_email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funding_organizations');
    }
};
