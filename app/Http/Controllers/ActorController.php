<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index(Request $request)
    {
        $searchTerm = $request->input('search', '');
        
        if (!empty($searchTerm)) {
            $actors = Actor::where('name', 'like', '%' . $searchTerm . '%')->with('movies')->get();
        }else{
            $actors = Actor::with('movies')->get();
        }

        return view('actors.index', compact('actors', 'searchTerm'));
    }
}
