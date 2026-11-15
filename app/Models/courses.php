<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
class courses extends Model
{
    /** @use HasFactory<\Database\Factories\CoursesFactory> */
    use HasFactory;
    public function lecturer()
    {
        return $this->belongsTo(lecturers::class);
    }
    public function users ()
    {
        return $this->belongsToMany(User::class, 'course_users');
    }
}
