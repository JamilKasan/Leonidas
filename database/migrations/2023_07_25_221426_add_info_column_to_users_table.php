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
        Schema::table('users', function (Blueprint $table) {
            $table->date('dob')->nullable();
            $table->integer('age')->nullable();
            $table->float('height')->nullable();
            $table->float('first_weight')->nullable();
            $table->float('last_weight')->nullable();
            $table->float('goal_weight')->nullable();
            $table->text('gender')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
