<?php

namespace App\Http\Controllers;

use App\Models\Repository;
use Illuminate\Http\Request;

class RepositoryController extends Controller
{
    public function index(Request $request)
    {
        return view('repositories.index', [
            'repositories' => $request->user()->repositories
        ]);
    }

    public function show(Request $request, Repository $repository) 
    {
        // An user can only delete own repositories
        if ($request->user()->id !== $repository->user_id) {
            abort(403);
        }

        return view('repositories.show', [
            'repository' => $repository
        ]);
    }

    public function store(Request $request) 
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required'
        ]);

        $request->user()->repositories()->create($request->all());

        return redirect()->route('repositories.index');
    }

    public function update(Request $request, Repository $repository) 
    {
        $request->validate([
            'url' => 'required',
            'description' => 'required'
        ]);

        // An user can only update own repositories
        if ($request->user()->id !== $repository->user_id) {
            abort(403);
        }

        $repository->update($request->all());

        return redirect()->route('repositories.edit', $repository);
    }

    public function destroy(Request $request, Repository $repository) 
    {
        // An user can only delete own repositories
        if ($request->user()->id !== $repository->user_id) {
            abort(403);
        }

        $repository->delete();

        return redirect()->route('repositories.index');
    }
}
