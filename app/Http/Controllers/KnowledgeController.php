<?php

namespace App\Http\Controllers;

use App\Models\Image;
use App\Models\Knowledge;
use App\Models\Tag;
use App\Models\TagKnowledge;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KnowledgeController extends Controller
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
        $tags = Tag::all();
        return view('admin.knowledge_create', compact('tags'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->except('_token');

        $knowledge = Knowledge::create([
            'title' => $data['title'],
            'excerpt' => $data['excerpt'],
            'content' => $data['content'],
            'date' => $data['date'],
            'creator' => Auth()->user()->name,
        ]);

        for ($i=0; $i < count($data['image']); $i++) { 
            Image::create([
                'knowledge_id' => $knowledge->id,
                'name' => $request->file('image')[$i]->store('images', 'public'),
            ]);
        }

        foreach ($data['tags'] as $key) {
            TagKnowledge::create([
                'knowledge_id' => $knowledge->id,
                'name' => $key,
            ]);
        }

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Knowledge $knowledge)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Knowledge $knowledge)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Knowledge $knowledge)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Knowledge $knowledge, $id)
    {
        $knowledge->destroy($id);
        return redirect()->back();
    }
}
