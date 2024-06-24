<?php

namespace App\Http\Controllers;

use App\Http\Requests\RepositoryRequest;
use App\Models\Repository;
use \Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class RepositoryController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        return view('repositories.index', [
            'repositories' => auth()->user()->repositories
        ]);
    }

    public function show(Repository $repository) 
    {
        // An user can only delete own repositories
        $this->authorize('pass', $repository);

        return view('repositories.show', [
            'repository' => $repository
        ]);
    }

    function create() 
    {
        return view('repositories.create');    
    }

    public function store(RepositoryRequest $request) 
    {
        $request->user()->repositories()->create($request->all());

        return redirect()->route('repositories.index');
    }

    public function edit(Repository $repository) 
    {
        // An user can only delete own repositories
        $this->authorize('pass', $repository);

        return view('repositories.edit', [
            'repository' => $repository
        ]);
    }

    public function update(RepositoryRequest $request, Repository $repository) 
    {
        // An user can only update own repositories
        $this->authorize('pass', $repository);

        $repository->update($request->all());

        return redirect()->route('repositories.edit', $repository);
    }

    public function destroy(Repository $repository) 
    {
        // An user can only delete own repositories
        $this->authorize('pass', $repository);

        $repository->delete();

        return redirect()->route('repositories.index');
    }
}
