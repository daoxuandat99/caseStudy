<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Note extends Model
{
    public function noteType()
    {
        return $this->belongsTo('App\NoteType', 'type_id');
    }
}
