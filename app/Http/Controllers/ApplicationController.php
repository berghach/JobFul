<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Http\Requests\StoreApplicationRequest;
use App\Http\Requests\UpdateApplicationRequest;
use Illuminate\Support\Facades\Storage;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreApplicationRequest $request)
    {
        $validatedData = $request->validated();

        $application = new Application();
        $application->message = $validatedData['message'];
        $application->post_id = $validatedData['post_id'];
        $application->user_id = $validatedData['user_id'];
        $application->files = $validatedData['files'];
        foreach ($validatedData['files'] as $file) {
            // Storage::putFileAs()
        }
        $application->sections = $validatedData['sections'];
        $application->save();

        return redirect()->route('applications.index')->with('success', 'Application submitted successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Application $application)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateApplicationRequest $request, Application $application)
    {
        $validatedData = $request->validated();

        $application->update($validatedData);

        return redirect()->route('applications.index')->with('success', 'Application updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Application $application)
    {
        $application->files->each(function ($file) {
            Storage::delete($file->url);
        });
        $application->delete();
    }
}
