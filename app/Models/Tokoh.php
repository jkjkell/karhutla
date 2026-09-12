<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tokoh extends Model
{
    protected $table = 'tokoh';

    protected $fillable = [
        'nama',
        'foto',
        'deskripsi',
        'link',
        'sumber',
        'status',
        'user_id',
    ];
}