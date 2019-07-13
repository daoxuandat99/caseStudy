<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NoteType extends Model
{
    protected $table = 'note_types';
    public function notes()
    {
        return $this->hasMany('App\Note');
    }
}
