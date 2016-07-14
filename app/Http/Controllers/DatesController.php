<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Date;
use Laracasts\Flash\Flash;
use Validator;

class DatesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('editor');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.dates.index');
    }

    public function getList()
    {
        $dates = Date::select('id', 'fecha', 'tipo')->orderBy('id', 'DESC')->get();
        return response()->json(
            $dates->toArray()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.dates.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set('America/Caracas');
        if(\Request::ajax())
        {
            //Validamos 
            $validator = Validator::make($request->all(), [
                'fecha' => 'required|unique:dates',
                'tipo'  => 'required'
            ]);
            //Validamos si falla
            if($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'errors'    => $validator->getMessageBag()->toArray()
                ]);
            }else{
                //Si todo va bién
                $date = new Date($request->all());
                $date->save();
                //Si lo guarda
                if($date)
                {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'La fehca <b>' . $date->fecha . '</b> se agregó con exito!',
                        'date'      => $date->toArray()
                    ]);
                }
            }   
        }
        
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
        $date = Date::find($id);
        return response()->json(
            $date->toArray()
        );
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
        $date = Date::find($id);
        $date->fill($request->all());
        $date->save();

        return response()->json([
            'success'   => true,
            'message'   => 'La fecha <b>' . $date->fecha . '</b> se actualizó con exito!'
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $date = Date::find($id);
        $date->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'La fecha <b>' . $date->fecha . '</b> se eliminó con exito!'
        ]);
    }
}
