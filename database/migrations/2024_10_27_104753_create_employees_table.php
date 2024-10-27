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
        if(!Schema::hasTable('employees')){
            Schema::create('employees', function (Blueprint $table) {
                $table->id();
                $table->foreignId('country-id')->constrained()->cascadeOnDelete();
                $table->foreignid('state_id')->constrained()->cascadeOnDelete();
                $table->foreignid('city_id')->constrained()->cascadeOnDelete();
                $table->foreignid('department_id')->constrained()->cascadeOnDelete();
                $table->string('first_name');
                $table->string('last_name');
                $table->string('address');
                $table->string('zip_code');
                $table->date('birth_date');
                $table->date('date_hired');          
                $table->timestamps();
            });
        }    
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table){
            $table->dropForeign(['country_id']);
            $table->dropForeign(['state_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['department_id']);
        });
        Schema::dropIfExists('employees');
    }
};
