<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Preacher;
use Validator;

class PreachersController extends Controller
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
        return view('admin.preachers.index');
    }

    public function getList()
    {
        $preachers = Preacher::orderBy('id', 'desc')->get();
        return response()->json(
            $preachers->toArray()
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.preachers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(\Request::ajax())
        {
            //Validamos 
            $validator = Validator::make($request->all(), [
                'nombre' => 'required|unique:preachers'
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
                $preacher = new Preacher($request->all());
                //Guardamos
                $preacher->save();
                //Si lo guarda
                if($preacher)
                {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'El predicador <b>' . $preacher->nombre . '</b> se agregó con exito!',
                        'preacher'     => $preacher->toArray()
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
        $preacher = Preacher::find($id);
        return response()->json(
            $preacher->toArray()
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
        $preacher = Preacher::find($id);
        $preacher->fill($request->all());
        $preacher->save();

        return response()->json([
            'success'   => true,
            'message'   => 'El predicador <b>' . $preacher->nombre . '</b> se actualizó con exito!'
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
        $preacher = Preacher::find($id);
        $preacher->delete();

        return response()->json([
            'success'   => true,
            'message'   => 'El predicador <b>' . $preacher->nombre . '</b> se eliminó con exito!'
        ]);
    }
}
