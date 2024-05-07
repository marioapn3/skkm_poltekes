<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function detailLetterType()
    {
        return $this->belongsTo(DetailLetterType::class);
    }

    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
