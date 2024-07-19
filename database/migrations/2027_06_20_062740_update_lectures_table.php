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
        Schema::table('lectures', function (Blueprint $table) {
            // Drop the existing foreign key to recreate it with cascade
            $table->dropForeign(['user_id']);

            // Recreate the foreign key with cascade on update and delete
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('lectures', function (Blueprint $table) {
            // Drop the foreign key with cascade to recreate the original
            $table->dropForeign(['user_id']);

            // Recreate the original foreign key
            $table->foreign('user_id')->references('id')->on('users');
        });
    }
};
