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
        Schema::table('questions', function (Blueprint $table) {
            $table->text('option_e')->nullable(); // Menambahkan kolom option_e
            $table->enum('correct_answer', ['a', 'b', 'c', 'd', 'e'])->nullable()->change(); // Menambahkan 'e' ke enum correct_answer
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('questions', function (Blueprint $table) {
            $table->dropColumn('option_e'); // Menghapus kolom option_e jika migrasi dibatalkan
            $table->enum('correct_answer', ['a', 'b', 'c', 'd'])->nullable()->change(); // Mengembalikan correct_answer ke enum awal
        });
    }
};
