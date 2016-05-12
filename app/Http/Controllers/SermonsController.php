<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Date;
use App\Sermon;
use App\Preacher;

class SermonsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sermons = Sermon::with('month', 'year', 'preacher', 'user')->orderBy('id', 'DESC')->get();
        $sermons->each(function($sermons)
        {
            $sermons->month;
            $sermons->year;
            $sermons->preacher;
            $sermons->user;
        });
        //dd($sermons);
        return view('admin.sermons.index')
            ->with('sermons', $sermons);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $months = Date::where('tipo', '=', 'mes')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $years = Date::where('tipo', '=', 'año')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $preachers = Preacher::orderBy('id', 'DESC')->lists('nombre', 'id');
        //dd($preachers);
        return view('admin.sermons.create')
            ->with('months', $months)
            ->with('years', $years)
            ->with('preachers', $preachers);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sermon = new Sermon($request->all());
        $sermon->save();

        flash()->success('La prédica <b>' . $sermon->title . '</b> se agregó con exito!');
        return redirect()->route('sermons.index');
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
        $sermon = Sermon::find($id);
        $months = Date::where('tipo', '=', 'mes')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $years = Date::where('tipo', '=', 'año')->orderBy('id', 'DESC')->lists('fecha', 'id');
        $preachers = Preacher::orderBy('id', 'DESC')->lists('nombre', 'id');

        return view('admin.sermons.edit')
            ->with('sermon', $sermon)
            ->with('months', $months)
            ->with('years', $years)
            ->with('preachers', $preachers);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $sermon = Sermon::find($id);
        $sermon->fill($request->all());
        $sermon->save();

        flash()->warning('La prédica <b>' . $sermon->title . '</b> se actualizó con exito!');
        return redirect()->route('sermons.index');
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
