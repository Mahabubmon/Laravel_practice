<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Classes;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'class_id',
        'teacher_name',
    ];

    public function class()
    {
        return $this->belongsTo(Classes::class, 'class_id');
    }
}
