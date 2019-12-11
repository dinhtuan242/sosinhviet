<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SubcribeEmail extends Model
{
    protected $fillable = [
        'email', 'isSubcribe',
    ];
}
