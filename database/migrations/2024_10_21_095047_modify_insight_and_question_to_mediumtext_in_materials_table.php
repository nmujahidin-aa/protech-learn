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
        Schema::table('materials', function (Blueprint $table) {
            // Mengubah tipe kolom insight dan question menjadi mediumText
            $table->mediumText('insight')->change();
            $table->mediumText('question')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('materials', function (Blueprint $table) {
            // Mengembalikan tipe kolom insight dan question menjadi string
            $table->string('insight')->change();
            $table->string('question')->change();
        });
    }
};
