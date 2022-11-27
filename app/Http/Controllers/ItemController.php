<?php

namespace App\Http\Controllers;

use App\Models\item;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Support\Facades\DB;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function showProduct()
    {
        $items = DB::table('items')->select('id','productName','productQuantity','productCost','productType','productImage','productDescription','productRating')->get();
        return view('/dashboard')->with('items', $items);
    }




    public function filter(Request $request)
    {
        $items = DB::select('select * from items where productType = ?', [$request->filter]);
        return view('/dashboard')->with('items', $items);
    }


    public function search(Request $request)
    {
        $items = DB::select('select * from items where productName like %?%', [$request->search]);
        return view('/dashboard')->with('items', $items);
    }

   /* public function filter(Request $request)
    {
        $items = DB::select('select * from items where productName = ?', [$request->filter]);
        return view('/dashboard', ['item' => $items]);
    }

    public function search(Request $request)
    {
        $items = DB::select('select * from items where productName like ?', [$request->search]);

        return view('/dashboard', ['item' => $items]);
    }*/











    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

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
    public function update(Request $request, item $item)
    {
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
        //
    }
}
