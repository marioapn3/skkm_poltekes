<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailLetterType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];


    public function letterType()
    {
        return $this->belongsTo(LetterType::class);
    }
}
