<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $table = "courses";

    public $primarykey="id";

    protected  $guarded = ['id'];
}
