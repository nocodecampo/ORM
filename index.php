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

// Obtener todos los actores //////////////
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

// Obtener todas las películas //////////////

try {
    $peliculas = Film::all();
    foreach ($peliculas as $pelicula) {
        echo "{$pelicula->film_id} - {$pelicula->title}<br>{$pelicula->description}<hr>";
    }
} catch (Exception $e) {
    echo "Error al obtener películas: " . $e->getMessage();
};


// Obtener todas las películas en las que ha actuado el actor ID:1 //////////////
/*
$actor = Actor::find(33);

echo "🎭 {$actor->first_name} {$actor->last_name} ha actuado en:<hr>";

foreach ($actor->peliculas as $pelicula) {
    echo "🎬 {$pelicula->title} ({$pelicula->release_year})<br>";
}
*/

// Obtener todos los actores que han actuado en ID:1 //////////////
/*
$pelicula = Film::find(3);

echo "🎬 Actores que actúan en {$pelicula->title}:<hr>";

foreach ($pelicula->actores as $actor) {
    echo "{$actor->actor_id}-{$actor->first_name} {$actor->last_name}<br>";
}
*/

// Agregar una Relación entre un Actor y una Película
/*
$actor = Actor::find(33);
$pelicula = Film::find(33); // Supongamos que existe una película con ID 33

$actor->peliculas()->attach($pelicula->film_id);
echo "✅ Actor agregado a la película.\n";
*/

