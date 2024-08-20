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
            $table->decimal('revenue', 10, 2)->nullable()->change();
            $table->decimal('expense', 10, 2)->nullable()->change();
            $table->decimal('balance', 10, 2)->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->decimal('revenue', 10, 2)->nullable(false);
            $table->decimal('expense', 10, 2)->nullable(false);
            $table->decimal('balance', 10, 2)->nullable(false);
        });
    }
};
