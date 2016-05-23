<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Ad;
use App\Sermon;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $previewMenu = Menu::orderBy('peso', 'ASC')->get();//Menú
        $hijos = Menu::where('id_padre', '<>', '')->orderBy('peso', 'ASC')->get();//Menú
        $anuncios = Ad::where('estatus', '=', 'publico')->get();
        $contador = 0;

        return view('front.index')
            ->with('previewMenu', $previewMenu)
            ->with('hijos', $hijos)
            ->with('anuncios', $anuncios)
            ->with('contador', $contador);
    }

    public function showSermon($slug)
    {
        $previewMenu = Menu::orderBy('peso', 'ASC')->get();//Menú
        $hijos = Menu::where('id_padre', '<>', '')->orderBy('peso', 'ASC')->get();//Menú
        $sermon = Sermon::with('month', 'year', 'preacher', 'user')->where('slug', '=', $slug)->first();
        
        //dd($sermon);

        return view('front.sermons.show')
            ->with('previewMenu', $previewMenu)
            ->with('hijos', $hijos)
            ->with('sermon', $sermon);
    }
}
