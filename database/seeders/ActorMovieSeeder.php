<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\Actor;
use App\Models\Movie;

class ActorMovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $actors = Actor::all();

        $actors->each(function ($actor) {
            $movies = Movie::inRandomOrder()->take(rand(3, 5))->pluck('id');
            $actor->movies()->attach($movies);
        });
    }
}
