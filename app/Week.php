<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Week extends Model
{
    protected $guarded = ['id'];
    protected $school;
    protected $work;
    protected $training;
    protected $start_date;
    protected $end_date;
    protected $fillable = ['school', 'work', 'training', 'start_date', 'end_date'];

}
