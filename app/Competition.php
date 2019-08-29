<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    protected $table = "competition";
    protected $primaryKey = "competition_id";
    public $timestamps = true;
}
