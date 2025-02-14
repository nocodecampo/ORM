<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $table = 'film';
    protected $primaryKey = 'film_id';

    // Si la tabla no tiene created_at y updated_at
    public $timestamps = false;
}
