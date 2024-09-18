<?php

namespace App\Http\Controllers;

use App\Models\Knowledge;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $knowledge = Knowledge::all();

        return view('admin.index', compact('knowledge'));
    }
}
