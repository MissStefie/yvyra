<?php

namespace App\Http\Controllers;

use App\Models\Tree;

use Illuminate\Http\Request;

class TreesController extends Controller
{
    public function index()
    {
        $trees = Tree::all(); 
        return view('trees.index', compact('trees')); 
    }

    public function show(Tree $tree)
    {
        return view('trees.show', compact('tree'));
    }
}
