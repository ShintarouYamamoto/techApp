<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCourse extends Model
{
    protected $table = 'users_courses';

    protected $primaryKey = ['user_id', 'course_id'];

    protected $fillable = [
        'user_id',
        'course_id',
    ];
    
}
