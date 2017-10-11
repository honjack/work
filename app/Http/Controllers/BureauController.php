<?php

namespace App\Http\Controllers;

use App\Bureau;
use Illuminate\Http\Request;

class BureauController extends Controller
{
    public function index(){
        $bureaux=Bureau::all();
        return view('bureau.index',compact('bureaux'));
    }

    public function create(){
        return view('bureau.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'bureau' => 'required',
        ]);
        $bureau=$request->all();
        return view('bureau.create',compact('bureau'));



    }
}
