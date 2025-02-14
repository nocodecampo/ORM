<?php

require 'database.php';

use App\Models\Actor;
use App\Models\Film;

/*
$actor = new Actor;
$actor -> first_name = 'Ramiriño';
$actor -> last_name = 'Pereira';
$actor -> save();
*/

// Obtener todos los actores
/*
try {
    $actores = Actor::all();
    foreach ($actores as $actor) {
        echo "{$actor->actor_id} - {$actor->first_name} {$actor->last_name}<br>";
    }
} catch (Exception $e) {
    echo "Error al obtener actores: " . $e->getMessage();
};
*/

// Obtener todas las películas
try {
    $peliculas = Film::all();
    foreach ($peliculas as $pelicula) {
        echo "{$pelicula->film_id} - {$pelicula->title}<br>{$pelicula->description}<hr>";
    }
} catch (Exception $e) {
    echo "Error al obtener películas: " . $e->getMessage();
};
