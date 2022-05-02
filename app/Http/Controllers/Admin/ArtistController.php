<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Artist;
use Illuminate\Http\Request;

class ArtistController extends Controller
{
    public function index(Request $request)
    {
        $artists = Artist::query()
            ->search($request->get('search'))
            ->paginate(10);

        return view('admin.artists.index', compact('artists'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit(Artist $artist)
    {
        //
    }

    public function update(Request $request, Artist $artist)
    {
        //
    }

    public function destroy(Artist $artist)
    {
        //
    }
}
