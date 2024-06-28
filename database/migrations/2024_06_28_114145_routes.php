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
        Schema::create('app_routes' , function(Blueprint $table) {
            $table->mediumIncrements('id');
            $table->string('parameter')->nullable();
            $table->string('route')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::create('app_routes' , function(Blueprint $table) {
            $table->dropIfExists();
        });
    }
};
