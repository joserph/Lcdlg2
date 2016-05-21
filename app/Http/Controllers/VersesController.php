<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Verse;
use App\Http\Requests\VerseRequest;
use Validator;

class VersesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $verses = Verse::orderBy('id', 'DESC')->get();
        $verses->each(function($verses)
        {
            $verses->user;
        });
        //dd($verses);
        return view('admin.verses.index')
            ->with('verses', $verses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.verses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(VerseRequest $request)
    {
        $verse = new Verse($request->all());
        $verse->verso = $verse->libro . ' ' . $verse->capitulo . ':' . $verse->versiculo;
        $verse->save();

        flash()->success('El versículo <b>' . $verse->libro . ' ' . $verse->capitulo . ':' . $verse->versiculo . '</b> se agregó con exito!');
        return redirect()->route('verses.index');        
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
        $verse = Verse::find($id);
        return view('admin.verses.edit')
            ->with('verse', $verse);
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
        $verse = Verse::find($id);
        $verse->fill($request->all());
        $verse->verso = $verse->libro . ' ' . $verse->capitulo . ':' . $verse->versiculo;
        $verse->save();

        flash()->warning('El versículo <b>' . $verse->libro . ' ' . $verse->capitulo . ':' . $verse->versiculo . '</b> se actualizó con exito!');
        return redirect()->route('verses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $verse = Verse::find($id);
        $verse->delete();

        flash()->error('El versículo <b>' . $verse->libro . ' ' . $verse->capitulo . ':' . $verse->versiculo . '</b> se eliminó con exito!');
        return redirect()->route('verses.index');
    }
}
