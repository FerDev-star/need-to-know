<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use App\Models\Tag;
use App\Models\TagKnowledge;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // show the index page to the guest
    public function index()
    {
        $knowledge = Knowledge::all();
        $tags = Tag::all();
        return view('guest.index', compact('knowledge', 'tags'));
    }

    // show the knowledge details page to the guest
    public function show($id)
    {
        $knowledge = Knowledge::find($id);
        return view('guest.detail', compact('knowledge'));
    }

    public function register(Request $request) 
    {
        $data = $request->except('_token');

        if ($data['password'] == $data['confirm_password']) {
            User::create([
                'name' => $data['username'],
                'password' => $data['password'],
            ]);

            return redirect()->route('login.page');
        }

        return redirect()->back()->with('message', 'Passwords are diferent.');
    } 

    // search the knowledge related to the request
    public function search(Request $request)
    {
        $tags = $request->tags;
        $title = $request->title;
        $date = $request->date;

        $query = TagKnowledge::query();

        if (!empty($tags)) {
            $query->whereHas('knowledge', function ($q) use ($tags)  {
                $q->whereIn('name', $tags);
            });

            $knowledge = $query->join('knowledge', 'knowledge.id', '=', 'tag_knowledge.knowledge_id')
                                ->distinct('knowledge.id')
                                ->select('knowledge.*')
                                ->get();
            
            $knowledge = $knowledge->map(function ($item) {
                return Knowledge::find($item->id);
            });

            if ($title || $date) {
                $knowledge = $knowledge::where('title', 'like', $title)
                                        ->orwhere('date', $date)
                                        ->get();
            }

            $tags = Tag::all();
            return view('guest.index', compact('knowledge', 'tags'));
        }

        if ($title || $date) {
            $knowledge = Knowledge::where('title', $title)
                                    ->orwhere('date', $date)
                                    ->get();
            
            $tags = Tag::all();
            return view('guest.index', compact('knowledge', 'tags'));                            
        }

        $knowledge = Knowledge::all();
        $tags = Tag::all();
        return view('guest.index', compact('knowledge', 'tags'));
    }
}
