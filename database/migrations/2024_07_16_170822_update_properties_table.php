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
        Schema::table('comics', function (Blueprint $table) {
            $table->text('description')->nullable()->change();
            $table->text('thumb')->nullable()->change();
            $table->decimal('price', $precision = 4, $scale = 2)->nullable()->change();
            $table->string('series', 50)->nullable()->change();
            $table->date('sale_date')->nullable()->change();
            $table->string('type', 20)->nullable()->change();
            $table->text('artists')->nullable()->change();
            $table->text('writers')->nullable()->change();
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comics', function (Blueprint $table) {
            $table->text('description')->change();
            $table->text('thumb')->change();
            $table->decimal('price', $precision = 4, $scale = 2)->change();
            $table->string('series', 50)->change();
            $table->date('sale_date')->change();
            $table->string('type', 20)->change();
            $table->text('artists')->change();
            $table->text('writers')->change();
        });
    }
};
