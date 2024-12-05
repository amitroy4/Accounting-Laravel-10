<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('company_name');
            $table->string('company_short_name')->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_district')->nullable();
            $table->string('company_zip_code')->nullable();
            $table->string('company_id_numner');
            $table->string('company_registration_number');
            $table->string('company_logo')->nullable();
            $table->boolean('status')->default(1);
            $table->string('company_contact_number');
            $table->string('company_land_line')->nullable();
            $table->string('company_whatsapp_number');
            $table->string('company_email');
            $table->string('company_website')->nullable();
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
