<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class StudyProgram extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get the headStudy that owns the StudyProgram
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function headStudy(): BelongsTo
    {
        return $this->belongsTo(Lecture::class, 'head_of_study', 'id');
    }
}
