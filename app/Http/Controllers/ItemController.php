<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=Item::all();
        return view('item.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=Item::all();
        return view('item.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'kodebarang'=> 'required',
            'namabarang'=> 'required',
            'harga'=>'required',
            'stock'=>'required',
            'kategori' =>'required',

        ]);

    item::create($data);



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $item = item::where('id', $id)->first();
        $postdata =(['kodebarang' => $request->kodebarang,
        'namabarang' => $request->namabarang,
        'stok' =>$request->stok,
        'harga' => $request->harga]);
        $item->update($postdata);
        return redirect('/barang')->with('succes','Data Berhasil Diedit');
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(item $item)
    {
        item::destroy($item->id);
        return redirect('/item')->with('sukses','data berhasil dihapus');
    }
}