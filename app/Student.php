<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    public $incrementing = true;
    protected $primaryKey = 'student_id';
}
