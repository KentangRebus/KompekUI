<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $table = "announcement";
    protected $primaryKey = "announcement_id";
    public $timestamps = true;

}
