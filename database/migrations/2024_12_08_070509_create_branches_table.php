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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('branch_name', 255);
            $table->string('branch_code', 255)->nullable();
            $table->unsignedBigInteger('parent_branch')->nullable(); // Nullable for top-level branches
            $table->time('opening_time')->nullable();
            $table->time('closing_time')->nullable();
            $table->string('branch_address', 500);
            $table->string('branch_district', 255)->nullable();
            $table->string('branch_zipcode', 10)->nullable();
            $table->boolean('status')->default(1);
            $table->string('contact_person_name', 15)->nullable();
            $table->string('branch_contact_number', 15)->nullable();
            $table->string('branch_land_line', 15)->nullable();
            $table->string('branch_whatsapp', 15)->nullable();
            $table->string('branch_email', 255)->nullable();
            $table->string('branch_logo')->nullable();
            $table->timestamps();

            $table->foreign('parent_branch')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
