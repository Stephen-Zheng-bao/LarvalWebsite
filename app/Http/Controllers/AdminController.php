<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Http\Testing\MimeType;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public function admin()
    {
        $items = DB::table('items')->select('id','productName','productCost','productQuantity','productDescription','productRating')->get();
        $users = DB::table('Users')->select('name','email')->get();
        $past = DB::table('past_orders')->select('user_id','item_id','orderQuantity')->get();
        return view('pages.admin')->with('items',$items)->with('users',$users)->with('past',$past);

    }















    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function adminEdit(Request $request)
    {
        $itemID = $request->productID;
        $item = DB::table('items')->select('id','productName','productCost','productQuantity','productDescription','productRating')->where('id','=',$itemID)->get();
        return view('pages.adminEdit')->with('item',$item);
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
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request){
        $pname = $request->pname;
        $pcost = $request->pcost;
        $pquantity =$request->pquantity;
        $description = $request->pdescription;
        $prate = $request->prate;
        $id = $request->pid;
        $affected = DB::table('items')
                        ->where('id', $id)
                        ->update(['productName' => $pname],['productCost' =>$pcost],['productQuantity'=>$pquantity],['productDescription'=> $description],['productRating'=>$prate]);
        $items = DB::table('items')->select('id','productName','productCost','productQuantity','productDescription','productRating')->get();
        $users = DB::table('Users')->select('name','email')->get();
        $past = DB::table('past_orders')->select('user_id','item_id','orderQuantity')->get();
        return view('pages.admin')->with('items',$items)->with('users',$users)->with('past',$past);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}
