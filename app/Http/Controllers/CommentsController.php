<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Comment;
use Validator;

class CommentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.comments.index');
    }

    public function getList()
    {
        $comments = Comment::with('sermon', 'article')->orderBy('id', 'DESC')->get();
        //dd($comments);
        return response()->json(
            $comments->toArray()
        );
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comments.create');
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
            $validator = Validator::make($request->all(), [
                'nombre'    => 'required',
                'comentario'=> 'required'
            ]);
            if($validator->fails())
            {
                return response()->json([
                    'success'   => false,
                    'errors'    => $validator->getMessageBag()->toArray()
                ]);
            }else{
                $comment = new Comment($request->all());
                $comment->save();

                if($comment)
                {
                    return response()->json([
                        'success'   => true,
                        'message'   => 'El comentario se agregó con exito!',
                        'comment'   => $comment->toArray()
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
        //
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
        //
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