<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategories extends Model
{
    protected $table = 'sub_categories';

    protected $fillable = [
        'cat_id',
        'subcat_name',
        'subcat_desc',
        'status',
    ];
}
