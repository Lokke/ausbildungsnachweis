<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Metadata extends Model
{
    protected $guarded = ['id'];
    protected $name;
    protected $profession;
    protected $department;
    protected $fillable = ['name', 'profession', 'department'];
    //
}
