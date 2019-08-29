<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrationDetail extends Model
{
    protected $table = "registration_detail";
    protected $primaryKey = "registration_id";
    public $timestamps = true;

}
