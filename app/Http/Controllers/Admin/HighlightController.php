<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Highlight;
use App\Models\Menu;
use App\Http\Requests\HighlightStoreRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HighlightController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $highlights = Menu::latest('created_at')->first();
        return view('admin.highlights.index', compact('highlights'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.highlights.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(HighlightStoreRequest $request)
    {
        $image = $request->file('image')->store('public/highlights');

        Highlight::create([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description,
        ]);

        return to_route('admin.highlights.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Highlight $highlight)
    {
        return view('admin.highlights.edit', compact('highlight'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(HighlightStoreRequest $request, Highlight $highlight)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);

        $image = $highlight->image;
        if ($request->hasFile('image')) {
            Storage::delete($highlight->image);
            $image = $request->file('image')->store('public/highlights');
        }

        $highlight->update([
            'name' => $request->name,
            'image' => $image,
            'description' => $request->description
        ]);

        return to_route('admin.highlights.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Highlight $highlight)
    {
        Storage::delete($highlight->image);
        $highlight->delete();

        return to_route('admin.highlights.index');
    }
}
