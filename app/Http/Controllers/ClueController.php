<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;
use App\Clue;
use PhpParser\Node\Expr\Closure;

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
        //$company_lists = RecordCompany::lists('company_name', 'id');

       // return View::make('admin.record_new', array('company_lists' => $company_lists));

        $area=new Area();



        return view('clue.create',compact($area));

    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'clue' => 'required|unique:clues,clue',
            'inOrEx' => 'required',
            'date' => 'required',
            'area'=>'required',

        ]);



        $clue=new Clue();
        $clue->clue=$request->clue;
        $clue->inOrEx=$request->inOrEx;
        $clue->area=$request->area;
        $clue->date=$request->date;
        $clue->remark=$request->remark;
        $clue->save();
        return redirect()->route('clue.index');

    }

    public function edit($id)
    {
        $clue=Clue::find($id);
        return view('clue.edit',compact('clue'));

    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'clue' => 'required|unique:clues,clue',
            'inOrEx' => 'required',
            //'date' => 'required',
            'area'=>'required',

        ]);

        $clue=Clue::findorFail($id);
        //dd($area);
        $clue->update($request->all());
        return redirect()->route('clue.index');
    }

}
