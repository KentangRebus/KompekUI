<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    protected $table = "participant";
    protected $primaryKey = "participant_id";
    public $timestamps = false;
    protected $fillable = [
        'participant_school',
        'participant_teacher',
        'participant_1',
        'participant_1_email',
        'participant_2',
        'participant_3',
        'participant_phone',
        'payment_proof',
        'registration_form',
        'competition_file',
        'credential_file'];

    public function competitions(){
        return $this->hasManyThrough(Competition::class,
            RegistrationDetail::class,
            'participant_id',
            'competition_id',
            'participant_id',
            'competition_id');
    }
}
