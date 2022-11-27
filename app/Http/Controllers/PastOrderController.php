<?php

namespace App\Http\Controllers;

use App\Models\PastOrder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PastOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        /*items::add([
            'user_id' => $request->userid,
            'item_id' => $request->itemid,
            'quantity' => $request->quantity
        ]);*/

        session()->flash('success', 'Product is Added to Cart Successfully !');
        return redirect()->route('dashboard');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PastOrder  $pastOrder
     * @return \Illuminate\Http\Response
     */
    public function show(PastOrder $pastOrder)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PastOrder  $pastOrder
     * @return \Illuminate\Http\Response
     */
    public function edit(PastOrder $pastOrder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PastOrder  $pastOrder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PastOrder $pastOrder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PastOrder  $pastOrder
     * @return \Illuminate\Http\Response
     */
    public function destroy(PastOrder $pastOrder)
    {
        //
    }
}
