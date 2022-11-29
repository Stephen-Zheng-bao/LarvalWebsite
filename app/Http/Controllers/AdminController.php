<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{


    public function admin()
    {
        $items = DB::table('items')->select('id','productName','productQuantity','productCost','productDescription','productRating')->get();
        $users = DB::table('users')->select('id','name','email')->get();
        $past = DB::table('past_orders')->select('id','user_id','item_id','productName','price','orderQuantity')->get();
        return view('pages.admin')->with('items',$items)->with('users',$users)->with('past',$past);
    }


    public function editAdmin(Request $request){
        $id = $request->pid;
        $items = DB::table('items')->select('id','productName','productQuantity','productCost','productDescription','productRating')->where('id',$id)->get();
        return view('pages.editAdmin')->with('items',$items);
    }

    public function edit(Request $request)
    {

        $id=$request->pid;
        $name=$request->pname;
        $cost=$request->pcost;
        $description=$request->pdescription;
        $quantity=$request->pquantity;
        $rate=$request->prate;
        $items = DB::table('items')->select('id','productName','productQuantity','productCost','productDescription','productRating')->where('id',$id)->get();
        $q = ['productName' => $name,'productQuantity'=>$quantity,'productCost'=>$cost,'productDescription'=>$description,'productRating'=>$rate];
        $change = DB::table('items')
            ->where('id', $id)
            ->update($q);
        return redirect('/Admin')->with('items',$items);
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
