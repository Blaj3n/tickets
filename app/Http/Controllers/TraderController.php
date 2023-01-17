<?php

namespace App\Http\Controllers;

use App\Models\Trader;
use Illuminate\Http\Request;

class TraderController extends Controller
{
    public function index(){
        $traders =  Trader::all();
        return $traders;
    }
    
    public function show($id)
    {
        $traders = Trader::find($id);
        return $traders;
    }
    public function destroy($id)
    {
        Trader::find($id)->delete();
    }
    public function store(Request $request)
    {
        $Trader = new Trader();
        $Trader->name = $request->name;
        $Trader->description = $request->description;
        $Trader->save();
    }

    public function update(Request $request, $id)
    {
        $Trader = Trader::find($id);
        $Trader->name = $request->name;
        $Trader->description = $request->description;
        $Trader->save();
    }
    public function newView()
    {
        $users = User::all();
        return view('trader.new', ['users' => $users]);
    }
    public function editView($id)
    {
        $users = User::all();
        $trader = Trader::find($id);
        return view('trader.edit', ['users' => $users, 'event' => $trader]);
    }
    public function listView(){
        $traders = Trader::all();
        return view('event.list', ['traders' => $traders]);
    }
    
    public function traderBetu($betu)
    {
        $traders=DB::table("traders as t")
        ->select("name")
        ->where("name", "like", "%".$betu."%")
        ->get();
        return $traders;
    }
    public function traderDb()
    {
        $traders=DB::table("traders as t")
        ->count("trade_id");
        return $traders;
    }
}
