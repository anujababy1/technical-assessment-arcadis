<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PeopleController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search');
        $people = [];

        if (!empty($searchTerm)) {
            $response = Http::get("https://swapi.dev/api/people/?search={$searchTerm}");
            $people = $response->json()['results'] ?? [];
        }

        return view('people.index', compact('people', 'searchTerm'));
    }
}
