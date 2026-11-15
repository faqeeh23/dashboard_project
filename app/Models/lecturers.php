<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
class lecturers extends Model
{
    /** @use HasFactory<\Database\Factories\LecturersFactory> */
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function courses()
    {
        return $this->hasMany(courses::class);
    }
}
