<?php

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
        Schema::create('detail_letter_types', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(LetterType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->string('activity_level')->nullable();
            $table->string('sub_activity_level')->nullable();
            $table->double('point');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_letter_types');
    }
};
