<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $guarded = ['id'];
    protected $week_nr;
    protected $name;
    protected $profession;
    protected $department;
    protected $school;
    protected $work;
    protected $training;
    protected $start_date;
    protected $end_date;
    protected $fillable = ['week_nr', 'name', 'profession', 'department', 'school', 'work', 'training', 'start_date', 'end_date'];

}
