<?php

namespace App\Repositories\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Maromba extends Model
{
    use SoftDeletes;

    protected $table = 'marombas';

    protected $fillable = [
        'name',
        'age',
        'weight',
        'height',
        'gender'
    ];
}
