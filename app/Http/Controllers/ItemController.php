<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Item;
use Laracasts\Flash\Flash;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = DB::table('items')->paginate(5);
        
        return view('00_admin.01_items.items_index') -> with('items', $items);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('00_admin.01_items.items_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Item($request -> all());
        $item -> save();
        Flash::success("Se ha añadido ". $item->name . " de forma correcta");
        return redirect()->route('items.index');
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
    public function edit($id_item)
    {
         $item = Item::find($id_item);
         
         return view('00_admin.01_items.items_edit')->with('item', $item);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_item)
    {
        $item = Item::find($id_item);
        $item->ip = $request->ip;
        $item->type = $request->type;
        $item->description = $request->description;
        //$item->state = $request->state;
        $item->id_usuario = $request->id_usuario;
        $item -> save();
        
        Flash::warning("El dispositivo ". $item->type . " se ha editado de forma correcta");
        return redirect()->route('items.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_item)
    {
        $item = Item::find($id_item);
        $item->delete();
        
        Flash::warning("El dispositivo ". $item->type . " se ha eliminado de forma correcta");
        return redirect()->route('items.index');
    }
}
