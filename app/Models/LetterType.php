<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LetterType extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function detailLetterType()
    {
        return $this->hasMany(DetailLetterType::class);
    }
}
