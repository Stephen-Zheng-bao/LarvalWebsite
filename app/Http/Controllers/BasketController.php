<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPUnit\Framework\isEmpty;

class BasketController extends Controller
{


    public function basket()
    {
        $user =  Auth::user()->id;
        $BasketItems = DB::table('basket')->select('id','user_id','item_id','productName','price','orderQuantity')->where("user_id","=",$user)->get();
        $totalCost = DB::select('select SUM(price) from basket where user_id = ?',[$user]);

        return view('pages.basket')->with('items', $BasketItems);
    }


    public function addToBasket(Request $request)
    {
        $user = $request->user;
        $item = $request->item;
        $price= $request->price;
        $quantity= $request->quantity;
        $name = $request->name;
        DB::insert('insert into basket (user_id,item_id,productName,price,orderQuantity) value (?,?,?,?,?)',[$user,$item,$name,$price,$quantity]);


        session()->flash('success', 'Product is Added to Basket Successfully !');

        return redirect()->route('dashboard');
    }

    public function updateBasket(Request $request)
    {
        DB::update(
            'update basket set orderQuantity = ? where id = ?',
            [$request->quantity,$request->id]
        );

        session()->flash('success', 'Item Basket is Updated Successfully !');

        return redirect()->route('Basket');
    }

    public function removeBasket(Request $request)
    {
        DB::delete('delete from basket where id = ?',
            [$request->id]
        );
        session()->flash('success', 'Item Basket Remove Successfully !');

        return redirect()->route('Basket');
    }

    public function clearAllBasket(Request $request)
    {
        DB::delete('delete from basket where user_id = ?',
            [$request->id]
        );
        session()->flash('success', 'All Item Basket Clear Successfully !');

        return redirect()->route('Basket');
    }

    public function submitBasket(Request $request)

    {

        DB::insert('insert into past_orders (user_id,item_id,productName,price,orderQuantity) select user_id,item_id,productName,price,orderQuantity from basket where user_id = ?',
            [$request->id]);

        DB::delete('delete from basket where user_id = ?',
            [$request->id]
        );
        session()->flash('success', 'Items has been Purchased !');

        return redirect()->route('Basket');
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
        Basket::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'image' => $request->image
        ]);


        session()->regenerate();
        Session::put('key', 'value');
        request()->withCookie(cookie($request->userid, $request));


        session()->flash('success', 'Product is Added to Basket Successfully !');

        return redirect()->route('basket.list');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function show(Basket $basket)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function edit(Basket $basket)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Basket $basket)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Basket  $basket
     * @return \Illuminate\Http\Response
     */
    public function destroy(Basket $basket)
    {
        //
    }
}
