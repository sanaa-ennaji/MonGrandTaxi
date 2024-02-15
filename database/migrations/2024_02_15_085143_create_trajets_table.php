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
        Schema::create('trajets', function (Blueprint $table) {
            Schema::create('table_trajets', function (Blueprint $table) {
                $table->id();
                $table->foreignId('Driver_id')->constrained();
                $table->string('departure');
                $table->string('destination');
                $table->dateTime('start_time');
                $table->string('status')->default('available');
                $table->foreignId('user_id')->constrained(); 
                $table->timestamps();
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trajets');
    }
};
