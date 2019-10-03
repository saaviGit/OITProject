<?php

namespace App\Http\Controllers;

use App\assignments;
use Illuminate\Http\Request;

class assignmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $assignments = assignments::all();

        return view('assignments.assignments',compact('assignments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //dd('1');
        return view('assignments.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Assignment = new assignments();

        $Assignment->sid = request('sid');
        $Assignment->sname = request('sname');
        $Assignment->lecturer = request('lecturer');
        $Assignment->file = request('file');

        $Assignment->save();

        return redirect('/assignments');
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Assignment = assignments::findOrFail($id);
        return view('assignments.show',compact('Assignment'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\assignments  $player
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $assignments = assignments::findOrFail($id);
        return view('assignments.edit',compact('assignments'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\assignments  $player
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //dd('grttt');

        $Assignment = assignments::findOrFail($id);

        $Assignment->sid = request('sid');
        $Assignment->sname = request('sname');
        $Assignment->lecturer = request('lecturer');
        $Assignment->file = request('file');

        $Assignment->save();

        return redirect('/assignments');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\assignments  $player
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // dd('dele');
        assignments::findOrFail($id)->delete();
        return redirect('/assignments');
    }
}
