<?php

use App\Models\DetailLetterType;
use App\Models\LetterType;
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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('file');
            $table->string('no');
            $table->string('status')->default('Menunggu');
            $table->foreignIdFor(DetailLetterType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId('student_id')->references('id')->on('students');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
