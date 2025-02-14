<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    protected $table = 'actor';
    protected $primaryKey = 'actor_id';

    // Si la tabla no tiene created_at y updated_at
    public $timestamps = false;

    // Relación Muchos a Muchos con Película
    public function peliculas() {
        return $this->belongsToMany(Film::class, 'film_actor', 'actor_id', 'film_id');
    }
}
