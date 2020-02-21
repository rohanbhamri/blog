<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionary';

    protected $fillable = [
        'word',
        'meaning',
        'sentence_1',
        'sentence_2',
    ];
}
