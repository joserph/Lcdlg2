<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Menu;
use App\Http\Requests\MenuRequest;

class MenuController extends Controller
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
        $menus = Menu::with('user')->orderBy('id', 'DESC')->get();
        $menus->each(function($menus)
        {
            $menus->user;
        });
        $previewMenu = Menu::orderBy('peso', 'ASC')->get();
        $hijos = Menu::where('id_padre', '<>', '')->orderBy('peso', 'ASC')->get();
        $padres = Menu::where('tipo', '=', 'expandido')->orderBy('id', 'DESC')->get();//para use de la tabla
        //dd($menus);
        return view('admin.menu.index')
            ->with('menus', $menus)
            ->with('previewMenu', $previewMenu)
            ->with('hijos', $hijos)
            ->with('padres', $padres);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tipos =  ['normal' => 'Normal', 'expandido' => 'Expandido'];
        $categorias = ['articulo' => 'Artículo', 'fecha' => 'Fecha'];
        $padres = Menu::where('tipo', '=', 'expandido')->orderBy('id', 'DESC')->lists('nombre', 'id');

        return view('admin.menu.create', compact('tipos', 'categorias'))
            ->with('padres', $padres);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $request)
    {
        $menu = new Menu($request->all());
        $menu->save();

        flash()->success('El menú <b>' . $menu->nombre . '</b> se agregó con exito!');
        return redirect()->route('menu.index');
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
        $menu = Menu::find($id);
        $tipos =  ['normal' => 'Normal', 'expandido' => 'Expandido'];
        $categorias = ['articulo' => 'Artículo', 'fecha' => 'Fecha'];
        $padres = Menu::where('tipo', '=', 'expandido')->orderBy('id', 'DESC')->lists('nombre', 'id');

        return view('admin.menu.edit', compact('tipos', 'categorias'))
            ->with('menu', $menu)
            ->with('padres', $padres);
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
        $menu = Menu::find($id);
        $menu->fill($request->all());
        $menu->save();

        flash()->warning('El menú <b>' . $menu->nombre . '</b> se actualizó con exito!');
        return redirect()->route('menu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $menu = Menu::find($id);
        $menu->delete();

        flash()->error('El menú <b>' . $menu->nombre . '</b> de eliminó con exito!');
        return redirect()->route('menu.index');
    }
}
