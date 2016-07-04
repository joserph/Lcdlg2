<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Church;
use App\Http\Requests\ChurchRequest;

class ChurchController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $church = Church::find(1);
        //dd($church);
        return view('admin.church.index')
            ->with('church', $church);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return view('admin.church.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ChurchRequest $request)
    {
        /*$church = new Church($request->all());
        $church->save();

        flash()->success('La iglesia <b>' . $church->nombre . '</b> se agregó con exito!');
        return redirect()->route('church.index');*/
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $church = Church::find($id);
        return view('admin.church.edit')
            ->with('church', $church);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ChurchRequest $request, $id)
    {
        $church = Church::find($id);
        $church->fill($request->all());
        $church->save();

        flash()->warning('La Iglesia <b>' . $church->nombre . '</b> se actualizó con exito!');
        return redirect()->route('church.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
