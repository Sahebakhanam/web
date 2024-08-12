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
    Schema::create('contact', function (Blueprint $table) {
        $table->string('id')->primary()->default(\Illuminate\Support\Str::uuid());
        $table->string('contact_name', 100)->nullable(); 
        $table->string('contact_company', 100)->nullable(); 
        $table->string('contact_email', 100)->nullable(); 
        $table->string('contact_phone', 15)->nullable(); 
        $table->string('contact_service', 50)->nullable(); 
        $table->decimal('contact_budget', 10, 2)->nullable(); 
        $table->text('contact_Description')->nullable();
        
        $table->timestamps(); 
    });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
