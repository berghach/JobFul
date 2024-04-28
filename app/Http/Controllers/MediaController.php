<?php

namespace App\Http\Controllers;

use App\Models\Media;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreMediaRequest;
use App\Http\Requests\UpdateMediaRequest;

class MediaController extends Controller
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
    public function store(StoreMediaRequest $request)
    {
        $validatedData = $request->validated();

        $media = new Media();
        $media->name = $validatedData['name'];
        $media->path = $request->file('path')->store('media'); // Assuming 'media' is the storage folder
        $media->type = $validatedData['type'];
        $media->save();

        return redirect()->route('media.index')->with('success', 'Media uploaded successfully.');

    }

    /**
     * Display the specified resource.
     */
    public function show(Media $media)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Media $media)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateMediaRequest $request, Media $media)
    {
        // Get the validated data from the request
    $validatedData = $request->validated();

    // Update the media record
    $media->name = $validatedData['name'];
    $media->type = $validatedData['type'];

    // Check if a new file is uploaded
    if ($request->hasFile('path')) {
        // Delete the old file if it exists
        Storage::delete($media->path);

        // Store the new file
        $media->path = $request->file('path')->store('media'); // Assuming 'media' is the storage folder
    }

    $media->save();

    // Redirect or return a response
    return redirect()->route('media.index')->with('success', 'Media updated successfully.');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Media $media)
    {
        if ($media->path) {
            Storage::delete($media->path);
            $media->delete();
        }
    }
}
