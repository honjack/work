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

        $bureau=new Bureau();
        $bureau->bureau=$request->bureau;
        $bureau->save();

        return redirect()->route('bureau.index');


    }

    public function edit($id)
    {
        $bureau=Bureau::find($id);
        //dd($bureau);
        //return view('bureau.edit',['bureau'=>$bureau]);
        return view('bureau.edit',compact('bureau'));


    }


    public function update(Request $request,$id)
    {
        //dd($id);
        $bureau = Bureau::find($id);
        $bureau->bureau=$request->bureau;
        //dd($bureau);
        $bureau->save();
        return redirect()->route('bureau.index');

    }
    
}
