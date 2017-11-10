<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clue;

class ClueController extends Controller
{
    public function index()
    {
        $clues=Clue::all();
        //dd($clues);
        return view('clue.index',compact('clues'));
    }

    public function create()
    {
        return view('clue.create');

    }

    public function edit($id)
    {
        $clue=Clue::find($id);
        return view('clue.edit',compact('clue'));

    }
}
