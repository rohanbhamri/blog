<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $table = 'articles';

    protected $fillable = [
        'subcat_id',
        'title',
        'short_desc',
        'breif',
    ];
}
