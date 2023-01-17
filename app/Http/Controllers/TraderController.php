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
}
