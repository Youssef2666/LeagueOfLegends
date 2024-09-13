<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CharacterClasses extends Model
{
    use HasFactory;

    protected $fillable = ['class_type', 'sub_type'];
}
