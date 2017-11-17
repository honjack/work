<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Area;

class AreaController extends Controller
{
    public function index()
    {
        $areas=Area::all();
        return view('area.index',compact('areas'));

    }

    public function create()
    {
        return view('area.create');
        
    }

    public function store(Request $request)
    {
        $area=new Area();
        $area->area=$request->area;
        $area->save();
        return redirect()->route('area.index');
        
    }

    public function edit($id)
    {
        $area=Area::find($id);
        //dd($area);
        return view('area.edit',compact('area'));
    }

    public function update(Request $request, $id)
    {
        $area=Area::find($id);
        //dd($area);
        $area->area=$request->area;
        $area->save();
        return redirect()->route('area.index');
    }

    public function lists()
    {
        $areas=new Area();
        foreach ($area as $area){
            return $area;
        }
        
    }
    
}
