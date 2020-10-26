<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Student;

class Student extends Model
{
    public function index()
    {
        $student = Student::all();
    }
}
