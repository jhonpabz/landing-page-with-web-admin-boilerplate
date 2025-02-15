<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public function index()
    {
        $links = Link::all();
        return view('links.index', compact('links'));
    }

    public function create()
    {
        return view('links.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'description' => 'required',
            'kind' => 'required',
            'website' => 'required|url'
        ]);

        Link::create($validated);

        return redirect()->route('links.index')
            ->with('success', 'Link created successfully.');
    }

    public function edit(Link $link)
    {
        return view('links.edit', compact('link'));
    }

    public function update(Request $request, Link $link)
    {
        $validated = $request->validate([
            'description' => 'required',
            'kind' => 'required',
            'website' => 'required|url'
        ]);

        $link->update($validated);

        return redirect()->route('links.index')
            ->with('success', 'Link updated successfully.');
    }

    public function destroy(Link $link)
    {
        $link->delete();

        return redirect()->route('links.index')
            ->with('success', 'Link deleted successfully.');
    }
}
