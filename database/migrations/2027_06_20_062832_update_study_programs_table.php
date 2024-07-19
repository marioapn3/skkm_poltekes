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
        Schema::table('study_programs', function (Blueprint $table) {
            // Drop the existing foreign key to recreate it with cascade
            $table->dropForeign(['head_of_study']);

            // Recreate the foreign key with cascade on update and delete
            $table->foreign('head_of_study')->references('id')->on('lectures')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('study_programs', function (Blueprint $table) {
            // Drop the foreign key with cascade to recreate the original
            $table->dropForeign(['head_of_study']);

            // Recreate the original foreign key without cascade
            $table->foreign('head_of_study')->references('id')->on('lectures');
        });
    }
};
