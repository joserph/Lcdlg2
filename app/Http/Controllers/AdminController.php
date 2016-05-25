<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Date;
use App\Preacher;
use App\Sermon;
use App\Menu;
use App\Ad;
use App\Verse;
use App\Comment;

class AdminController extends Controller
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
        $countUsers = User::count();
        $countDates = Date::count();
        $countPreachers = Preacher::count();
        $countSermons = Sermon::where('tipo', '=', 'predica')->count();
        $countArticles = Sermon::where('tipo', '=', 'articulo')->count();
        $countMenu = Menu::count();
        $countAds = Ad::count();
        $countVerses = Verse::count();
        $countComments = Comment::count();
        //dd($countUsers);
        return view('admin.index')
            ->with('countUsers', $countUsers)
            ->with('countDates', $countDates)
            ->with('countPreachers', $countPreachers)
            ->with('countSermons', $countSermons)
            ->with('countArticles', $countArticles)
            ->with('countMenu', $countMenu)
            ->with('countAds', $countAds)
            ->with('countVerses', $countVerses)
            ->with('countComments', $countComments);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
